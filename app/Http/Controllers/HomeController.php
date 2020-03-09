<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rsvp;
use App\Party;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $participants = Party::getSorted();

        return view('pages.index', compact('participants'));

    }

    public function faqs()
    {
        return view('pages.faqs');
    }

    public function admin()
    {
        $rsvps = Rsvp::get();
        return view('pages.admin', compact('rsvps'));
    }

}
