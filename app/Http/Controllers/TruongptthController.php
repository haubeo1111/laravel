<?php

namespace App\Http\Controllers;

use App\truongptth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TruongptthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $truongptth = DB::table("truongptths")->get();
        return view("viewtruongptth", ['truongptth' => $truongptth]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("addtruongptth");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $truongptth = new truongptth();
        $truongptth->id = rand(1, 10000000);
        $truongptth->ten = $request->request->get("tentruongptth");
        $truongptth->save();
        return view('addtruongptth');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\truongptth  $truongptth
     * @return \Illuminate\Http\Response
     */
    public function show(truongptth $truongptth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\truongptth  $truongptth
     * @return \Illuminate\Http\Response
     */
    public function edit(truongptth $truongptth,$id)
    {
        $truongptth = truongptth::find($id);
        return view("edittruongptth", ['truongptth' => $truongptth]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\truongptth  $truongptth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, truongptth $truongptth)
    {
        $id = $request->request->get("id");
        $truongptthe = truongptth::find($id);

        $truongptthe->ten = $request->request->get("tentruongptth");
        $truongptthe->save();
        $truongptth = DB::table("truongptths")->get();
        return view("viewtruongptth", ['truongptth' => $truongptth]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\truongptth  $truongptth
     * @return \Illuminate\Http\Response
     */
    public function destroy(truongptth $truongptth,$id)
    {
        $truongptth = truongptth::find($id);
        $truongptth->delete();
        $truongptth = DB::table("truongptths")->get();
        return view("viewtruongptth", ['truongptth' => $truongptth]);
    }
}
