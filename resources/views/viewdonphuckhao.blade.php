@extends('layout')
@section('content')
<table border="1"  width="945" height="auto">
                     <caption align="top"  class="title" style="color:green;"> List donphuckhao </caption>
                <thead>
                    <tr>
                   
                  
                    <th>id</th>
                    
                        <th>ten hocsinh  </th>
                    <th> ten truong hoc</th>
					 <th> ten monthi</th>
					 <th> tinh trang</th>
					<th>Edit</th>
					<th>Xoa</th>
					
					
                        
                       
                       
                        
                            </tr>
                </thead>
                <tbody>
				
                     @csrf
@foreach($donphuckhao as $dpk)
                  <tr>
							<td >{{$dpk->id}}</td>
							@foreach($hocsinh as $key=>$hs)
 @if($key==$dpk->idhocsinh)
<td>{{$hs}}</td>
    @endif
    @endforeach
					@foreach($truongptth as $key=>$th)
 @if($key==$dpk->idtruonghoc)
<td>{{$th}}</td>
    @endif
    @endforeach	
@foreach($monthi as $key=>$mt)
 @if($key==$dpk->idmonhoc)
<td>{{$mt}}</td>
    @endif
    @endforeach	
						@if(1==$dpk->phuckhao)
<td>khongphuckhao</td>
    @endif
	@if(2==$dpk->phuckhao)
<td>dangphuckhao</td>
    @endif
	@if(3==$dpk->phuckhao)
<td>daphuckhao</td>
    @endif
								
									
							<td><a href="{{route('editdonphuckhao',$dpk->id)}}"><span
									class="glyphicon glyphicon-pencil"></span></a></td>
							<td><a href="{{route('deletedonphuckhao',$dpk->id)}}"><span
									class="glyphicon glyphicon-trash"></span></a></td>
									
									
						</tr>
						@endforeach
					</tbody>
				</table>
				{{ $donphuckhao->links() }}
@endsection