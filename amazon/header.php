<div class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div>
            <p class="navbar-brand">connect in.</p>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li id="newpost"><a href="NewPost.php"><span class="glyphicon glyphicon-pencil"></span></a></li>
            <li id="profile"><a href="profile.php">Profile</a></li>
            <li id="setting"><a href="settings.php">Settings</a></li>
            <li id="logout"><a href="javascript:Logout()">Logout</a></li>
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
        <script>
            function Logout() {
                var txt;
                alert("Are you sure you want to logout?");
                window.location.href = "login.php";

                // document.getElementById("demo").style.visibility="hidden";
            }
        </script>
