<div class="card person">
    <h2>Person Details</h2>
    <label for="Email">Email:</label><br><input type="Email" name="Email" value = "
    <?php if(@$data['Email'] == '')
    {
        echo$_COOKIE["email"];}
    else
    {
        echo @$data['Email'];
    }?>"><br><br>
    <label for="FirstName">First name:</label><br><input type="text" name="FirstName" value="<?php echo @$data['FirstName'];?>"><br><br>
    <label for="LastName">Last name:</label><br><input type="text" name="LastName" value="<?php echo @$data['LastName'];?>"><br><br>
    <label for="Age">Birth date:</label><br><input type="date" name="BirthDate" value="<?php echo @$data['BirthDate'];?>"><br><br>
    <label for="Passport">Passport number:</label><br><input type="text" name="Passport" value="<?php echo @$data['Passport'];?>"><br><br>
    <h2>Car Details:</h2>
	<label for="CarModel">Car model:</label><br><?php require "carmodel.php"?><br><br>
	<label for="CarYear">Car year:</label><br><?php require "caryear.php"?><br><br>
	<label for="EngineSize">Engine size:</label><br><?php require "enginesize.php"?><br><br>
	<label for="NumberPlate">Car number plate:</label><br><input type="text" name="NumberPlate" value="<?php echo @$data['NumberPlate'];?>"><br><br>
</div>