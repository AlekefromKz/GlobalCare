<?php 
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Care Insurance Company</title>
    <link rel="stylesheet" href="<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet"">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body>
    <div class="container">
        <header>
            <a class="logo" href="index.php"><img src="images/logo5.png" alt="logotype" class="new-logo"> </a>
            <input type="text" class="input input-address" placeholder="Search">
            <?php 
            if(!isset($_COOKIE['name']))
            { ?>
            <div class="buttons">
                <!-- ctrl / -->
                <button class="button button-primary" id="login-button">
                    <img src="images/user.svg" alt="Log in" class="button-icon">
                    <span class="button-text">Log in</span>
                </button>
                <button class="button button-primary"  id="register-button">
                    <img src="images/user.svg" class="button-icon"alt="Register">
                    <span class="button-text">Register</span>
                </button>
            </div>

            <?php
            } 
            else{ ?>
            <span class="welcome-message"><?php echo $_COOKIE['name'] . " " . $_COOKIE['surname'];?></span>
            <div class="buttons">
                <a href="php/logout.php">
                    <button class="button button-primary"  id="logout-button">
                    <img src="images/user.svg" class="button-icon"alt="logout">
                    <span class="button-text">Log out</span>
                    </button>
                </a>
            </div>
            <?php } ?>
    
        </header>

        <div class="main">
            <section class="promo">
                <h1 class="promo-title">Global Care<br>Be safe globally</h1>
                <p class="promo-text">Buy different insurances without leaving home, save your time and be safe!</p>
            </section>
    
            <section class="InsuranceTypes">
                <div class="section-header">
                    <h2 class="section-title">Insurance types</h2>
                    <input type="text" class="input input-search" placeholder="Search insurance types">        
                </div>
                <div class="cards">

                    <a href="insurance_types/health.php" class="card wow fadeInUp" data-wow-delay="0.2s">
                        <img src="images/ins_types/medical.png" alt="1st" class="card-image">               
                        <div class="card-text">
                            <div class="card-header">
                                <h3 class="card-title">Health</h3>
                            </div>
                            <div class="card-info">
                                <div class="rating">
                                    <img src="images/rating.svg" alt="rating" class="rating-star"></div>
                                <div class="price">Personal & Family</div>
                                <div class="category">Family</div>
                            </div>       
                        </div>
                    </a>
    
                    <a href="insurance_types/travelling.php" class="card wow fadeInUp" data-wow-delay="0.4s">
                        <img src="images/ins_types/travel.png" alt="1st" class="card-image">               
                        <div class="card-text">
                            <div class="card-header">
                                <h3 class="card-title">Travelling</h3>
                            </div>
                            <div class="card-info">
                                <div class="rating"><img src="images/rating.svg" alt="rating" class="rating-star"></div>
                                <div class="price">Personal & Commercial</div>
                                <div class="category">Group</div>
                            </div>       
                        </div>
                    </a>
    
                    <a href="insurance_types/car.php" class="card wow fadeInUp" data-wow-delay="0.6s">
                        <img src="images/ins_types/car.png" alt="1st" class="card-image">               
                        <div class="card-text">
                            <div class="card-header">
                                <h3 class="card-title">Car</h3>
                            </div>
                            <div class="card-info">
                                <div class="rating"><img src="images/rating.svg" alt="rating" class="rating-star"></div>
                                <div class="price">Personal & Commercial</div>
                                <div class="category">Motorbike</div>
                            </div>       
                        </div>
                    </a>
    
                    <a href="insurance_types/life.php" class="card wow fadeInUp" data-wow-delay="0.2s">
                        <img src="images/ins_types/life.jfif" alt="1st" class="card-image">               
                        <div class="card-text">
                            <div class="card-header">
                                <h3 class="card-title">Life</h3>
                            </div>
                            <div class="card-info">
                                <div class="rating"><img src="images/rating.svg" alt="rating" class="rating-star"></div>
                                <div class="price">Personal & Family</div>
                                <div class="category">Family</div>
                            </div>       
                        </div>
                    </a>
    
                    <a href="insurance_types/estate.php" class="card wow fadeInUp" data-wow-delay="0.4s">
                        <img src="images/ins_types/estate.png" alt="1st" class="card-image">               
                        <div class="card-text">
                            <div class="card-header">
                                <h3 class="card-title">Estate</h3>
                            </div>
                            <div class="card-info">
                                <div class="rating"><img src="images/rating.svg" alt="rating" class="rating-star"></div>
                                <div class="price">House & Office & Storage</div>
                                <div class="category">Other buildings</div>
                            </div>       
                        </div>
                    </a>
    
                    <a href="insurance_types/gadget.php" class="card wow fadeInUp" data-wow-delay="0.6s">
                        <img src="images/ins_types/gadgets.jfif" alt="1st" class="card-image">               
                        <div class="card-text">
                            <div class="card-header">
                                <h3 class="card-title">Gadgets</h3>
                            </div>
                            <div class="card-info">
                                <div class="rating"><img src="images/rating.svg" alt="rating" class="rating-star"></div>
                                <div class="price">Personal & Family & Commercial</div>
                                <div class="category">Company</div>
                            </div>       
                        </div>
                    </a>

                </div>
            </section>
        </div>

        <footer class="footer">
            <div class="container">
                <div class="footer-block">
                    <img class="footer-logo" src="images/logo5.png" alt="logo">
                    <nav class="footer-nav">
                        <a href="navbars/partnership.php" class="footer-link">Partnership</a>
                        <a href="navbars/awards.php" class="footer-link">Awards</a>
                        <a href="navbars/offices.php" class="footer-link">Offices</a>
                        <a href="navbars/contacts.php" class="footer-link">Contacts</a>
                    </nav>
                    <div class="social-links">
                        <a class="social-link" href="#"><img src="images/inst.svg" alt="instagram"></a>
                        <a class="social-link" href="#"><img src="images/face.svg" alt="facebook"></a>
                        <a class="social-link" href="#"><img src="images/vk.svg" alt="vk"></a>
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
                    <form id="login-form-process" action="php/register.php" method="POST">
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
                    <form id="login-form-process" action="php/login.php" method="POST">
                            <p><input type="email" placeholder="Email" name="email" ></p>
                            <p><input type="password" placeholder="Password" name="password"></p>
                            <p><input type="submit" value = "Login" name="login"></p>
                            <p id="question">Not registered? <a href="php/register-page.php">Create an account</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/wow.min.js"></script>
    <script src="js/register.js"></script>
    <script src="js/login.js"></script>
</body>
</html>