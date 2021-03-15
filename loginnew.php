<!DOCTYPE html>  
<?php
session_start();
$message="";
if(count($_POST)>0) {
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM admin WHERE email='" . $_POST["email"] . "' and Password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["email"] = $row['email'];
} else {
$message = "Invalid Username or Password!";
}
}

if(isset($_SESSION["email"])) {
header("Location:main.php");
}
?>
<html>   
<head>  
 
  <!--  <script type="text/javascript">
 function promptPassword( )
{
    var pwd = document.getElementById("password").value;
    if(pwd != 'P@ssw0rd'){
        alert("Login is incorrect");
        document.getElementById('password').value = "";
        return false;
    }
    else{
        alert("Password is correct, you are allowed to enter the site");    
        // Enter Site Code Here
    }
}
</script>    -->
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
</head>    
<body>   
<?php  
if(isset($_SESSION['email'])){
	
}
?>
 <div class="container">   
    <center> <h1> Login</h1> </center>   
    <form action="match.php" method="post" enctype="" id="harsh">  
       
        
          
             <label>Email : </label>   
            <input type="text" placeholder="Enter Email" name="email" id="email" required>  
           
             <label>Password : </label>   
            <input type="password" placeholder="Enter Password" id="password" name="password" required> 
             <!-- <span class="error">* <?php //echo isset($_SESSION['passwordErr']) ? $_SESSION['passwordErr'] :'';?></span> -->
              <div id="errMsg">

</div>

                 <!-- <input type="submit" name="login" value="Submit" onclick="return promptPassword()">  --> 
                 <input type="submit"  name="login" value="Submit" id="login-submit" onclick="javascript:validate()">
            <input type="checkbox" checked="checked"> Remember me   
            <button type="button" class="cancelbtn"> Cancel</button>   
            Forgot <a href=""> password? </a>   <br>
							<b style=color:red; id="shake" ><?php if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
echo "Wrong Username and Password";
}
?></b>

        </div>
		
    </form>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="alert.js" charset="utf-8"></script>
</body>     
</html>  