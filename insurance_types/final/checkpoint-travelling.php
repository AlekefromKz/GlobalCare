<?php 
session_start();
error_reporting(0);

// creating variabes from sessions created before 
$Email = $_SESSION['Email'];
$FirstName = $_SESSION['FirstName'];
$LastName = $_SESSION['LastName'];
$BirthDate = $_SESSION['BirthDate'];
$Country = $_SESSION['Country'];
$Passport = $_SESSION['Passport'];
$Gender = $_SESSION['Gender'];
$StartDate = $_SESSION['StartDate'];
$EndDate = $_SESSION['EndDate'];
$Area = $_SESSION['Area'];
$startdate = strtotime($StartDate);
$enddate = strtotime($EndDate);
$price = round((($enddate - $startdate)/60/60/24)*5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../../css/normalize.css">
</head>
<body>
    <div class="container">
        <header>
            <a class="logo animated fadeInRight delay-1s" href="../../index.php"><img src="../../images/logo5.png" alt="logotype" class="new-logo"> </a>
            <input type="text" class="input input-address" placeholder="Search">
        </header>
    
        <section class="promo">
            <h1 class="promo-title">Travel insurance application<br>Step 3</h1>
            <p class="promo-text">Please, check provided information and pay</p>
        </section>

        <div class="main-header">
            <span class="main-header-text">Check once more provided information and finish your application process</span>
        </div>

        <div class="main-content">
        <div class="main">
            <div class="person">
                <h3 class="personal-info">Personal Information</h3>
                <ul>
                    <li>First name: &nbsp; <?php echo "   " . $FirstName;?></li>
                    <li>Last name: &nbsp; <?php echo $LastName;?></li>
                    <li>Date of birth: &nbsp; <?php echo $BirthDate;?></li>
                    <li>Passport number: &nbsp; <?php echo $Passport;?></li>
                    <li>Gender: &nbsp; <?php echo $Gender;?></li>
                    <li>Email: &nbsp; <?php echo $Email;?></li>
                </ul>
            </div>
            <div class="insurance">
                <h3 class="insurance-info">Insurance Information</h3>
                <ul>
                    <li>Duration: &nbsp; <?php echo $StartDate . " - " . $EndDate;?></li>
                    <li>Insurance coverage: &nbsp; <?php echo $Area;?></li>
					<li>Total price: &nbsp; <?php echo "$price €"; ?> </li>
                </ul>
            </div>
        </div>
        <div class="finish">
            <div class="back">
                <!-- go back button -->
                <button onclick="history.go(-1);">Go back</button>
            </div>    
            <div class="pay">
                <button id="pay-button">Pay and get insurance</button>
            </div>    
        </div>
		</div>
        
        <footer class="footer">
            <div class="container">
                <div class="footer-block">
                    <img class="footer-logo" src="../../images/logo5.png" alt="logo">
                    <nav class="footer-nav">
                        <a href="#" class="footer-link">Partnership</a>
                        <a href="#" class="footer-link">Awards</a>
                        <a href="#" class="footer-link">Offices</a>
                        <a href="#" class="footer-link">Contacts</a>
                    </nav>
               <div class="social-links">
                    <a class="social-link" href="#"><img src="../../images/inst.svg" alt="instagram"></a>
                    <a class="social-link" href="#"><img src="../../images/face.svg" alt="facebook"></a>
                    <a class="social-link" href="#"><img src="../../images/vk.svg" alt="vk"></a>
                </div>
            </div>
        </footer>


        <div class="online-payment">
            <div class="online-payment-dialog">
                <div class="close">
                    <button class="payment-close">&times;</button>
                </div>

                <?php 
                // payment p-ss
                if(isset($_POST['last-step'])){
                    require_once "connection/dbcon.php";
                    // inserting data to database
                    $sql = "INSERT INTO `travelling_ins` (`email`, `name`, `surname`, `b-date`, `citizenship`, `passport`, `gender`, `area`, `s-date`, `e-date`) VALUES ('$Email', '$FirstName', '$LastName', '$BirthDate', '$Country', '$Passport', '$Gender', '$Area', '$StartDate', '$EndDate')"; 
                    $queryFlag = 0;
                    if($queryFlag == 0){
                        mysqli_query($connection, $sql);
                        // go to final page
                        header('Location:last/success-travelling/success.php');
                        $queryFlag = 1;
                    }
                }
                ?>
                <div class="payment-form">
                    <form method="POST" action="checkpoint-travelling.php">
                        <input type="text" placeholder="Name on Card">
                        <input type="text" placeholder="Card Number">
                        <div class="digits">
                        <input type="text" placeholder="MM/YY">
                        <input type="text" placeholder="Security Code">
                        <input type="submit" name="last-step" id="last-step" value="PAY">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="pay.js"></script>

</body>
</html>
