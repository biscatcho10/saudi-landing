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
//            'reasons' => $reasons,
            'codes' => $codes
        ]);
    }


    public function requestPost(Request $request)
    {

        $request->merge([
            // 'reason_id' => Reason::where('reason', '=', $request->reason)->first()->id,
            'phone_number' => $request->code . $request->phone_number
        ]);

        $validator = \Validator::make($request->all(), [
            "name" => 'required',
            // "nationality" => 'required',
            "email" => 'required|email|unique:contact_requests,email',
            "phone_number" => 'required|unique:contact_requests,phone_number',
            // "profession" => 'required',
            // "reason" => 'required|exists:reasons,reason',
            'g-recaptcha-response' => 'required|captcha'
        ],[
            'email.unique' => 'This email address already exists',
            'phone_number.unique' => 'This phone number already exists',
            'g-recaptcha-response.required' => __('Please verify that you are not a robot.'),
            'g-recaptcha-response.captcha' => __('Captcha error! try again later or contact site admin.'),
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            notify()->error($firstError);
            return redirect()->back();
        }

        $contact = ContactRequest::create($request->except('_token'));
        $response = generateQRCode($request->phone_number , $contact->email);

        $response = json_decode($response, true);
        $contact->update([
            "reference_num" => data_get('qrcode', $response, rand(1000,9999)),
        ]);

        try {
            // send mail
            // if ($response['code'] == 'success') {
                $this->sendEmail($contact->name, $contact->email, $contact->reference_num);
            // }
        } catch (\Exception $e) {
        }

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


    protected function sendEmail($name, $email, $code)
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


    public function scan()
    {
        return view('frontend::scan');
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
            'msg' => "The user has attended.",
            'data' => $contact_request
        ]);

    }
}
