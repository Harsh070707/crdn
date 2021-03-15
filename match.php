<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>


<body>


<?php
SESSION_START();
   
	$out="";
     
   
   // When form submitted, check and create user session.

    if (isset($_POST['login'])) {
		 require('config.php');
           $email=$_POST['email'];
           $password=$_POST['password'];
   if (!empty($username) && !empty($password)){ 
    
        // Check user is exist in the database
        $sql   = "SELECT * FROM  admin WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($conn,$sql) or die(mysql_error());
        $rows = mysqli_num_rows($result);
      
          if($rows == 1) {
     //        if($_SESSION['email']=$rows['email']){ 
$out="success";
$_SESSION['email']=$email;
header("Location:main.php");
	 }

else {
echo $out="Fail";
header("Location:loginnew.php?msg=failed");
}
		  }
   }		  
            //header("Location:loginnew.php");
    

  
  
?>
<script src="alert.js" charset="utf-8"></script>
    </body>
</html>
  
