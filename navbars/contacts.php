<?php 
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Care - Contact</title>
    <link rel="stylesheet" href="<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet"">
    <link rel="stylesheet" href="css/contact.css">
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
                <h1 class="promo-title">Global Care - Insruance<br>Contact</h1>
                <p class="promo-text">If you have some question or business enquries pls find contact us!</p>
            </section>
        </div>

	<h1 style='box-sizing: border-box; font-size: 32px; margin: 0px 0px 25px; font-family: "Fedra Serif A", Arial, Helvetica, sans-serif; font-weight: 700; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;'><span style="font-family: 
        Comic Sans MS, sans-serif;">Dear customer!&nbsp;</span></h1>
<h1 style='box-sizing: border-box; font-size: 32px; margin: 0px 0px 25px; font-family: "Fedra Serif A", Arial, Helvetica, sans-serif; font-weight: 700; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;'><span style="font-family: 
        Comic Sans MS, sans-serif;">Due to the emergency situation &nbsp;all GlobalCare offices in Estonia and all around the world are closed.&nbsp;</span></h1>
<h1 style='box-sizing: border-box; font-size: 32px; margin: 0px 0px 25px; font-family: "Fedra Serif A", Arial, Helvetica, sans-serif; font-weight: 700; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;'><span style="font-family: 
        Comic Sans MS, sans-serif;">Please visit our website, call <span style="color: rgb(26, 188, 156);">+372 123 456 789</span> or e-mail <span style="color: rgb(84, 172, 210);">info@globalcare.eu</span> for information.&nbsp;</span></h1>
<h1 style='box-sizing: border-box; font-size: 32px; margin: 0px 0px 25px; font-family: "Fedra Serif A", Arial, Helvetica, sans-serif; font-weight: 700; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;'><span style="font-family: 
        Comic Sans MS, sans-serif;">Contracts can be made conveniently at our <span style="color: rgb(84, 172, 210);">e-office</span>. Simply go to the main page and choose the insurance type you need.</span></h1>
<h1 style='box-sizing: border-box; font-size: 32px; margin: 0px 0px 25px; font-family: "Fedra Serif A", Arial, Helvetica, sans-serif; font-weight: 700; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;'><span style="font-family: 
        Comic Sans MS, sans-serif;">We thank you in advance for your patience as there may be more letters, calls and inquiries than normally, so it may take longer to respond.&nbsp;</span></h1>
<h1 style='box-sizing: border-box; font-size: 32px; margin: 0px 0px 25px; font-family: "Fedra Serif A", Arial, Helvetica, sans-serif; font-weight: 700; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;'><span style="font-family: 
        Comic Sans MS, sans-serif;">We <u>apologise</u> for the inconvenience!&nbsp;</span></h1>
<h1 style='box-sizing: border-box; font-size: 32px; margin: 0px 0px 25px; font-family: "Fedra Serif A", Arial, Helvetica, sans-serif; font-weight: 700; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;'><span style="font-family: 
        Comic Sans MS, sans-serif;">Customer service Tel: <span style="color: rgb(26, 188, 156);">(+372) 123 45678</span> Fax: <span style="color: rgb(26, 188, 156);">(+372) 123 4567 </span></span></h1>
<h1 style='box-sizing: border-box; font-size: 32px; margin: 0px 0px 25px; font-family: "Fedra Serif A", Arial, Helvetica, sans-serif; font-weight: 700; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;'><span style="font-family: 
        Comic Sans MS, sans-serif;">E-mail: <span style="color: rgb(44, 130, 201);">info@globalcare.ee</span><br></span></h1>
<div class="contact-page" style="box-sizing: border-box; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
    <div class="row" style="box-sizing: border-box; margin: 0px -10px; padding: 0px;">
        <div class="col-xs-6" style="box-sizing: border-box; position: relative; min-height: 1px; padding: 0px 10px; float: left; width: 422.5px; margin: 0px;">
            <div class="block" style="box-sizing: border-box;"><span style="font-family: 
        Comic Sans MS, sans-serif;"><br></span></div>
        </div>
	
    </div>
</div>
<p><br></p>







        <footer class="footer">
            <div class="container">
                <div class="footer-block">
                    <img class="footer-logo" src="../images/logo5.png" alt="logo">
                    <nav class="footer-nav">
                        <a href="" class="footer-link">Partnership</a>
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