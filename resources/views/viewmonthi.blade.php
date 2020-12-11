@extends('layout')
@section('content')
<table border="1"  width="945" height="auto">
                     <caption align="top"  class="title" style="color:green;"> List monthi </caption>
                <thead>
                    <tr>
                   
                  
                    <th>id</th>
                    
                        <th>ten monthi  </th>

					<th>Edit</th>
					<th>Xoa</th>
					
					
                        
                       
                       
                        
                            </tr>
                </thead>
                <tbody>
				
                     @csrf
@foreach($monthi as $mt)
                  <tr>
							<td >{{$mt->id}}</td>
							<td >{{$mt->ten}}</td>
							
						
								
									
							<td><a href="{{route('editmonthi',$mt->id)}}"><span
									class="glyphicon glyphicon-pencil"></span></a></td>
							<td><a href="{{route('deletemonthi',$mt->id)}}"><span
									class="glyphicon glyphicon-trash"></span></a></td>
									
									
						</tr>
						@endforeach
					</tbody>
				</table>
				
@endsection