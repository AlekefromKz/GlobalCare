<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/register-page.css">
    <title>Registration</title>
    <meta charset="utf-8"/>
</head>
<body>

<?php
//error_reporting(0);
$data = $_POST; 

if(isset($data['signup'])) // registration p-ss
{
	$name = filter_var(trim($data['name']), FILTER_SANITIZE_STRING);
    $Lname = filter_var(trim($data['Lname']), FILTER_SANITIZE_STRING);
    $Email = filter_var(trim($data['Email']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($data['password']), FILTER_SANITIZE_STRING);
	if($name == ''){ $errors[] = 'Enter your name!';}
	elseif(strlen($name) < 3 || strlen($name) > 90){$errors[] = 'Minimum length for name is 3 characters';} 
	if($Lname == ''){ $errors[] = 'Enter your last name!';}
	elseif(strlen($Lname) < 3 || strlen($Lname) > 90){$errors[] = 'Minimum length for last name is 3 characters';} 
	if($Email == ''){ $errors[] = 'Enter your email!';}
	elseif(strlen($Email) < 7 || strlen($Email) > 90){$errors[] = 'Minimum length for email is 7 characters';} 
	if($password == ''){ $errors[] = 'Enter your password!';}
	elseif(strlen($password) < 7 || strlen($password) > 90){$errors[] = 'Minimum length for password is 7 characters';} 

	if(empty($errors))
	{
	    require_once "database_connection.php";
        $password = md5($password."AlmazKydyrminFromQazaqstan");
    	if($connnection == false)
    	{
   		    echo 'something went wrong...';
   			echo mysql_connect_error();
     		//exit();
     	}
     	else
     	{
			// making query
     		$sql = "SELECT * FROM `users` WHERE `email` LIKE '$Email'";
        	$result_0 = mysqli_query($connnection, $sql); 
			$user = mysqli_fetch_assoc($result_0);
			//checking if this email is used
        	if(count($user) != 0)
	        {
            echo "User with such email already exists";
    	    }
    	    else
    	    {
			// registration query
     		$result = mysqli_query($connnection, "INSERT INTO `users` (`name`, `surname`,
     		`email`, `password`) VALUES ('$name', '$Lname', '$Email', '$password')");
     		echo "Congratulations! You are registered!";
			 $connnection->close();
	        // go back to main page
			// header('Location:login-page.php');
     		}  
		}
	}

	else
	{
		echo '<div id="mistakes">' .array_shift($errors). '</div>';
	}
}
?>

<form action="register-page.php" method="POST"> <!--form to be completed-->
	<div id="content">
	<p>
		<p><strong>First Name:</strong></p>
		<input type="text" name="name" value="<?php echo @$data['name'];?>">
	</p>

	<p>
		<p><strong>Last Name:</strong></p>
		<input type="text" name="Lname" value="<?php echo @$data['Lname'];?>">
	</p>

	<p>
		<p><strong>Email:</strong></p>
		<input type="Email" name="Email" value="<?php echo @$data['Email'];?>">
	</p>


	<p>
		<p><strong>Password:</strong></p>
		<input type="password" name="password" value="<?php echo @$data['password'];?>">
	</p>

	<p>
		<input type="submit" name="signup" value="Register">
	</p>
	</div>
</form>
</body>