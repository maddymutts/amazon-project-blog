<?php
session_start();

if (!isset($_SESSION['reg'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['reg']);
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
        <link href="css/style.css" rel="stylesheet">
       <!-- <link href="css/elements.css" rel="stylesheet">-->
        <link href="css/profile.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
<!--        <script src="js/react.min.js"></script>
        <script src="js/react-dom.min.js"></script>
        <script src="js/browser.min.js"></script>-->

    </head>
    <body style="background-color: #2e6da4">
        <?php include 'header.php'; ?>
        <div class="header">
            <h2>Home Page</h2>
        </div>
        <div class="content">
            <div class="row">
                <div id="verticalmenu" class="panel col-md-1 vertical-menu" style="margin:50px; margin-left: 70px">
                    <div class="panel-heading">
                        <p style="font-family: Lato; font-size: 16px; text-align: center;">NOTES</p>
                    </div>
                    <ul class="panel-body" id="options">
                        <li><a>content</a></li>
                        <li><a>content</a></li>
                        <li><a>content</a></li>
                        <li><a>content</a></li>
                        <li><a>content</a></li>
                    </ul>
                </div>

                <div class="col-md-6" style="margin:50px">
                    <div id="postpanel" class="panel" style="align-items: center">
                        <div class="panel-heading">
                            <p style="font-family: Lato; font-size: 22px; text-align: center;">LATEST POSTS</p>
                        </div>
                        <div class="panel-body" style="height: auto;">
                        </div>
                    </div>
                </div>

                <div id="tagpanel" class="panel col-md-1 tag-menu" style="margin:50px">
                    <div class="panel-heading">
                        <p style="font-family: Lato; font-size: 16px; text-align: center;">ANNOUNCEMENTS</p>
                    </div>
                    <ul class="panel-body" id="tag">
                        <li><a>content</a></li>
                        <li><a>content</a></li>
                        <li><a>content</a></li>
                        <li><a>content</a></li>
                        <li><a>content</a></li>
                    </ul>
                </div>
            </div>
            <?php include 'footerp.php'; ?>

            <!-- notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class = "error success" >
                    <h3>
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>

            <!-- logged in user information -->
            <?php  if (isset($_SESSION['regno'])) : ?>
                <p>
                    Welcome < strong ><?php echo $_SESSION['regno']; ?> < /strong></p >
                <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
            <?php endif  ?>
    </body>
</html>
