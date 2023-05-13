<?php

namespace App\Http\Controllers;

use App\Gold;
use Illuminate\Http\Request;

class GoldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gold=Gold::with("player","relam")->paginate(15);

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
        $player=[];
        $coefficient=[];
        $relam=[];
        $goldCount=[];
        foreach ($request->player_id as $player_id){
            $player=$player_id;
        }
        foreach ($request->coefficient as $coefficient_id){
            $coefficient=$coefficient_id;
        }
        foreach ($request->relam_id as $relam_id){
            $relam=$relam_id;
        }
        foreach ($request->gold_count as $gold_count){
            $goldCount=$gold_count;
        }
        $gold=new Gold();
        $gold->percent_fee=$request->percent_fee;
        $gold->percent_gold_collector=$request->percent_gold_collector;
        $gold->player_id=implode(",",$player);
        $gold->coefficient=implode(",",$coefficient);
        $gold->relam_id=implode(",",$relam);
        $gold->gold_count=implode(",",$goldCount);
        $gold->save();
        toastr()->success('داده ها باا موفقیت ثبت شد');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gold  $gold
     * @return \Illuminate\Http\Response
     */
    public function show(Gold $gold)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gold  $gold
     * @return \Illuminate\Http\Response
     */
    public function edit(Gold $gold)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gold  $gold
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gold $gold)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gold  $gold
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gold $gold)
    {
        //
    }
}
