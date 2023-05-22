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
        die("Not connected" . "mysqli_error($connection)");
    }
    if(isset($_REQUEST['edit_id'])){
        $recv_id = $_REQUEST['edit_id'];
        $get_info = "SELECT * FROM user_data WHERE id = $recv_id";
        $select_info = mysqli_query($connection, $get_info);
        while($row = mysqli_fetch_assoc($select_info)){
            
?>
<section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card">
                        <div class="card-header text-center bg-success text-dark"><h3>CRUD</h3></div>
                        <div class="card-body">
                            <form action="update.php" method="post">
                                
                                <div class="form-group row">
                                    <div class="col-md-3 col-form-label">Name</div>
                                    <div class="col-md-7">
                                        <input type="text" value="<?php echo $row['name']; ?>" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-3 col-form-label">Email</div>
                                    <div class="col-md-7">
                                        <input type="email" value="<?php echo $row['email'] ?>" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-3 col-form-label">Mobile</div>
                                    <div class="col-md-7">
                                        <input type="number" value="<?php echo $row['mobile'] ?>" class="form-control" name="mobile">
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <div class="col-md-3 col-form-label"></div>
                                    <div class="col-md-7">
                                        <input type="submit" class="btn btn-outline-success" name="submit" value="Update" />
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-3 col-form-label"></div>
                                    <div class="col-md-7">
                                        <input type="hidden" class="" name="hidden_id" value="<?php echo $recv_id; ?>" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <?php
        }
    }
    ?>
    

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
?>