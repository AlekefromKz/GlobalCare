<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
error_reporting(0);
if(isset($_POST['login'])){
    $data = $_POST;
    $login = $data['email'];
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
        // making sql query
        $sql = "SELECT * FROM `users` WHERE `email` LIKE '$login' AND `password` LIKE '$password'";
        $result = mysqli_query($connnection, $sql); 
        $user = mysqli_fetch_assoc($result);

        // check result 
        if(count($user) == 0)
        {
            echo "<p style='text-align: center;'>User with such login and password is not found</p>";
        }
        else
        {
        // creating cookies
        setcookie('name', $user['name'], time() + 1000, "/");
        setcookie('surname', $user['surname'], time() + 1000, "/");
        setcookie('email', $user['email'], time() + 1000, "/");        
        $connnection->close();
        // go back to main page
        header('Location:../index.php');
    }
    }
}
?>
</body>
</html>