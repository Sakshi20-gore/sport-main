<?php
 session_start();
  
   if(isset($_POST['btn_t'])){
    
$id=$_POST['session_id'];

$game=$_POST['game'];
   $name=$_POST['name'];
   $email=$_POST['email'];
   $contact=$_POST['contact'];
   $address=$_POST['address'];
   $date=$_POST['date'];
   $team=$_POST['team'];
  
   include('./connection_db.php');
   $q="INSERT INTO entry_register_tournament(user_id, game_name, name, email, contact, address, apply_date, team_name)VALUES('$id','$game','$name','$email','$contact','$address','$date','$team') ";
  $data=mysqli_query($con,$q);
    if($data){
     
      //  echo '<script type="text/javascript">';
      header('Location: ../team_details.php?session_id=' . urlencode($id));
            //echo 'alert("Registration Successfully"); 
//echo 'window.location.href = "../team_details.php";';
echo '</script>';
    }
  else{
    echo"faild";
  }
   }





?>