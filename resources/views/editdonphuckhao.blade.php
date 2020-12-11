@extends('layout')
@section('content')
<div class="container" style="margin-top: 10px;">
            <div class="row" style="border: 1px darkgrey solid; border-radius: 10px;width: 50%; margin: 0 50px; padding: 20px;" >
                <div class="col-sm-12">
        <h2>edit don phuckhao</h2>
         <form method="post" action="{{route('updatedonphuckhao')}}">
          
           <input type="hidden" name="id" value={{$donphuckhao->id}}>
                         
                          <div class="form-group">
                            <label>hocsinh </label>
							
                         <select  class="form-control" name="idhocsinh">
						 @foreach($hocsinh as $key=>$hs)
							<option  value={{$key}} {{$key==$donphuckhao->idhocsinh?"selected":""}}  > {{$hs}} </option>
							@endforeach
						   </select>
                        </div>
                        <div class="form-group">
                            <label>truong hoc </label>
							
                         <select  class="form-control" name="idtruonghoc">
						 @foreach($truongptth as $key=>$th)
							<option  value={{$key}} {{$key==$donphuckhao->idtruonghoc?"selected":""}} > {{$th}} </option>
							@endforeach
						   </select>
                        </div>
                        <div class="form-group">
                            <label>monthi </label>
							
                         <select  class="form-control" name="idmonhoc">
						 @foreach($monthi as $key=>$mt)
							<option  value={{$key}} {{$key==$donphuckhao->idmonhoc?"selected":""}} > {{$mt}} </option>
							@endforeach
						   </select>
                        </div>
							 <div class="form-group">
                            <label>tinhtrang </label>
							
                         <select  class="form-control" name="tinhtrang">
						 
							<option  value="1" {{1==$donphuckhao->phuckhao?"selected":""}} > khong phuckhao </option>
							<option  value="2" {{2==$donphuckhao->phuckhao?"selected":""}} > dang phuckhao </option>
							<option  value="3" {{3==$donphuckhao->phuckhao?"selected":""}} > da phuckhao </option>
						   </select>
                        </div>
                        @csrf
                        
                        
					
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
                        <a href="{{route('danhsachdonphuckhao')}}" class="btn btn-primary">view hocsinh</a>
                    </form>
                </div>
            </div>
        </div>
 
@endsection
