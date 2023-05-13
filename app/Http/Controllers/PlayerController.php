<?php

namespace App\Http\Controllers;

use App\Player;
use App\Relam;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Lib\Helper;
use Illuminate\Support\Facades\Auth;
class PlayerController extends Controller
{
    public function dashboard()
    {
        return view('player_panel.dashboard');
    }
    public function registerForm()
    {
        $relams=Relam::all();
        return view('web.register-player',compact('relams'));
    }
    public function registerAction(Request $request)
    {
        $data=array();
        $data['player_name']=$request->input('player_name');
        $data['user_name']=$request->input('user_name');
        $data['password']=bcrypt($request->input('password'));
        $data['relam_id']=$request->input('relam_id');
        $data['discord_id']=$request->input('discord_id');
        $data['created_at']=Carbon::now();
        $player=Player::create($data);
        Auth::guard('player')->login($player);
        toastr()->success('ثبت نام با موفقیت انجام شد');
        return redirect()->route('player.dashboard');
    }
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
    public function loginAction(Request $request)
    {
        $request->replace(Helper::convertToEnNumberInputs($request->all(), ['user_name','password']));

        if(Auth::guard('player')->attempt($request->only('user_name','password'),$request->filled('remember'))){
            //Authentication passed...
            return redirect()
                ->intended(route('player.dashboard'));
        }

        toastr()->error('نام کاربری یا رمز عبور اشتباه است');
        return redirect()->back();
    }
}
