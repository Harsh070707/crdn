<!DOCTYPE html>

<?php
include "config.php";
  $confid =$_GET['prod_id'];

     if (isset($_POST['submit'])) {
     	
     $sql="INSERT INTO cart_item(cart_items) VALUES ('$confid')";
     }
   
   
  