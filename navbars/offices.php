<?php 
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Care - Offices</title>
    <link rel="stylesheet" href="<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet"">
    <link rel="stylesheet" href="css/office.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body>
    <div class="container">
        <header>
            <a class="logo" href="../index.php"><img src="../images/logo5.png" alt="logotype" class="new-logo"> </a>
            <input type="text" class="input input-address" placeholder="Search">
            <?php 
            if(!isset($_COOKIE['name']))
            { ?>
            <div class="buttons">
                <!-- ctrl / -->
                <button class="button button-primary" id="login-button">
                    <img src="../images/user.svg" alt="Log in" class="button-icon">
                    <span class="button-text">Log in</span>
                </button>
                <button class="button button-primary"  id="register-button">
                    <img src="../images/user.svg" class="button-icon"alt="Register">
                    <span class="button-text">Register</span>
                </button>
            </div>

            <?php
            } 
            else{ ?>
            <span class="welcome-message"><?php echo $_COOKIE['name'] . " " . $_COOKIE['surname'];?></span>
            <div class="buttons">
                <a href="../php/logout.php">
                    <button class="button button-primary"  id="register-button">
                    <img src="../images/user.svg" class="button-icon"alt="Register">
                    <span class="button-text">Log out</span>
                    </button>
                </a>
            </div>
            <?php } ?>
    
        </header>

        <div class="main">
            <section class="promo">
                <h1 class="promo-title">Global Care - Insruance<br>Offices</h1>
                <p class="promo-text">Here on the map you can find all of our locations!</p>
            </section>
        </div>
		<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

        <footer class="footer">
            <div class="container">
                <div class="footer-block">
                    <img class="footer-logo" src="../images/logo5.png" alt="logo">
                    <nav class="footer-nav">
                        <a href="partnership.php" class="footer-link">Partnership</a>
                        <a href="awards.php" class="footer-link">Awards</a>
                        <a href="offices.php" class="footer-link">Offices</a>
                        <a href="contacts.php" class="footer-link">Contacts</a>
                    </nav>
                    <div class="social-links">
                        <a class="social-link" href="#"><img src="../images/inst.svg" alt="instagram"></a>
                        <a class="social-link" href="#"><img src="../images/face.svg" alt="facebook"></a>
                        <a class="social-link" href="#"><img src="../images/vk.svg" alt="vk"></a>
                    </div>
                </div>
            </div>
        </footer>

        <div class="register">
            <div class="register-dialog">
                <div class="login-close-b">
                <button class="register-close">&times;</button>
                </div>
                <div class="login-form">
                    <form id="login-form-process" action="../php/register.php" method="POST">
                            <p><input type="text" placeholder="First name" name="fname" ></p>
                            <p><input type="text" placeholder="Last name" name="lname" ></p>
                            <p><input type="email" placeholder="Email" name="email" ></p>
                            <p><input type="password" placeholder="Password" name="password"></p>
                            <p><input type="submit" value = "Register" name="register"></p>
                    </form>
                </div>
            </div>
        </div>

        <div class="login">
            <div class="login-dialog">
                <div class="login-close-b">
                    <button class="login-close">&times;</button>
                </div>
                <div class="login-form">
                    <form id="login-form-process" action="../php/login.php" method="POST">
                            <p><input type="email" placeholder="Email" name="email" ></p>
                            <p><input type="password" placeholder="Password" name="password"></p>
                            <p><input type="submit" value = "Login" name="login"></p>
                            <p id="question">Not registered? <a href="../php/register-page.php">Create an account</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/wow.min.js"></script>
    <script src="../js/register.js"></script>
    <script src="../js/login.js"></script>
	
</body>
</html>