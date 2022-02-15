<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = "graphiceradb";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
if(isset($_POST['save']))
{	 
	
     $s_id = $_POST['s_id'];
     $name = $_POST['name'];
	 $sa_1 = $_POST['sa_1'];
	 $sa_2 = $_POST['sa_2'];
     $sa_3 = $_POST['sa_3'];
	 $sa_4 = $_POST['sa_4'];
	 $sa_5 = $_POST['sa_5'];
	 $sa_6 = $_POST['sa_6'];
     $sa_7 = $_POST['sa_7'];
	 $sa_8 = $_POST['sa_8'];
    
    
    $sql = "INSERT INTO attendance (s_id,name,sa_1,sa_2,sa_3,sa_4,sa_5,sa_6,sa_7,sa_8)
	 VALUES ('$s_id','$name','$sa_1','$sa_2','$sa_3','$sa_4','$sa_5','$sa_6','$sa_7','$sa_8')";
	
    
    
    
    
    
    if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>