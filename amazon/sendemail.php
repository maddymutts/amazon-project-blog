<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/element.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet">
    <script src="js/react.min.js"></script>
    <script src="js/react-dom.min.js"></script>
    <script src="js/browser.min.js"></script>
</head>
<body style="background-color: #2e6da4">
    <div id="loginpage" style="height: 100%" >
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-1">
                        <div id="logo">
                            <h1 style="font-family:Enriqueta; font-size: 128px"><b>connect in.</b></h1>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><b>Enter Registration Number</b></h4>
                            </div>
                            <div class="panel-body">
                                <form method="post" action="forgotpassword.php">
      
                                    <br>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Registration Number" name="reg" required = "true">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                    	<p>Click the link sent to your registered email to reset password.</p>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <button type="submit" name="password" class="btn btn-primary">Submit</button>
                                        <br><br>
                                    </div>
                                    
                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <footer >
            <div id="container">
                <center>
                    <p>Copyright &copy; Connect in. All Rights Reserved  |  Contact Us: +91 90000 00000</p> 
                </center>
            </div>
        </footer>
         <script type="text/babel">
        ReactDOM.render(
             document.getElementById('loginpage')
             document.getElementById('container')
        );</script>
</body>
</html>





