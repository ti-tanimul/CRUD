<?php
$connection = mysqli_connect('localhost', 'root', '', 'tanimul_islam');
if(!$connection){
    die("Not connected" . "mysqli_error($connection)");
}
if(isset($_REQUEST['submit'])){
  $name =  $_REQUEST['name'];
  $email =  $_REQUEST['email'];
  $mobile =  $_REQUEST['mobile'];
  $update_id =  $_REQUEST['hidden_id'];

  $update_query = "UPDATE user_data SET name = '$name', email = '$email', mobile = '$mobile' WHERE id = $update_id ";
  $final_query = mysqli_query($connection, $update_query);
  if($final_query){
    header("location:login.php?updated");
  }
}
?>