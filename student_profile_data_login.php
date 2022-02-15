<!DOCTYPE html>
<html>
     <link rel="stylesheet" type="text/css" href="student_profile_data_login.css">
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
    <span style="color:chartreuse;">#Student Profile Data login Page</span>
      <ul>
  <li><a href="student_detail_page.php">Home</a></li>
</ul>
   
      
<div id="data"> 
    
    <form method="post" action="student_profile_data_login_process.php">
		Sudent id:<br>
		<input type="text" name="id">
		<br><br>
		<input type="submit" name="save" value="login">
	</form>
    </div> 
    
    
    </body>
</html>