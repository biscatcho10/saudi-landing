<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Frontend\Entities\ContactRequest;
use Modules\Settings\Entities\Subscriber;

class FrontendController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function index()
    {

        return view('frontend::index', [
            'lang' => app()->getLocale(),
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function contactPost(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            "name" => 'required',
            "nationality" => 'required',
            "email" => 'required|email',
            "phone_number" => 'required',
            "profession" => 'required',
            "reason_id" => 'required',
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            notify()->error($firstError);
            return redirect()->back();
        }
        $contact = Subscriber::create($request->except('_token'));

        $references = ContactRequest::plack('reference_num')->toArray();
        $ref_num = rand(1000000, 9999999);
        if (!in_array($ref_num, $references)) {
            $contact->update([
                "reference_num" => $ref_num,
            ]);
        }

        notify()->success(__('Your data sent successfully'));
        return redirect()->back();
    }
}
