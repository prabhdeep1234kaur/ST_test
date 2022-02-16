<?php 
include("validation.php"); 
?>
<form method="post" action="" name="form">
Full name : <input type="text" name="name" value="<?php if(isset($valid_name)){echo $valid_name;} ?>" />
<?php if(isset($error_name)){echo  $error_name;} ?>
Email : <input type="text" name="email" value="<?php if(isset($valid_email)){echo  $valid_email;} ?>" />
<?php if(isset($error_email)){echo  $error_email; }?>
Username : <input type="text" name="username" value="<?php if(isset($valid_username)){echo  $valid_username;} ?>" />
<?php if(isset($error_email)){echo  $error_email;} ?>
Password : <input type="password" name="password" value="<?php if(isset($valid_password)){echo  $valid_password;} ?>" />
<?php if(isset($error_password)){echo  $error_password; }?>
Gender : <select name="gender">
<option value="0">Gender</option>
<option value="1">Male</option>
<option value="2">Female</option>
</select>
<?php if(isset($error_gender)){echo  $error_gender;} ?>
<input type="submit" value="submit">
</form>