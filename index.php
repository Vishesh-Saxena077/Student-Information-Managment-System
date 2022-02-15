<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css">
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
<ul>
  <li><a href="#">HOME</a></li>
  <li class="dropdown">
    <a href="about_us.php" class="dropbtn">ABOUT US</a>
  </li>
    <li class="dropdown">
    <a href="student_detail_page.php" class="dropbtn">LOGIN</a>  </li>
       <li class="dropdown">
    <a href="fee_structure.php" class="dropbtn">FEE STRUCTURE</a> </li>
       <li class="dropdown">
    <a href="form.php" class="dropbtn">REGISTRATION</a>
</li>
   <li class="dropdown">
            <a href="teacher_admin_login.php" class="dropbtn">ADMIN LOGIN</a>
</li>
      <li class="dropdown">
    <a href="help.php" class="dropbtn">HELP</a>
    </li>
</ul>
<span style="font-size:40px; color:aqua; text-align: center;">
*GRAPHIC ERA DEEMDED TO BE UNIVERSITY*<br><marquee scrollamount="5">
 *WELCOMES YOU*</marquee>
 </span>
    <div id="border">
    <span style="color:darkgoldenrod"><h2>COMMENT HERE</h2></span>
    </div>
   


    <div id="comment"> 
<form method="post">
 COMMENT BOX:<br>
<input type="number" name="comment">
<br>
 <br>
NAME:<br>
<input type="number" name="name">
<br>
 <br>
 EMAIL ID:<br>
<input type="number" name="email">
<br>
<br>
PHONE NO:<br>
<input type="number" name="phone">
<br>
<br>
<input type="submit" name="save" value="send">
</form></div>
</body>
</html>