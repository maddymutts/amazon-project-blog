<?php
session_start();
$token=$_SESSION['token'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/elements.css" rel="stylesheet">
        <link href="css/profile.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
        <script src="js/react.min.js"></script>
        <script src="js/react-dom.min.js"></script>
        <script src="js/browser.min.js"></script>
        <link href="css/header.css" rel="stylesheet">

    </head>
    <body style="background-color: #2e6da4">
        <?php include 'header.php'; ?>

        <div style="margin-left: 450px;margin-top: 70px;" class="col-md-5 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><b>Reset Password</b></h4>
                </div>
                <div class="panel-body">
                    <form method="post" action="changepass.php">
                        <?php include('errors.php'); ?>
                        <br>
                        <input type="hidden" name="passtoken" value="<?php echo $token;?>">
                        <div class="form-group">
                            <input type="password" class="form-control"  placeholder="New password" name="password" required = "true">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm your password" name="passmatch" required = "true">
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" name="reset_pass" class="btn btn-primary">Submit</button><br><br>
                        </div>
                    </form><br/>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>

        <?php include 'footerp.php'; ?>
    </body>
</html>
