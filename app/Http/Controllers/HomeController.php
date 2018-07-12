<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\User;
use App\Task;

class HomeController extends Controller
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
        // This is supposed to return the recent task but I still don't have the correct SQL query for it
        // so I replaced it with reports as of the moment.
        $reports = Report::where('user_id', auth()->id())->get();
        return view('pages.home', compact('reports'));
    }
}
