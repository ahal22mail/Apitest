<?php

namespace App\Http\Controllers;

use App\Models\Prize;
use App\Http\Requests\StorePrizeRequest;
use App\Http\Requests\UpdatePrizeRequest;
use App\Http\Resources\PrizesResource;
class PrizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PrizesResource::collection(Prize::all());
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
     * @param  \App\Http\Requests\StorePrizeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrizeRequest $request)
    {
        $ek=\Faker\Factory::create(1);
        $prize=Prize::create([
            'name'=>$ek->name
        ]);
        return new  PrizesResource($prize);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prize  $prize
     * @return \Illuminate\Http\Response
     */
    public function show(Prize $prize)
    {
        return new PrizesResource($prize);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prize  $prize
     * @return \Illuminate\Http\Response
     */
    public function edit(Prize $prize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrizeRequest  $request
     * @param  \App\Models\Prize  $prize
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrizeRequest $request, Prize $prize)
    {
        $prize->update([
            'name'=>$request->input('name')
        ]);
        return new PrizesResource($prize);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prize  $prize
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prize $prize)
    {
        $prize->delete();
        return response(null,204); 
    }
}
