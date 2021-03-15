<?php


$server="localhost";
$username="root";
$password="";
$dbname="dreamland";
 $conn = mysqli_connect ($server , $username , $password,"$dbname") ;
 if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
  

?>