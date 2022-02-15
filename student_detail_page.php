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
    <span style="color:chartreuse">#Student Detail Page</span>
<ul>
  <li><a href="index.php">HOME</a></li>
  <li class="dropdown">
    <a href="student_profile_data_login.php" class="dropbtn">STUDENT DETAILS</a>
  </li>
    <li class="dropdown">
    <a href="student_result_data_login.php" class="dropbtn">STUDENT RESULT</a>  </li>
       <li class="dropdown">
    <a href="student_attendance_data_login.php" class="dropbtn">STUDENT ATTENDANCE</a> </li>
    </ul>
</body>
</html>