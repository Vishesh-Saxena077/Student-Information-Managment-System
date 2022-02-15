<!DOCTYPE html>
<html>
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
    background-color: black;
    border-left-style: solid;
 border-bottom-style: solid;
    border-bottom-color:deepskyblue;
 
}    
li a, .dropbtn {
  display:inline-block;
  color:deepskyblue;
  text-align: center;
   padding: 14px 20px;
    text-decoration: none;
 
}  
li a:hover, .dropdown:hover 
.dropbtn 
{
 background-color: darkolivegreen;
  color:darkorange;
  text-decoration: underline;
 
}
li.dropdown 
{
  display:table-column;
}
</style>
</head>
<body style="background-color: black">
    <span style="color:chartreuse">#update student data</span>
<ul>
  <li><a href="index.php">HOME</a></li>
</ul>
<br><br><br>
 
    <div>
    <a href="student_updating_result_data.php"><span style="color:darkgoldenrod;text-decoration: underline;
    text-decoration-color: white"><h3><b>UPDATE STUDENT RESULT</b></h3></span></a>
        <marquee direction="right" scrollamount="5"><span style="color:white"><h4>click her to update result</h4></span></marquee>
    </div>
   
<hr>
    <div > <a href=" student_updating_attendance_data.php"> <span style="color:darkgoldenrod;text-decoration: underline;
    text-decoration-color: white"><h3><b>UPDATE STUDENT ATTENDANCE</b></h3></span></a>
        <marquee direction="left" scrollamount="5"><span style="color:white"><h4>click her to update attendance</h4></span></marquee>
</div>
    
    <hr>

    <div > <a href=" student_updating_details_data.php"> <span style="color:darkgoldenrod;text-decoration: underline;
    text-decoration-color: white"><h3><b>UPDATE STUDENT DETAILS</b></h3></span></a>
        <marquee direction="right" scrollamount="5"><span style="color:white"><h4>click her to update attendance</h4></span></marquee>
</div>
    
    
</body>
</html>