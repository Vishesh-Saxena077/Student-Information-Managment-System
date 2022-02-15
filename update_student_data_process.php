<!DOCTYPE html>
<html>
 <head>
 <style>
</style>
</head>
  <body style=" background-color:yellow"> 
     <?php
      $id=$_POST['id'];
      $pwd=$_POST['pwd'];
      if($id==1234 && $pwd==11223304)
      {
      echo '<a href="update_student_data.php"><h1>welcome</h1></a><br><hr4>click on welcome to go to the updation page</h4>';
      }
      else
      {
          echo'password is worng';
      }
      ?>
    </body> 
</html>