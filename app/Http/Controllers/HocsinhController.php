<?php

namespace App\Http\Controllers;

use App\hocsinh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HocSinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hocsinh = DB::table("hocsinhs")->get();
        return view("viewhocsinh", ['hocsinh' => $hocsinh]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("addhocsinh");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hocsinh = new hocsinh();
        $hocsinh->id = rand(1, 10000000);
        $hocsinh->ten = $request->request->get("tenhocsinh");
        $hocsinh->maso = $request->request->get("mahocsinh");
        $hocsinh->save();
        return view('addhocsinh');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hocsinh  $hocsinh
     * @return \Illuminate\Http\Response
     */
    public function show(hocsinh $hocsinh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hocsinh  $hocsinh
     * @return \Illuminate\Http\Response
     */
    public function edit(hocsinh $hocsinh, $id)
    {
        $hocsinh = hocsinh::find($id);
        return view("edithocsinh", ['hocsinh' => $hocsinh]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hocsinh  $hocsinh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hocsinh $hocsinh)
    {
        $id = $request->request->get("id");
        $hocsinhe = hocsinh::find($id);

        $hocsinhe->ten = $request->request->get("tenhocsinh");
        $hocsinhe->maso = $request->request->get("mahocsinh");
        $hocsinhe->save();
        $hocsinh = DB::table("hocsinhs")->get();
        return view("viewhocsinh", ['hocsinh' => $hocsinh]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hocsinh  $hocsinh
     * @return \Illuminate\Http\Response
     */
    public function destroy(hocsinh $hocsinh, $id)
    {
        $hocsinh = hocsinh::find($id);
        $hocsinh->delete();
        $hocsinh = DB::table("hocsinhs")->get();
        return view("viewhocsinh", ['hocsinh' => $hocsinh]);
    }
}
