@extends('layout')
@section('content')
<div class="container" style="margin-top: 10px;">
            <div class="row" style="border: 1px darkgrey solid; border-radius: 10px;width: 50%; margin: 0 50px; padding: 20px;" >
                <div class="col-sm-12">
        <h2>edit hocsinh</h2>
         <form method="post" action="{{route('updatehocsinh')}}">
          
           <input type="hidden" name="id" value={{$hocsinh->id}}>
                         
                         <div class="form-group">
                      
                            <label>ten hocsinh </label>
                            <input type="text"   class="form-control" name="tenhocsinh" value="{{$hocsinh->ten}}" placeholder="Enter tenhocsinh">
                        </div>
                       
                        <div class="form-group">
                            <label>ma so du thi:</label>
                            <input type="text"  class="form-control" name="mahocsinh" value="{{$hocsinh->maso}}" placeholder="Enter mahocsinh">
                        </div>
							
                        @csrf
                        
                        
					
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
                        <a href="{{route('danhsachhocsinh')}}" class="btn btn-primary">view hocsinh</a>
                    </form>
                </div>
            </div>
        </div>
 
@endsection
