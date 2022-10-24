<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laraeast\LaravelSettings\Facades\Settings;
use Mail;
use Modules\Frontend\Emails\RequestMail;
use Modules\Frontend\Entities\ContactRequest;
use Modules\HowKnow\Entities\Reason;
use Validator;

class FrontendController extends Controller
{

    public function index()
    {
        $reasons = Reason::all();
        $codes = config('countrycodes');
        return view('frontend::index', [
            'reasons' => $reasons,
            'codes' => $codes
        ]);
    }


    public function requestPost(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            "name" => 'required',
            "nationality" => 'required',
            "email" => 'required|email',
            "phone_number" => 'required',
            "profession" => 'required',
            "reason" => 'required|exists:reasons,reason',
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            notify()->error($firstError);
            return redirect()->back();
        }

        $request->merge([
            'reason_id' => Reason::where('reason', '=', $request->reason)->first()->id,
            'phone_number' => $request->code . " " . $request->phone_number
        ]);

        $contact = ContactRequest::create($request->except('_token'));

        $references = ContactRequest::pluck('reference_num')->toArray();
        $contact->update([
            "reference_num" => $this->makeReference($references),
        ]);

        // send mail
        $this->sendEmail($contact->name, $contact->email, $contact->reference_num);

        notify()->success(__('Your data sent successfully.'));
        return redirect()->route('thanks.page');
    }


    public function thanks()
    {
        return view('frontend::thanks');
    }


    protected function makeReference($references)
    {
        $ref_num = rand(1000000, 9999999);

        if (!in_array($ref_num, $references)) {
            return $ref_num;
        } else {
            $this->makeReference($references);
        }
    }


    public function sendEmail($name, $email, $code)
    {
        $email_template = Settings::get('mail_message');
        $email_template = str_replace('{user_name}', $name, $email_template);

        $details = [
            'subject' => Settings::get('mail_subject'),
            'body' => $email_template,
            'actionText' => env('APP_NAME'),
            'actionURL' => url('/'),
            'code' => $code
        ];

        Mail::to($email)->send(new RequestMail($details));
    }

    public function attend(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|exists:contact_requests,reference_num',
        ],[
            'code.exists' => "Sorry, This Qr code is not valid"
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $contact_request = ContactRequest::where('reference_num', $request->code)->first();

        $contact_request->update([
            'attended' => true
        ]);

        return response()->json([
            'status' => 'success',
            'msg' => "The User has been attended successfully.",
            'data' => $contact_request
        ]);

    }
}
