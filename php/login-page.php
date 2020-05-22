<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/login-page.css">
    <title>Authorization</title>
    <meta charset="utf-8"/>
</head>
<body>

<?php 
error_reporting(0);
if(isset($_POST['login'])){
    $data = $_POST;
    $login = $data['username'];
    $password = md5($data['password']."AlmazKydyrminFromQazaqstan");

    require_once "database_connection.php";
    if($connnection == false)
    {
        echo 'something went wrong...';
        echo mysql_connect_error();
        exit();

    }
    else
    {
        // making query to db
        $sql = "SELECT * FROM `users` WHERE `email` LIKE '$login' AND `password` LIKE '$password'";
        $result = mysqli_query($connnection, $sql); 
        $user = mysqli_fetch_assoc($result);
        //checking if such user exists
        if(count($user) == 0)
        {
            echo "<p style='text-align: center;'>User with such login and password is not found</p>";
        }
        else
        {
        //creating cookies
        setcookie('name', $user['name'], time() + 1000, "/");
        setcookie('surname', $user['surname'], time() + 1000, "/");
        $connnection->close();
        //go back to main page
        header('Location:../index.php');
        }
    }
}
?>
    <form id="the_only_form" action="login-page.php" method="POST">
        <div id="inner"> 
            <p><input type="text" placeholder="username" name="username" ></p>
            <p><input id="aleke" type="password" placeholder="password" name="password" {font:small-caption;font-size:16px}></p>
            <p><input type="submit" value = "LOGIN" name="login"></p>
            <p id="question">Not registered? <a href="register-page.php">Create an account</a></p>
        <div>
    </form>
</body>