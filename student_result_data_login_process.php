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
    
$sql = "SELECT s_id,name,s1,s2,s3,s4,s5,s6,s7,s8 FROM  result WHERE s_id=$id ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "STUDENT id : " . $row["s_id"]. "<br>" 
        ."NAME : " . $row["name"]. "<br>"
        . "SEMESTER 1 : " . $row["s1"]." cgpa". "<br>"
        . "SEMESTER 2 : " . $row["s2"]." cgpa". "<br>"
        . "SEMESTER 3 : " . $row["s3"]." cgpa". "<br>"
        . "SEMESTER 4 : " . $row["s4"]." cgpa". "<br>"
        . "SEMESTER 5 : " . $row["s5"]." cgpa". "<br>"
        . "SEMESTER 6 : " . $row["s6"]." cgpa". "<br>"
        . "SEMESTER 7 : " . $row["s7"]." cgpa". "<br>"
        . "SEMESTER 8 : " . $row["s8"]." cgpa". "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>