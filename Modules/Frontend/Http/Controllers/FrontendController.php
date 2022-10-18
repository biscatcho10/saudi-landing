<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laraeast\LaravelSettings\Facades\Settings;
use Mail;
use Modules\Frontend\Emails\RequestMail;
use Modules\Frontend\Entities\ContactRequest;
use Modules\HowKnow\Entities\Reason;
use Modules\Settings\Entities\Subscriber;

class FrontendController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function index()
    {
        $reasons = Reason::all();
        return view('frontend::index', [
            'reasons' =>$reasons
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
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

        notify()->success(__('Your data sent successfully'));
        return redirect()->back();
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
        // $email_template = str_replace('{vaccine}', $vaccine->name, $email_template);
        $details = [
            'subject' => Settings::get('mail_subject'),
            'body' => $email_template,
            'actionText' => env('APP_NAME'),
            'actionURL' => url('/'),
            'code' => $code
        ];

        Mail::to($email)->send(new RequestMail($details));
    }
}
