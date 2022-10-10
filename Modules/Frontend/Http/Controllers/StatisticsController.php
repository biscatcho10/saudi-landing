<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Reports\Entities\Report;

class StatisticsController extends Controller
{

    public function countDownload(Request $request)
    {
        $report = Report::findOrFail($request->report)->increment('downloads');
        return response()->json(array('count' => $report->downloads));
    }

    public function countPreview(Request $request)
    {
        $report = Report::findOrFail($request->report)->increment('views');
        return response()->json(array('count' => $report->downloads));
    }

}
