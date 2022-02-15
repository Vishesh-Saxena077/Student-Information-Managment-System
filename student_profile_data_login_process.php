<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "graphiceradb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$id=$_POST['id'];

$sql = "SELECT s_id,name,f_name,m_name,fp_num,sem,course,branch,specification,address,email FROM  student WHERE s_id=$id ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "STUDENT id : " . $row["s_id"]. "<br>"
        . "NAME : " . $row["name"]. "<br>"
        . "FATHER's NAME : " . $row["f_name"]. "<br>"
        . "MOTHER's NAME : " . $row["m_name"]. "<br>"
        . "FATHER's PHONE NUMBER : " . $row["fp_num"]. "<br>"
        . "SEMESTER : " . $row["sem"]. "<br>"
        . "COURSE : " . $row["course"]. "<br>"
        . "BRANCH : " . $row["branch"]. "<br>"
        . "SPECIFICATION : " . $row["specification"]. "<br>"
        . "ADDRESS : " . $row["address"]. "<br>"
        . "EMAIL : " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
