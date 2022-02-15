<!DOCTYPE html>
<html>
     <link rel="stylesheet" type="text/css" href="student_updating_attendance_data.css">
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
    <span style="color:chartreuse;">#Attendance
        Page</span>
      <ul>
  <li><a href="index.php">Home</a></li>
</ul>
      <span style="color:white"><h3>INSTRUCTIONS<br>-This page is meant for Teacher/Faculty mebers of graphic era university<br>-Fill all the details.<br>-its a request from the teacher to please fill the "STUDENT ID" corectly</h3></span>
      
<div id="updateattendance"> 
    <span style="color:chartreuse"><h4>UPDATE ATTENDANCE</h4></span>
    <hr>
    <form method="post" action="student_updating_attendance_data_process.php">
        STUDENT ID:<br>
		<input type="text" name="s_id">
		<br><br>
		NAME:<br>
		<input type="text" name="name">
		<br><br><hr>
        <span style="color:white">ATTENDANCE UPDATION</span><br><hr>
		 SEMESTER 1:<br>
		<input type="text" name="sa_1">
		<br><br>
         SEMESTER 2:<br>
		<input type="text" name="sa_2">
		<br><br>
        SEMESTER 3:<br>
		<input type="text" name="sa_3">
		<br><br>
        SEMESTER 4:<br>
		<input type="text" name="sa_4">
		<br><br>
        SEMESTER 5:<br>
		<input type="text" name="sa_5">
		<br><br>
        SEMESTER 6:<br>
		<input type="text" name="sa_6">
		<br><br>
        SEMESTER 7:<br>
		<input type="text" name="sa_7">
		<br><br>
        SEMESTER 8:<br>
		<input type="text" name="sa_8">
		<br><br>
        
		<input type="submit" name="save" value="submit">
	</form>
    </div> 
    
    
    </body>
</html>