<!DOCTYPE html>
<html>
    <head>
        @yield ('title')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="w3-theme-l5">
        <!-- Navbar -->
        <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="/" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
            <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
            <a href="#" class="w3-bar-item w3-button">One new friend request</a>
            <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
            <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
            </div>
        </div>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
            <img src="/w3images/avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
        </a>
        </div>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
        </div>
        <br>
        <br>
        <br>

    @yield('content')


        
        <!-- End Page Container -->
        <br>
        
        <!-- Footer -->
        <footer class="w3-container w3-theme-d3 w3-padding-16">
            <h5>Footer</h5>
        </footer>
        
        <footer class="w3-container w3-theme-d5">
            <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
        </footer>
        
        <script>
            // Accordion
            function myFunction(id) {
                var x = document.getElementById(id);
                if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className += " w3-theme-d1";
                } else { 
                x.className = x.className.replace("w3-show", "");
                x.previousElementSibling.className = 
                x.previousElementSibling.className.replace(" w3-theme-d1", "");
                }
            }
            
            // Used to toggle the menu on smaller screens when clicking on the menu button
            function openNav() {
                var x = document.getElementById("navDemo");
                if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                } else { 
                x.className = x.className.replace(" w3-show", "");
                }
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html> 
  