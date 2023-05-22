<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
        $connection = mysqli_connect('localhost', 'root', '', 'tanimul_islam');
        if(!$connection){
            die("Not connected". mysqli_error($connection));
        }
        $query = "SELECT * FROM user_data";
        $result = mysqli_query($connection, $query);
        $count = mysqli_num_rows($result);
        if($count >0){
?>
    <section class="py-5 ">
        <div class="container bg-success">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <form >
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>MOBILE</th>
                                    <th>PASSWORD</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
<?php
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $name =  $row['name'];
                $email =   $row['email'];
                $mobile =   $row['mobile'];
                $password =  $row['password'];
?>
                            <tbody>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $mobile; ?></td>
                                    <td><?php echo $password; ?></td>
                                    <td><a href="#">DELETE</a></td>
                                    
                                </tr>
                            </tbody>
<?php
    }
?>
                        </table>
<?php
    }else{
        echo "No any Database";
    }
    
    ?>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>