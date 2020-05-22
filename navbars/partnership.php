<?php 
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Care - Partnership</title>
    <link rel="stylesheet" href="<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet"">
    <link rel="stylesheet" href="css/partnership.css">
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
                <h1 class="promo-title">Global Care - Insruance<br>Partnership</h1>
                <p class="promo-text">Become partner of Global Care and let's grow together!</p>
            </section>
        </div>
	<center>
	<div class="limit" style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
    <p style="box-sizing: border-box; text-align: center; line-height: 1.15;"><span style='font-family: "Comic Sans MS", sans-serif; font-size: 28px; color: rgb(71, 85, 119);'>GlobalCare in Estonia and all around the World looks to contribute to making society a safer and more caring place and to the development of key players in eminent fields.&nbsp;</span></p>
    <p style="box-sizing: border-box; text-align: center; line-height: 1.15;"><br></p>
    <p style="box-sizing: border-box; text-align: center; line-height: 1.15;"><span style='font-family: "Comic Sans MS", sans-serif; font-size: 28px; color: rgb(71, 85, 119);'>In order to do this, we ... carry out</span><span style='font-family: "Comic Sans MS", sans-serif; font-size: 28px; color: rgb(71, 85, 119);'>&nbsp;our insurance operations in such a way that increases the sense of security for the company and for each individual support the promotion of Estonian life through sponsorship The key words in all of GlobalCare&rsquo;s activities are results and professionalism, and as such we prefer to aim our sponsorship projects at those who ... stand out in their chosen field and take it further carefully and consistently plan and act in order to achieve the results they desire speak to a wide audience have a significant and lasting influence in turning the living environment into a safer, more valuable and caring place promote the success of their region GlobalCare sees it as vital to support the promotion of good health , safety and security within society, sports and culture.&nbsp;</span></p>
    <p style="box-sizing: border-box; text-align: center; line-height: 1.15;"><br></p>
    <p style="box-sizing: border-box; text-align: center; line-height: 1.15;"><span style='font-family: "Comic Sans MS", sans-serif; font-size: 28px; color: rgb(71, 85, 119);'>We prefer projects that go together with our own business activities, that support them, and that help to offer additional value to GlobalCare&rsquo;s employees and clients.</span></p>
    <p style="box-sizing: border-box; text-align: center; line-height: 1.15;"><span style="color: rgb(71, 85, 119);"></span></p>
	</div>
	<footer class="footer" style="box-sizing: border-box; padding: 60px 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; line-height: 1.15;">
    <div class="container" style="box-sizing: border-box; max-width: 1200px; margin: auto;">
        <div class="footer-block" style="box-sizing: border-box; display: flex; align-items: center; justify-content: space-between;"><span style="color: rgb(71, 85, 119);"></span></div>
    </div>
	</footer>
	</center>
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