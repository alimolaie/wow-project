<?php

namespace App\Http\Controllers;

use App\Relam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relame=Relam::all();
        return view('realm.index',compact('relame'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('realm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $r=new Relam();
        $r->relam_name=$request->relam_name;
        $r->relam_address=$request->relam_address;
        $r->save();
        toastr()->success('ثبت با موفقیت انجام شد');
        return redirect()->route('realm.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Relam  $relam
     * @return \Illuminate\Http\Response
     */
    public function show(Relam $relam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Relam  $relam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $r=Relam::find($id);
        return view('realm.edit',compact('r'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Relam  $relam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $r=Relam::find($id);
        $r->relam_name=$request->relam_name;
        $r->relam_address=$request->relam_address;
        $r->save();
        toastr()->success('ویرایش با موفقیت انجام شد');
        return redirect()->route('realm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Relam  $relam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('relams')->where('id',$id)->delete();
        toastr()->success('حذف با موفقیت انجام شد');
        return back();
    }
}
