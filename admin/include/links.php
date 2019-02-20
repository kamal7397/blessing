<?php 
if(isset($_POST['logout']))
{
	session_destroy();
	header('location:../index.php?pg=login');
}

if(isset($_POST['prayer']))
{
$name=$_POST['name'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$fname=$_POST['fname'];
$contact=$_POST['contact'];
$request=$_POST['request'];
updatedata("prayer", "name = '".$name."',dob = '".$dob."',address = '".$address."',fname = '".$fname."',contact = '".$contact."',request = '".$request."'","id = ".$_GET['id']);
}

if(isset($_POST['updateRecord']))
{
$amount=$_POST['amount'];
$purpose=$_POST['purpose'];
$date=$_POST['date'];
$rec_type=$_POST['rec_type'];
$rid=$_GET['rid'];
updatedata("records", "amount = '".$amount."',purpose = '".$purpose."',date = '".$date."',type = '".$rec_type."'","id = ".$_GET['rid']);
}



if(isset($_GET['delete']))
{
$id=$_GET['id'];
deletedata("prayer","id=".$id,"index.php?pg=prayers");
}


if(isset($_GET['deleterecord']))
{
$rid=$_GET['rid'];
deletedata("records","id=".$rid,"index.php?pg=donation");
}


if(isset($_GET['delete_image']))
{
$id=$_GET['id'];
echo "../assets/img/gallery/".$_GET['image'];
deletedata("gallery","id=".$id,"index.php?pg=gallery");
unlink("../assets/img/gallery/".$_GET['image']);
}

if(isset($_GET['updatePrayerStatus']))
{
$id=$_GET['id'];
updatedata("prayer","status='Completed'","id=".$_GET['id']);
header('location:?pg=prayers');
}





if(isset($_POST['addimg']))
{
$name=$_POST['name'];

$target_dir = "../assets/img/gallery/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	insertdata("gallery","name,image","'".$name."','".$_FILES["fileToUpload"]["name"]."'");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}






if(isset($_POST['donation']))
{
$amount=$_POST['amount'];
$date=$_POST['date'];
$purpose=$_POST['purpose'];
$rec_type=$_POST['rec_type'];

$res=selectdatacon("sum(amount) as donation","records","type='donation'");
	$donation = mysqli_fetch_assoc($res);

	$res_expense=selectdatacon("sum(amount) as expense","records","type='expense'");
	$expense = mysqli_fetch_assoc($res_expense);

$cashinhand=$donation['donation']-$expense['expense'];
	if($rec_type=='expense')
        {
		 if($cashinhand<$amount)
		{
			echo "Insufficient amount";
			header('location:index.php?pg=donation&status=0');
		}
		else
		{
			insertdata("records","amount,date,purpose, userid, type","'".$amount."','".$date."','".$purpose."',".$_SESSION['userid'].",'$rec_type'");
			header('location:index.php?pg=donation&status=1');
		}
	
	}
	else
	{
	insertdata("records","amount,date,purpose, userid, type","'".$amount."','".$date."','".$purpose."',".$_SESSION['userid'].",'$rec_type'");

	}
}


?>

