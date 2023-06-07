<?php

namespace App\Http\Controllers;

use App\Models\Cohorte;
use Illuminate\Http\Request;

class CohorteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cohorte=Cohorte::all();

        dd($cohorte);
        return view('cohorte.index',compact('cohorte'));
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
     * @param  \App\Models\Cohorte  $cohorte
     * @return \Illuminate\Http\Response
     */
    public function show(Cohorte $cohorte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cohorte  $cohorte
     * @return \Illuminate\Http\Response
     */
    public function edit(Cohorte $cohorte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cohorte  $cohorte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cohorte $cohorte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cohorte  $cohorte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cohorte $cohorte)
    {
        //
    }
}
