<?php

namespace Modules\Settings\Http\Controllers\Dashboard;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Settings\Entities\AboutUs;

class AboutUsController extends Controller
{

    public function form()
    {
        $about = AboutUs::first();
        return view('settings::settings.tabs.about', compact('about'));
    }

    public function update(Request $request)
    {
        // dd($request->image, $request->vid_image);
        $about = AboutUs::first();
        if ($about) {
            $about->update($request->all());
            if ($request->hasFile('image')) {
                delFile($about->getMediaResource('images'));
                $about->addMediaFromRequest('image')->toMediaCollection('images');
            }
            if ($request->hasFile('vid_image')) {
                delFile($about->getMediaResource('videoImages'));
                $about->addMediaFromRequest('vid_image')->toMediaCollection('videoImages');
            }
            if ($request->hasFile('video')) {
                delFile($about->getMediaResource('video'));
                $about->addMediaFromRequest('video')->toMediaCollection('video');
            }
        } else {
            $about = AboutUs::create($request->all());
            $about->addMediaFromRequest('image')->toMediaCollection('images');
            $about->addMediaFromRequest('vid_image')->toMediaCollection('videoImages');
            $about->addMediaFromRequest('video')->toMediaCollection('video');
        }

        // $about->addAllMediaFromTokens();

        flash(trans('settings::settings.messages.update_about'))->success();

        return redirect()->back();
    }
}
