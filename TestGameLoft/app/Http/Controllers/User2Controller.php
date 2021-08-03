<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User2;
use Illuminate\Http\Request;

class User2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User2::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return User2::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User2  $user2
     * @return \Illuminate\Http\Response
     */
    public function show(User2 $user2)
    {
        return $user2;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User2  $user2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user2 = User2::find($id);
        $user2->update($request->all());
        return $user2;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User2  $user2
     * @return \Illuminate\Http\Response
     */
    public function destroy(User2 $user2)
    {
        //
    }
    
    /**
     * search for the name
     *
     * @param  str $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return User2::where('username','like', '%'.$name.'%')->get();
    }
}
