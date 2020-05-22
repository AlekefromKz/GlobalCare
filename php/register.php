<?php
error_reporting(0);
$data = $_POST;

	$name = filter_var(trim($data['fname']), FILTER_SANITIZE_STRING);
    $Lname = filter_var(trim($data['lname']), FILTER_SANITIZE_STRING);
    $Email = filter_var(trim($data['email']), FILTER_SANITIZE_STRING);
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
     		exit();
     	}
     	else
     	{
			 // making query
     		$sql = "SELECT * FROM `users` WHERE `email` LIKE '$Email'";
        	$result_0 = mysqli_query($connnection, $sql); 
			$user = mysqli_fetch_assoc($result_0);
			// checking if there is user with such email
        	if(count($user) != 0)
	        {
                echo "User with such email already exists";
    	    }
    	    else
    	    {
				// reg p-cess
     		    $result = mysqli_query($connnection, "INSERT INTO `users` (`name`, `surname`,
     		    `email`, `password`) VALUES ('$name', '$Lname', '$Email', '$password')");
     		    echo "Congratulations! You are registered!";
				 $connnection->close();
	        	// go back to main page
				header('Location:login-page.php');
				}  
		}
	}

	else
	{
        echo '<div id="mistakes">' .array_shift($errors). '</div>';
	}
?>