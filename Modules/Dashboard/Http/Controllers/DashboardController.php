<?php

namespace Modules\Dashboard\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Dashboard\Entities\VisitorInformation;
use Modules\Settings\Entities\ContactUs;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $this->visitors();
        $visitors = [
            "all" => VisitorInformation::count(),
            "last30days" => VisitorInformation::whereDate("vis_lastvisit", '>', Carbon::now()->subDays(30))->count()
        ];

        return view('dashboard::index',[
            'visitors' => $visitors,
        ]);
    }



    public function index1()
    {
        $this->visitors();
        $visitors = [
            "all" => VisitorInformation::count(),
            "last30days" => VisitorInformation::whereDate("vis_lastvisit", '>', Carbon::now()->subDays(30))->count()
        ];
        return view("admin.components.dashboard.index", compact('social', 'web', 'branding', 'mobile', "visitors"));
    }

    /**
     * @return JsonResponse
     */
    public function mapData(): JsonResponse
    {
        return response()->json(VisitorInformation::visitorsMap());
    }

    /**
     * @return JsonResponse
     */
    public function browserUsage(): JsonResponse
    {
        return response()->json(VisitorInformation::visitorsBrowser());
    }

    public function visitors()
    {
        (new VisitorInformationController)->updateLastVisit();
    }

}
