@extends('layout')
@section('content')
<table border="1"  width="945" height="auto">
                     <caption align="top"  class="title" style="color:green;"> List truong hoc </caption>
                <thead>
                    <tr>
                   
                  
                    <th>id</th>
                    
                        <th>ten truong  </th>
                   
					<th>Edit</th>
					<th>Xoa</th>
					
					
                        
                       
                       
                        
                            </tr>
                </thead>
                <tbody>
				
                     @csrf
@foreach($truongptth as $th)
                  <tr>
							<td >{{$th->id}}</td>
							<td >{{$th->ten}}</td>
							
						
								
									
							<td><a href="{{route('edittruongptth',$th->id)}}"><span
									class="glyphicon glyphicon-pencil"></span></a></td>
							<td><a href="{{route('deletetruongptth',$th->id)}}"><span
									class="glyphicon glyphicon-trash"></span></a></td>
									
									
						</tr>
						@endforeach
					</tbody>
				</table>
				
@endsection