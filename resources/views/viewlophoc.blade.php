
<table border="1"  width="945" height="auto">
                     <caption align="top"  class="title" style="color:green;"> List ChucNang </caption>
                <thead>
                    <tr>
                   
                  
                    <th>id</th>
                    
                        <th>ten   </th>
                  <th>ten chucnang  </th>
					<th>Edit</th>
					<th>Xoa</th>
					
					<th><button type="submit">Xoa nhieu</button></th>
                        
                       
                       
                        
                            </tr>
                </thead>
                <tbody>
                    
                  <tr >
							<td th:text="${iterStat.count}"></td>
							<td th:text="${contact.id}"></td>
							
									
							<td><a th:href="@{'/ChucNang/edit/'+${contact.id}}"><span
									class="glyphicon glyphicon-pencil"></span></a></td>
							<td><a th:href="@{'/ChucNang/delete/'+${contact.id}}"><span
									class="glyphicon glyphicon-trash"></span></a></td>
									<td><input type="checkbox" name="xoa[]" th:value="${contact.id}" ></td>
									
						</tr>
					</tbody>
				</table>
<html>
<body>
<table>
<tr>
<th>id</th>
<th>ten lophoc</th>

<th>edit</th>
<th>add</th>
</tr>
 @csrf
@foreach($lophoc as $lh)
<tr>
<td>{{$lh->id}}</td>
<td>{{$lh->ten}}</td>
<td><a href="{{route('editlophoc',$lh->id)}}">edit</a></td>
<td><a href="{{route('dangkylophoc')}}">add</a></td>
<t

</tr>
@endforeach
</table>
</body>
</html>