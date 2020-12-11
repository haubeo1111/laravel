<?php

namespace App\Http\Controllers;

use App\donphuckhao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DonphuckhaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hocsinh=DB::table("hocsinhs")->pluck("ten","id");
        $truongptth=DB::table("truongptths")->pluck("ten","id");
        $monthi=DB::table("monthis")->pluck("ten","id");
        $donphuckhao=DB::table("donphuckhaos")->paginate(5);;
       return view("viewdonphuckhao",['donphuckhao'=>$donphuckhao,'hocsinh'=>$hocsinh,'truongptth'=>$truongptth,'monthi'=>$monthi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hocsinh=DB::table("hocsinhs")->pluck("ten","id");
        $truongptth=DB::table("truongptths")->pluck("ten","id");
        $monthi=DB::table("monthis")->pluck("ten","id");
       return view("adddonphuckhao",['hocsinh'=>$hocsinh,'truongptth'=>$truongptth,'monthi'=>$monthi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donphuckhao=new donphuckhao();
        $donphuckhao->id=rand(1,100000);
        $donphuckhao->idhocsinh=$request->request->get("idhocsinh");
        $donphuckhao->idtruonghoc=$request->request->get("idtruonghoc");
        $donphuckhao->idmonhoc=$request->request->get("idmonhoc");
        $donphuckhao->phuckhao=$request->request->get("tinhtrang");
        $donphuckhao->save();
        $hocsinh=DB::table("hocsinhs")->pluck("ten","id");
        $truongptth=DB::table("truongptths")->pluck("ten","id");
        $monthi=DB::table("monthis")->pluck("ten","id");
       return view("adddonphuckhao",['hocsinh'=>$hocsinh,'truongptth'=>$truongptth,'monthi'=>$monthi]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\donphuckhao  $donphuckhao
     * @return \Illuminate\Http\Response
     */
    public function show(donphuckhao $donphuckhao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\donphuckhao  $donphuckhao
     * @return \Illuminate\Http\Response
     */
    public function edit(donphuckhao $donphuckhao,$id)
    {
        $donphuckhao=donphuckhao::find($id);
        $hocsinh=DB::table("hocsinhs")->pluck("ten","id");
        $truongptth=DB::table("truongptths")->pluck("ten","id");
        $monthi=DB::table("monthis")->pluck("ten","id");
        
        return view("editdonphuckhao",['donphuckhao'=>$donphuckhao,'hocsinh'=>$hocsinh,'truongptth'=>$truongptth,'monthi'=>$monthi]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\donphuckhao  $donphuckhao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, donphuckhao $donphuckhao)
    {
        $id = $request->request->get("id");
        $donphuckhaoe = donphuckhao::find($id);
        $donphuckhaoe->idhocsinh=$request->request->get("idhocsinh");
        $donphuckhaoe->idtruonghoc=$request->request->get("idtruonghoc");
        $donphuckhaoe->idmonhoc=$request->request->get("idmonhoc");
        $donphuckhaoe->phuckhao=$request->request->get("tinhtrang");
        
        $donphuckhaoe->save();
        $hocsinh=DB::table("hocsinhs")->pluck("ten","id");
        $truongptth=DB::table("truongptths")->pluck("ten","id");
        $monthi=DB::table("monthis")->pluck("ten","id");
        $donphuckhao=DB::table("donphuckhaos")->paginate(5);;
       return view("viewdonphuckhao",['donphuckhao'=>$donphuckhao,'hocsinh'=>$hocsinh,'truongptth'=>$truongptth,'monthi'=>$monthi]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\donphuckhao  $donphuckhao
     * @return \Illuminate\Http\Response
     */
    public function destroy(donphuckhao $donphuckhao,$id)
    {
        $donphuckhaoe = donphuckhao::find($id);
        $donphuckhaoe->delete();
        $hocsinh=DB::table("hocsinhs")->pluck("ten","id");
        $truongptth=DB::table("truongptths")->pluck("ten","id");
        $monthi=DB::table("monthis")->pluck("ten","id");
        $donphuckhao=DB::table("donphuckhaos")->paginate(5);;
       return view("viewdonphuckhao",['donphuckhao'=>$donphuckhao,'hocsinh'=>$hocsinh,'truongptth'=>$truongptth,'monthi'=>$monthi]);
    }
}
