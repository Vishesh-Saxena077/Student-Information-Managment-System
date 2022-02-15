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
	 $s1 = $_POST['s1'];
	 $s2 = $_POST['s2'];
     $s3 = $_POST['s3'];
	 $s4 = $_POST['s4'];
	 $s5 = $_POST['s5'];
	 $s6 = $_POST['s6'];
     $s7 = $_POST['s7'];
	 $s8 = $_POST['s8'];
    
    
    $sql = "INSERT INTO result (s_id,name,s1,s2,s3,s4,s5,s6,s7,s8)
	 VALUES ('$s_id','$name','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8')";
	
    
    
    
    
    
    if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>