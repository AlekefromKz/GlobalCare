<?php
session_start();
error_reporting(0);



$data = $_POST;
if(isset($data['submit']))
{   
    // if submit button is pressed, create such variables to use them in following processes
    $Email = filter_var(trim($data['Email']), FILTER_SANITIZE_STRING);    
	$FirstName = filter_var(trim($data['FirstName']), FILTER_SANITIZE_STRING);
    $LastName = filter_var(trim($data['LastName']), FILTER_SANITIZE_STRING);
    $BirthDate = filter_var(trim($data['BirthDate']), FILTER_SANITIZE_STRING);
    $Area = filter_var(trim($data['Area']), FILTER_SANITIZE_STRING);
    $Passport = filter_var(trim($data['Passport']), FILTER_SANITIZE_STRING);
    $Gender = filter_var(trim($data['Gender']), FILTER_SANITIZE_STRING);
    $StartDate = filter_var(trim($data['StartDate']), FILTER_SANITIZE_STRING);
    $EndDate = filter_var(trim($data['EndDate']), FILTER_SANITIZE_STRING);
	$Country = filter_var(trim($data['Countries']), FILTER_SANITIZE_STRING);
    
    // require codes to check incorrect inputs inserted by user
    require "additional/errors/person.php";
    require "additional/errors/confirm.php";
    require "additional/errors/start-end.php";
    if($Area == '' || $Area== "Select area of coverage!"){ $errors[] = 'Select area of coverage!';}
    
    if(empty($errors))
	{
        // creating sessions if there is no mistakes
        $_SESSION['Email'] = $Email;
        $_SESSION['FirstName'] = $FirstName;
        $_SESSION['LastName'] = $LastName;
        $_SESSION['BirthDate'] = $BirthDate;
        $_SESSION['Area'] = $Area;
        $_SESSION['Country'] = $Country;
        $_SESSION['Passport'] = $Passport;
        $_SESSION['Gender'] = $Gender;
        $_SESSION['StartDate'] = $StartDate;
        $_SESSION['EndDate'] = $EndDate;

        // go to confirmation page
        header('Location:final/checkpoint-travelling.php');
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobalCare - Travelling insurance</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../../css/normalize.css">
</head>
<body>
    
    <div class="container">
        <?php require "additional/html-parts/header.php";?>

        <section class="promo">
            <h1 class="promo-title">Travelling insurance application<br>Step 1</h1>
            <p class="promo-text">Please, fill the form below in order to continue</p>
        </section>
        <section class="info">
            <h3>Go to <a href="../index.php">main page</a> and login in order to save your infotmation to use it next time</h3>
        </section>
        <?php if(!empty($errors)) echo '<div class="mistakes">' . '<div class="output">' .array_shift($errors) . '</div>' . '</div>';?> 
        <div class="main">
        <form action="travelling.php" method="POST">
            <div class="submit-form">
                <?php require "additional/form-input/person.php";?>
                <div class="card insurance">
                    <h2>Insurance Information</h2>  
                    <label for="Area">Area of Cover:</label><br><?php require "additional/form-input/areas.php"; ?><br><br>
                    <div class="dates">
                        <div class="date"></span><label for="StartDate">Start date:</label><br><input type="date" name="StartDate" value="<?php echo @$data['StartDate'];?>"></div>
                        <div class="date"><label for="EndDate">End date:</label><br><input type="date" name="EndDate" value="<?php echo @$data['EndDate'];?>"></div>
                    </div><br><br>
                     <?php require "additional/form-input/confirmation.php";?><br><br>
                    <input id="continue-button" type="submit" name="submit" value="continue">
                </div> 
                    
            </div>
        </div>
        <?php require "additional/html-parts/footer.php";?>
    </div>
</body>
</html>
