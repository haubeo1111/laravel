
<!DOCTYPE html>
<html lang="en" >
    <head>
    <meta charset="ISO-8859-1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
          <link rel="stylesheet" type="text/css" href="../../css/layout.css" />
        <title></title>
    </head>
    <body>
	 @yield('content')
    <!--  <article layout:fragment="content" >
        <div class="container" style="margin-top: 10px;">
            <div class="row" style="border: 1px darkgrey solid; border-radius: 10px;width: 50%; margin: 0 50px; padding: 20px;" >
                <div class="col-sm-12">
        <h2>Register chucvu</h2>
         
          <form th:action="${action}"  th:object=${chucvu} method="post" >
           <div class="form-group">
                      <p th:text=""></p>
                            <label>Id</label>
                           
                        </div>
                         
                         <div class="form-group">
                      
                            <label>Ma chucvu</label>
                            <input type="text"  th:field="" class="form-control" name="macv" value="" placeholder="Enter macv">
                        </div>
                       
                        <div class="form-group">
                            <label>Ten chuc vu:</label>
                            <input type="text"  th:field="" class="form-control" name="tencv" value="" placeholder="Enter tencv">
                        </div>
							
                        
                        
                        
					
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
                        <a href="/chucvu/page" class="btn btn-primary">Display chucvu</a>
                    </form>
                </div>
            </div>
        </div>
        </article>-->
    </body>
</html>