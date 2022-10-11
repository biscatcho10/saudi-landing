<?php

namespace Modules\Settings\Http\Controllers\Dashboard;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Frontend\Entities\ContactRequest;

class ContactRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $contacts = ContactRequest::all();
        return view('settings::requests.index', compact('contacts'));
    }

}
