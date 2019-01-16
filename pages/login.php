<?php
if(isset($_SESSION['username']))
{
	header('location:./admin/index.php?pg=profile');
}

?>

<form method="post">
<input type="text" name="username" placeholder="Username" required="required">
<input type="password" name="password" placeholder="Password" required="required">
<input type="submit" name="login" value="submit">
</form>