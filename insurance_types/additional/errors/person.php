<?php
    if($Email == ''){ $errors[] = 'Enter your email!';}
    elseif(strlen($Email) < 3 || strlen($Email) > 90){$errors[] = 'Minimum length for last name is 3 characters';} 
	if($FirstName == ''){ $errors[] = 'Enter your first name!';}
	if($LastName == ''){ $errors[] = 'Enter your last name!';}
    if($BirthDate == ''){ $errors[] = 'Enter your birthday!';}
    if($BirthDate < 01-01-1900 or  $BirthDate > date("Y-m-d")){$errors[] = "Not possible birthday!";}
	//if($Country == ''){ $errors[] = 'Enter your citizenship!';}
    if($Passport == ''){ $errors[] = 'Enter your passport number!';}
    //if($Gender == ''){ $errors[] = 'Choose your gender!';}
?>