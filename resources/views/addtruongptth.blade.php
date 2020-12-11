@extends('layout')
@section('content')
<div class="container" style="margin-top: 10px;">
            <div class="row" style="border: 1px darkgrey solid; border-radius: 10px;width: 50%; margin: 0 50px; padding: 20px;" >
                <div class="col-sm-12">
        <h2>Register truonghoc</h2>
         <form method="post" action="{{route('savetruongptth')}}">
          
           
                         
                         <div class="form-group">
                      
                            <label>ten truong </label>
                            <input type="text"   class="form-control" name="tentruongptth" value="" placeholder="Enter tenhocsinh">
                        </div>
                       
                        
							
                        @csrf
                        
                        
					
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
                        <a href="{{route('danhsachtruongptth')}}" class="btn btn-primary">view truonghoc</a>
                    </form>
                </div>
            </div>
        </div>
 
@endsection
