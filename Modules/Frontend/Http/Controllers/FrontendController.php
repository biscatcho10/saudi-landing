<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Categories\Entities\Category;
use Modules\HowKnow\Entities\Reason;
use Modules\Partners\Entities\Partner;
use Modules\Projects\Entities\Project;
use Modules\Services\Entities\Service;
use Modules\Settings\Entities\AboutUs;
use Modules\Settings\Entities\ContactUs;
use Modules\Settings\Entities\Subscriber;

class FrontendController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function index()
    {
        $settings = AboutUs::first();
        $services = Service::take(4)->get();
        $partners = Partner::get();
        $categories = Category::all();
        $projects = Project::all();

        return view('frontend::index', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
            'services' => $services,
            'partners' => $partners,
            'categories' => $categories,
            'projects' => $projects,
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function about()
    {
        $settings = AboutUs::first();
        $reasons = Reason::all();
        return view('frontend::about', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
            'reasons' => $reasons,
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function services()
    {
        $services = Service::orderBy('rank', 'asc')->paginate(6);
        $settings = AboutUs::first();
        $categories = Category::all();
        $projects = Project::all();
        return view('frontend::projects', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
            'services' => $services,
            'categories' => $categories,
            'projects' => $projects,
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function contact()
    {
        $settings = AboutUs::first();
        $settings = AboutUs::first();

        return view('frontend::contact', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
            'settings' => $settings,
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function contactPost(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ], [
            'name.required' => __('frontend::frontend.name_required'),
            'email.required' => __('frontend::frontend.email_required'),
            'email.email' => __('frontend::frontend.email_email'),
            'message.required' => __('frontend::frontend.message_required'),
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            notify()->error($firstError);
            return redirect()->back();
        }
        $contact = ContactUs::create($request->except('_token'));
        notify()->success(__('frontend::frontend.contact_success'));
        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function subscribePost(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
        ], [
            'name.required' => __('frontend::frontend.name_required'),
            'email.required' => __('frontend::frontend.email_required'),
            'email.email' => __('frontend::frontend.email_email'),
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            notify()->error($firstError);
            return redirect()->back();
        }
        $subscribe = Subscriber::create($request->except('_token'));
        notify()->success(__('frontend::frontend.subscribe_success'));
        return redirect()->back();
    }
}
