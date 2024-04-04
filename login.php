<?php
include "config.php";

if(isset($_POST['but_submit'])){
    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('s.gif') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 100px;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header text-center">Açık Değerlendirme ve Analiz Platformu</h5>
                    <div class="card-body">
                        <form method="post" action="process.php">
                            <div class="form-group">
                                <?php if(isset($_GET['Empty'])) { ?>
                                    <div class="alert alert-danger text-center" role="alert">
                                        <?php echo $_GET['Empty']; ?>
                                    </div>
                                <?php } ?>
                                <?php if(isset($_GET['g'])) { ?>
                                    <div class="alert alert-danger text-center" role="alert">
                                        <?php echo $_GET['g']; ?>
                                    </div>
                                <?php } ?>
                                <input type="text" class="form-control" id="txt_uname" name="txt_uname" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="txt_pwd" name="txt_pwd" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="but_submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

