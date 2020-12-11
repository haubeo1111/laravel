@extends('layout')
@section('content')
<table border="1"  width="945" height="auto">
                     <caption align="top"  class="title" style="color:green;"> List hocsinh </caption>
                <thead>
                    <tr>
                   
                  
                    <th>id</th>
                    
                        <th>ten hocsinh  </th>
                    <th>ma hocsinh</th>
					 
					<th>Edit</th>
					<th>Xoa</th>
					
					
                        
                       
                       
                        
                            </tr>
                </thead>
                <tbody>
				
                     @csrf
@foreach($hocsinh as $hs)
                  <tr>
							<td >{{$hs->id}}</td>
							<td >{{$hs->ten}}</td>
							<td >{{$hs->maso}}</td>
						
								
									
							<td><a href="{{route('edithocsinh',$hs->id)}}"><span
									class="glyphicon glyphicon-pencil"></span></a></td>
							<td><a href="{{route('deletehocsinh',$hs->id)}}"><span
									class="glyphicon glyphicon-trash"></span></a></td>
									
									
						</tr>
						@endforeach
					</tbody>
				</table>
				
@endsection