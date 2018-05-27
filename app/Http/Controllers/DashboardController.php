<?php

namespace Bugger\Http\Controllers;

use Illuminate\Http\Request;
use Bugger\Ticket;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('dashboard')->with('tickets', $tickets);
    }
}