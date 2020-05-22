<?php
    if($StartDate == ''){ $errors[] = 'Enter start date!';}
    if($EndDate == ''){ $errors[] = 'Enter end date!';}
    if($StartDate < date("Y-m-d")){$errors[] = 'Start date can not be earlier than today!!!';}
    if($StartDate > $EndDate){$errors[] = 'Start date can not be earlier than end date!';}
    if($StartDate > 2030-01-01 or $EndDate > 2030-01-01){$errors[] = 'Dates have to be earlier than 2030-01-10';}
?>