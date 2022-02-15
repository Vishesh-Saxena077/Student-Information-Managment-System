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

$sql = "SELECT s_id,name,sa_1,sa_2,sa_3,sa_4,sa_5,sa_6,sa_7,sa_8 FROM  attendance WHERE s_id=$id ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "STUDENT id : " . $row["s_id"]. "<br>"
        . "NAME : " . $row["name"]. "<br>"
        . "SEMESTER 1 ATTENDANCE : " . $row["sa_1"]. "<br>"
        . "SEMESTER 2 ATTENDANCE : " . $row["sa_2"]. "<br>"
        . "SEMESTER 3 ATTENDANCE : " . $row["sa_3"]. "<br>"
        . "SEMESTER 4 ATTENDANCE : " . $row["sa_4"]. "<br>"
        . "SEMESTER 5 ATTENDANCE : " . $row["sa_5"]. "<br>"
        . "SEMESTER 6 ATTENDANCE : " . $row["sa_6"]. "<br>"
        . "SEMESTER 7 ATTENDANCE : " . $row["sa_7"]. "<br>"
        . "SEMESTER 8 ATTENDANCE : " . $row["sa_8"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
