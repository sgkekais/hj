<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::orderBy('year', 'desc')->get();

        return view('works.index', compact('works'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        $pictures = json_decode($work->work_images, true);
        sort($pictures);

        $videos = explode(',', $work->work_video);

        return view('works.show', compact('work', 'pictures', 'videos'));
    }

}
