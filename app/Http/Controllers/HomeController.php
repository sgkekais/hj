<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $front_page_work = Work::where('front_page', true)->first();

        return view('home', compact('front_page_work'));
    }
}
