@extends('layout')
@section('content')
<div class="container" style="margin-top: 10px;">
   <div class="row" style="border: 1px darkgrey solid; border-radius: 10px;width: 50%; margin: 0 50px; padding: 20px;">
      <div class="col-sm-12">
         <h2>Register donphuckhao</h2>
         <form method="post" action="{{route('savedonphuckhao')}}">

            <div class="form-group">
               <label>hocsinh </label>

               <select class="form-control" name="idhocsinh">
                  @foreach($hocsinh as $key=>$hs)
                  <option value={{$key}}> {{$hs}} </option>
                  @endforeach
               </select>
            </div>
            <div class="form-group">
               <label>truong hoc </label>

               <select class="form-control" name="idtruonghoc">
                  @foreach($truongptth as $key=>$th)
                  <option value={{$key}}> {{$th}} </option>
                  @endforeach
               </select>
            </div>
            <div class="form-group">
               <label>monthi </label>

               <select class="form-control" name="idmonhoc">
                  @foreach($monthi as $key=>$mt)
                  <option value={{$key}}> {{$mt}} </option>
                  @endforeach
               </select>
            </div>
            <div class="form-group">
               <label>tinhtrang </label>

               <select class="form-control" name="tinhtrang">

                  <option value="1"> khong phuckhao </option>
                  <option value="2"> dang phuckhao </option>
                  <option value="3"> da phuckhao </option>
               </select>
            </div>
            @csrf



            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
            <a href="{{route('danhsachdonphuckhao')}}" class="btn btn-primary">view donphuckhao</a>
         </form>
      </div>
   </div>
</div>

@endsection