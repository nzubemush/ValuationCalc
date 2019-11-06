<?php

namespace App\Http\Controllers;

use App\Formula;
use App\Subtopic;
use App\Topic;
use Illuminate\Http\Request;

class SubtopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subtopic  $subtopic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subtopic = Subtopic::findorFail($id);
        $formulas = Subtopic::findorFail($id)->formulas;
        // dd($formulas);

        return view('calculation', compact('subtopic','formulas'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subtopic  $subtopic
     * @return \Illuminate\Http\Response
     */
    public function edit(Subtopic $subtopic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subtopic  $subtopic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subtopic $subtopic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subtopic  $subtopic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subtopic $subtopic)
    {
        //
    }
}
