<?php
	function insertdata($tbname,$columns,$value, $loc,$locError)
	{
		$insertqry="insert into $tbname($columns) values($value)";
		$result=mysqli_query($GLOBALS['con'],$insertqry) or die(mysqli_error($GLOBALS['con']));
			if($result)
			{
				header('location:'.$loc);
			}
			else
			{
				header('location:'.$locError);
			}
	return $result;	
	}

	//insertdata("register","name","description");






	function updatedata($tbname,$columns,$where)
	{
		
		$updateqry="update $tbname set $columns where $where";
		$result=mysqli_query($GLOBALS['con'],$updateqry) or die(mysqli_error($GLOBALS['con']));
			if($result)
			{
				echo "value updated";
			}
	}

	//updatedata("register", "firstname=kamal", "id=104" );







	function deletedata($tbname,$where)
	{
		
		$deleteqry="delete $tbname where $where";
		$result=mysqli_query($GLOBALS['con'],$deleteqry) or die(mysqli_error($GLOBALS['con']));
			if($result)
			{
				echo "value deleted";
			}
	}

	//deletedata("register", "firstname=kamal");








	function selectdata($col,$tbname)
	{
		
		$selectqry="select $col from $tbname ";
		$result=mysqli_query($GLOBALS['con'],$selectqry) or die(mysqli_error($GLOBALS['con']));
			if($result)
			{
				echo "value selected";
			}
	return $result;
	}

	//selectdata("*", "register");





	function selectdatacon($tbname,$where,$user,$password)
	{
		
		$selectqry="select $tbname where $where";
		$result=mysqli_query($GLOBALS['con'],$selectqry) or die(mysqli_error($GLOBALS['con']));
			if($result)
			{
				header('location:'.$user);
			}
			else
			{
				header('location:'.$password);
			}
	return $result;
	}

	//selectdata("*", "register");
?>

















