
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
 <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card">
                        <div class="card-header text-center bg-success text-dark"><h3>CRUD</h3></div>
                        <div class="card-body">
                            <form action="add.php" method="post">
                                
                                <div class="form-group row">
                                    <div class="col-md-3 col-form-label">Name</div>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="name" placeholder="Type Your Name">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-3 col-form-label">Email</div>
                                    <div class="col-md-7">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-3 col-form-label">Mobile</div>
                                    <div class="col-md-7">
                                        <input type="number" class="form-control" name="mobile" placeholder="Type Your Number">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-3 col-form-label">Password</div>
                                    <div class="col-md-7">
                                        <input type="password" class="form-control" name="password" placeholder="Type Password">
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <div class="col-md-3 col-form-label"></div>
                                    <div class="col-md-7">
                                        <input type="submit" class="btn btn-outline-success" name="submit" value="submit" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
?>