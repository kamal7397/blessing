<?php
if(!isset($_SESSION['username']))
{
	header('location:index.php?pg=login');
}
?>
<h1>dashboard</h1>
<form method="post">
<input type="submit" name="logout" value="Logout">
</form>