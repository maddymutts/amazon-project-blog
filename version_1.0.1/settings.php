<?php

include 'server.php';
if (!isset($_SESSION['reg'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['reg']);
    header("location: login.php");
}
if(isset($_POST["profilePicture"]))  
 {  
  $reg=$_SESSION['reg'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query =$db->query("UPDATE user SET ProfilePicture='$file' WHERE  regno='$reg'");  
      if($query)
      {

        header("Location:profile.php");
      }
 }

?>
<!DOCTYPE html>

<html>
    <head>
        <title>User Settings</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
        <link href="css/style.css" rel="stylesheet">
        <!--<link href="css/element.css" rel="stylesheet">-->
        <link href="css/profile.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
       <!-- <script src="js/react.min.js"></script>
        <script src="js/react-dom.min.js"></script>
        <script src="js/browser.min.js"></script>-->
        <link href="css/header.css" rel="stylesheet">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>


/* The Modal (background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
/* Modal Content */
.modal-content1 {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 40%;
}


.close1 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close1:hover,
.close1:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
    </head>
    <body style="background: #2e6da4">
        <div id="settingpage">
            <!--NAVIGATION BAR-->

            <?php include 'header.php';?>

            <!-- EDIT PROFILE PAGE-->
 

            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <div class="panel" id="changepicture">
                        <?php
                        $reg=$_SESSION['reg'];
                        $query="SELECT ProfilePicture from user WHERE regno='$reg'";
                        $result=$db->query($query);
                        $row=mysqli_fetch_array($result);
                        $picture='<img src="data:image/jpeg;base64,'.base64_encode($row['ProfilePicture'] ).'" height="200" width="200" class="img-thumnail" alt="No Picture to be displayed" />';
                        print($picture);
                         ?>
                        <div class="panel-footer">
                            <a style="text-decoration: none">
                                <button id="changebutton" class="btn" type="button">
                                    CHANGE PICTURE
                                </button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-md-offset-1">
                    <div class="panel" id="editprofile">
                        <div class="panel-heading">
                            <p style="font-family: Lato; text-align: center">YOUR ACCOUNT</p>
                        </div>
                        <div id="newdetails" class="panel-body">
                            Name:<input class="form-control">
                            <br>
                            E-mail:<input class="form-control">
                            <br>
                            Registration No.:<input class="form-control">
                            <br>
                            Date of birth:<input class="form-control">
                            <br>
                            Department:
                            <select class="form-control">
                                <option disabled selected value>Department</option>
                                <option>Computer Science</option>
                                <option>Electronics and Communication</option>
                                <option>Electronics and Instrumentation</option>
                                <option>Electrical and Electronics</option>
                                <option>Information Technology</option>
                                <option>Software</option>
                                <option>Mechanical</option>
                                <option>Bio Technology</option>
                                <option>Genetics</option>
                                <option>Chemical</option>
                                <option>Bio Medical</option>
                                <option>Automobile</option>
                                <option>Aerospace</option>
                                <option>Mechatronics</option>
                                <option>Nanotechnology</option>
                            </select>      
                            <br>
                            <div class="form-inline" style="border: none">
                                <div class="col-md-2">
                                    <p>Year</p>
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" name="year"> 1
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" name="year"> 2
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" name="year"> 3
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" name="year"> 4
                                </div>
                            </div>

                        </div>
                        <div id="editfooter" class="panel-footer">
                            <a style="text-decoration: none" href="profile.html">
                                <button id="submitbutton" class="btn " type="submit">
                                    SAVE PROFILE
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <div id="myModal123" class="modal1">
  <div class="modal-content1">
    <span class="close1">&times;</span>
            <h3 class="modal-title" style="margin-left: 0px;">Select Your Preferences</h3>
            <br>
                <form action="settings.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" name="image" id="image" class="form-control" />
                    </div>
                    
                    <input type="submit" nstyle="background-color: #4CAF50;border-color: #4CAF50;" value="Upload" class="btn btn-primary" name="profilePicture">
                </form>

  </div>

</div>

<script>
// Get the modal
var modal1 = document.getElementById('myModal123');

// Get the button that opens the modal
var btn1 = document.getElementById("changebutton");



// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}

window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

var span1 = document.getElementsByClassName("close1")[0];



// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}
</script>

 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>
        <?php include 'footerp.php';?>

        <script type="text/babel">
            ReactDOM.render(
                    document.getElementById('settingpage'),
                    document.getElementById('container')
                    );
        </script>

    </body>
</html>