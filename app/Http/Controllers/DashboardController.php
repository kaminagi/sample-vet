<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Patient;
use Illuminate\Http\Request;

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
        $owners = Owner::take(10)->get();
        $patients = Patient::take(10)->get();
        return view('layouts.dashboard.home', compact(['owners', 'patients']));
    }
}
