<?php
include_once 'config.php';
if (isset($_POST['save']))
{
	$first_name=$_POST['firstname'];
	$last_name=$_POST['lastname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
    $sql="INSERT INTO admin(firstname,lastname,email,Password) VALUES('$first_name','$last_name','$email',md5('$password'))";
    if(mysqli_query($conn,$sql)){
    	header("Location:loginnew.php");
    }
    else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>

