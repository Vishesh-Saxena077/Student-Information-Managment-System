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
	
    
     $name = $_POST['name'];
	 $f_name = $_POST['f_name'];
	 $m_name = $_POST['m_name'];
     $fp_num = $_POST['fp_num'];
	 $sem = $_POST['sem'];
	 $course = $_POST['course'];
     $branch = $_POST['branch'];
	 $specification = $_POST['specification'];
	 $address = $_POST['address'];
	 $email = $_POST['email'];
     $gender = $_POST['gender'];
	 $city = $_POST['city'];
	
    
    
    $sql = "INSERT INTO student (name,f_name,m_name,fp_num,sem,course,branch,specification,address,email,gender,city)
	 VALUES ('$name','$f_name','$m_name','$fp_num','$sem ','$course','$branch','$specification','$address','$email','$gender','$city')";
	
    
    
    
    
    
    if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>