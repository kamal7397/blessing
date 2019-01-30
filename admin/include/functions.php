<?php
	function insertdata($tbname,$columns,$value)
	{
		$insertqry="insert into $tbname($columns) values($value)";
		$result=mysqli_query($GLOBALS['con'],$insertqry) or die(mysqli_error($GLOBALS['con']));
			if($result)
			{
				echo "value inserted";
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
	return $result;
	}


	function selectdatacon($col,$tbname,$where)
	{ 
		
		$selectqry="select $col from $tbname where $where";
		$result=mysqli_query($GLOBALS['con'],$selectqry) or die(mysqli_error($GLOBALS['con']));
			
	return $result;
	}

	//selectdata("*", "register");
?>

















