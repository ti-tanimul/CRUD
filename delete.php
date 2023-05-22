<?php
$connection = mysqli_connect('localhost', 'root', '', 'tanimul_islam');
if(!$connection){
    die("Not connected" . "mysqli_error($connection)");
}
    $recv = $_REQUEST['id'];
    $query = "DELETE FROM user_data WHERE id = $recv";
    $run_delete = mysqli_query($connection, $query);
    if($run_delete){
        header("location:login.php?delted");
    }

?>