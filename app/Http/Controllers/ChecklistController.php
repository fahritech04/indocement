<?php

namespace App\Http\Controllers;

use App\Models\checklist;
use Illuminate\Http\Request;

class ChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ceklist.checklist');
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
     * @param  \App\Models\checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function show(checklist $checklist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function edit(checklist $checklist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, checklist $checklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function destroy(checklist $checklist)
    {
        //
    }
}
