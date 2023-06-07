<?php

namespace App\Http\Controllers;

use App\Models\UsersMoodle;
use Illuminate\Http\Request;

class UsersMoodleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_moodle = UsersMoodle::all();
        dd($user_moodle);
        return view('users_moodle.index',compact('user_moodle'));
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
     * @param  \App\Models\UsersMoodle  $usersMoodle
     * @return \Illuminate\Http\Response
     */
    public function show(UsersMoodle $usersMoodle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UsersMoodle  $usersMoodle
     * @return \Illuminate\Http\Response
     */
    public function edit(UsersMoodle $usersMoodle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UsersMoodle  $usersMoodle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersMoodle $usersMoodle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsersMoodle  $usersMoodle
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsersMoodle $usersMoodle)
    {
        //
    }
}
