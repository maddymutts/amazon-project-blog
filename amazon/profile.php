<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Profile</title>
        <meta charset="UTF-8">
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
    <body style="background: #2e6da4">
        <div id="profilepage">
            <!--NAVIGATION BAR-->

            <?php include 'header.php';?>

            <!-- EDIT PROFILE PAGE-->

            <div class="row">
                <div class="col-md-2 col-md-offset-1">
                    <div class="panel" id="displaypicture">
                        <img src="images/emptyuser.jpg" alt>
                    </div>
                </div>
                <div class="col-md-7 col-md-offset-1">
                    <div class="panel" id="editprofile">
                        <div class="panel-heading">
                            <p style="font-family: Lato; text-align: center">YOUR ACCOUNT</p>
                        </div>
                        <div id="details" class="panel-body">
                            Name:<p class="form-control">Your name</p>
                            <br><br>
                            E-mail:<p class="form-control">Your email</p>
                            <br><br>
                            Registration No.:<p class="form-control">Your registration number</p>
                            <br><br>
                            Date of birth:<p class="form-control">Your date of birth</p>
                            <br><br>
                            Department:<p class="form-control">Your department</p>
                            <br><br>
                            Year:<p class="form-control">Your year</p>
                            <br>
                        </div>
                        <div id="editfooter" class="panel-footer">
                            <a style="text-decoration: none" href="settings.html">
                                <button id="submitbutton" class="btn " type="submit">
                                    EDIT PROFILE
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footerp.php';?>
        <script type="text/babel">
            ReactDOM.render(
                    document.getElementById('profilepage'),
                    document.getElementById('container')
                    );
        </script>
    </body>
</html>
