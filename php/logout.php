<?php
    // deleting cookies
    setcookie('name','', time() - 3600, "/");
    setcookie('surname','', time() - 3600, "/");
    // go back to main page
    header('Location:../index.php');   
?>