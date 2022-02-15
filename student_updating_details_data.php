<!DOCTYPE html>
<html>
     <link rel="stylesheet" type="text/css" href="student_updating_details_data.css">
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
    <span style="color:chartreuse;">#Student Updating details data Page</span>
      <ul>
  <li><a href="index.php">Home</a></li>
</ul>
      <span style="color:white"><h3>-This page is meant for the Teacher/Administrator so that they can update the Students details.<br>-Fill all the details properly and care fully.<br>-STUDENT ID  is essntial to be filled so fill the id care fully.</h3></span>
      
<div id="detailupdate"> 
    <span style="color:chartreuse"><h2> UPDATE DETAILS</h2></span>
    <hr>
    <form method="post" action="student_updating_details_data_process.php">
         STUDENT ID:<br>
		<input type="text" name="s_id">
		<br><br>
		 NAME:<br>
		<input type="text" name="name">
		<br><br>
		 FATHER's NAME:<br>
		<input type="text" name="f_name">
		<br><br>
         MOTHER's NAME:<br>
		<input type="text" name="m_name">
		<br><br>
		 FATHER's PHONE NUMBER<br>
		<input type="text" name="fp_num">
		<br><br>
         SEMSTER:<br>
		<input type="text" name="sem">
		<br><br>
         COURSE:<br>
		<input type="text" name="course">
		<br><br>
         BRANCH:<br>
		<input type="text" name="branch">
		<br><br>
         SPECIFICATION:<br>
		<input type="text" name="specification">
	    <br><br>
         ADDRESS:<br>
		<input type="text" name="address">
        <br><br>
         EMAIL:<br>
		<input type="text" name="email">
        <br><br>
         GENDER:<br>
        <input type="radio" name="gender" value="male">MALE<br>
        <input type="radio" name="gender" value="female">FEMALE<br><br>
         CITY:<br>
		<input type="text" name="city">
        <br><br>
		<input type="submit" name="save" value="submit">
	</form>
    </div> 
    
    
    </body>
</html>