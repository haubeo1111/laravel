<?php

namespace App\Http\Controllers;

use App\monthi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MonthiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monthi = DB::table("monthis")->get();
        return view("viewmonthi", ['monthi' => $monthi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("addmonthi");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $monthi = new monthi();
        $monthi->id = rand(1, 10000000);
        $monthi->ten = $request->request->get("tenmonthi");
        $monthi->save();
        return view('addmonthi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\monthi  $monthi
     * @return \Illuminate\Http\Response
     */
    public function show(monthi $monthi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\monthi  $monthi
     * @return \Illuminate\Http\Response
     */
    public function edit(monthi $monthi,$id)
    {
        $monthi = monthi::find($id);
        return view("editmonthi", ['monthi' => $monthi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\monthi  $monthi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, monthi $monthi)
    {
        $id = $request->request->get("id");
        $monthie = monthi::find($id);

        $monthie->ten = $request->request->get("tenmonthi");
        $monthie->save();
        $monthi = DB::table("monthis")->get();
        return view("viewmonthi", ['monthi' => $monthi]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\monthi  $monthi
     * @return \Illuminate\Http\Response
     */
    public function destroy(monthi $monthi,$id)
    {
        $monthi = monthi::find($id);
        $monthi->delete();
        $monthi = DB::table("monthis")->get();
        return view("viewmonthi", ['monthi' => $monthi]);
    }
}
