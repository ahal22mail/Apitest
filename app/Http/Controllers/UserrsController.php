<?php

namespace App\Http\Controllers;

use App\Models\Userr;
use App\Http\Requests\StoreUserrRequest;
use App\Http\Requests\UpdateUserrRequest;
use App\Http\Resources\UserrsResource;
class UserrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserrsResource::collection(Userr::all());
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
     * @param  \App\Http\Requests\StoreUserrRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserrRequest $request)
    {
        $ek=\Faker\Factory::create(1);
        $userr=Userr::create([
            'name'=>$ek->name,
            'email'=>$ek->email
        ]);
        return new  UserrsResource($userr);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Userr  $userr
     * @return \Illuminate\Http\Response
     */
    public function show(Userr $userr)
    {
        return new UserrsResource($userr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userr  $userr
     * @return \Illuminate\Http\Response
     */
    public function edit(Userr $userr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserrRequest  $request
     * @param  \App\Models\Userr  $userr
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserrRequest $request, Userr $userr)
    {
        $userr->update([
            'name'=>$request->input('name')
        ]);
        return new UserrsResource($userr);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Userr  $userr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userr $userr)
    {
       $userr->delete();
       return response(null,204); 
    }
}
