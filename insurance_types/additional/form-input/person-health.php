<div class="card person">
    <h2>Insured Person</h2>
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
    <label for="Countries">Citizenship:</label><br><?php require "countries.php"?><br><br>
	<label for="Countries">Last Doctor Visit(reason):</label><br><?php require "sickreason.php"?><br><br>
    <label for="Passport">Passport number:</label><br><input type="text" name="Passport" value="<?php echo @$data['Passport'];?>"><br><br>
	<label for="Gender">Gender:</label><br><?php require "genders.php";?><br><br>
</div>