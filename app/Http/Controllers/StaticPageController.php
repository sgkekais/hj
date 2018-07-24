<?php

namespace App\Http\Controllers;

use App\StaticPage;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\StaticPage  $staticPage
     * @return \Illuminate\Http\Response
     */
    public function show(StaticPage $staticPage)
    {
        //
        return view('static_pages.show', compact('staticPage'));
    }

    public function contactForm()
    {
        return view('static_pages.contact');
    }
}
