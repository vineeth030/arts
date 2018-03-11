<?php

namespace App\Http\Controllers;

use App\Art;
use Illuminate\Http\Request;

class ArtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('arts home');
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
     * @param  \App\arts  $arts
     * @return \Illuminate\Http\Response
     */
    public function show(arts $arts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\arts  $arts
     * @return \Illuminate\Http\Response
     */
    public function edit(arts $arts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\arts  $arts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, arts $arts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\arts  $arts
     * @return \Illuminate\Http\Response
     */
    public function destroy(arts $arts)
    {
        //
    }
}
