  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .searchbar{
    font-family: Lato;
    margin: 10px;
}

.searchbar button{
    background-color: transparent;
    border: none;
    color: white;
}
.glyphicon-pencil{
    color: white;
}

.pencil
{
    background-color: black;
    margin-bottom: 15px;
    margin-top: 15px;
    list-style-type: none;    border-width: 0px;
}
.footer{
    background-color: #555;
    color: white;
    width: 100%; 
    position: fixed;
    float:bottom;
}
#options a{
    font-size: 18px;
    text-decoration: none;
    color: black;
}

#options li{
    margin-bottom: 15px;
    margin-top: 15px;
    list-style-type: none;
    font-family: Lato;
    
}
</style>
<div class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div>
            <a href="homepage.php"><p class="navbar-brand">connect in.</p></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li id="newpost"><button type="button" class="pencil" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></li>
            <li id="profile"><a href="profile.php">Profile</a></li>
            <li id="setting"><a href="forgotp.php">Settings</a></li>
            <li id="logout"><a href="javascript:Logout()" >Logout</a></li>
        </ul>
        <form>            
            <div class="searchbar input-group col-md-4">
                <input type="text" class="form-control" placeholder="Search your query here..." id="search">
                <div class="input-group-btn">
                    <button class="btn" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Select an option!</h4>
            </div>
            <div class="modal-body">
                <form action="server.php" method="POST">
                    <div class="form-group">
                                            <select class="form-control" name="options">
                                            <option disabled selected value>Select an option</option>
                                            <option name="dept" value="Notes">Notes</option>
                                            <option name="dept" value="Blog">Blog</option>
                                            <option name="dept" value="Annoucements">Announcements</option>
                                        </select> 
                    </div>
                    <button type="submit" class="btn btn-primary" name="option">Go</button>
                </form>
            </div>
        </div>
    </div>
</div>
           
        <script>
            function Logout() {
                var txt;
                if(confirm("Are you sure you want to logout?")==true)
                {
                     window.location = "logout.php";
                }
                else
                {
                    location.reload();
                }

                // document.getElementById("demo").style.visibility="hidden";
            }
        </script>
