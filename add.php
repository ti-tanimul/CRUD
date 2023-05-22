<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
    
        $connection = mysqli_connect('localhost', 'root', '', 'tanimul_islam');
        
        $query = "INSERT INTO user_data (name, email, mobile, password)";
        $query .= "VALUES ('$name', '$email', '$mobile', '$password')";
        $result = mysqli_query($connection, $query);
        if ($result){
            echo "success" . header("location:login.php?succeesssss");
        }else{
            echo "not success";
        }
    }
    ?>