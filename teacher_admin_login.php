<!DOCTYPE html>
<html>
     <link rel="stylesheet" type="text/css" href="teacher_admin_login.css">
 <head>
     <style>
ul {
  list-style-type:none;
  margin: 0;
  padding: 0;
  overflow:hidden;
  background-color:deepskyblue;
}

li
{
  float:left;
    background-color:black;
    border-left-style: solid;
 border-bottom-style: solid;
    border-bottom-color:deepskyblue;
}


    
    
    
li a, .dropbtn {
  display:inline-block;
  color:deepskyblue;
  text-align: center;
  padding: 14px 20px;
 
}


    
    
li a:hover, .dropdown:hover 
.dropbtn 
{
    background-color: darkolivegreen;
  color:darkorange;
}
    
    
li.dropdown 
{
  display:table-column;
}   

</style>
</head>
    
    
    
    
    
    
  <body style="background-color:black">
    <span style="color:chartreuse;">#Teacher login Page</span>
      <ul>
  <li><a href="index.php">Home</a></li>
</ul>
   
      
<div id="teacher"> 
    
    <form method="post" action="update_student_data_process.php">
         TEACHER  LOGIN id:<br>
		<input type="text" name="id">
		<br><br>
         PASSWORD:<br>
		<input type="text" name="pwd">
		<br><br>
		<input type="submit" name="save" value="login">
	</form>
    </div> 
    
    
    </body>
</html>