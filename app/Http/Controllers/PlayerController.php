<?php

namespace App\Http\Controllers;

use App\Player;
use App\Relam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $player=Player::with("relam")->paginate(15);
        return view('players.index',compact('player'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relam=Relam::all();
        return view('players.create',compact('relam'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p=new Player();
        $p->player_name=$request->player_name;
        $p->relam_id=$request->relam_id;
        $p->user_name=$request->user_name;
        $p->password=Hash::make($request->password);
        $p->save();
        toastr()->success('ثبت با موفقیت انجام شد');
        return redirect()->route('player.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p=Player::find($id);
        $relam=Relam::all();
        return view('players.edit',compact('p','relam'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $p=Player::find($id);
        $p->player_name=$request->player_name;
        $p->user_name=$request->user_name;
        $p->password=Hash::make($request->password);
        $p->relam_id=$request->relam_id;
        $p->save();
        toastr()->success('ویرایش با موفقیت انجام شد');
        return redirect()->route('player.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('players')->where('id',$id)->delete();
        toastr()->success('حذف با موفقیت انجام شد');
        return back();
    }
}
