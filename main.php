<!DOCTYPE html>

<?php
session_start();
?>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style type="text/css">

    
  </style>

<!-- JS, Popper.js, and jQuery -->
	<title>Selection House</title>

</head>
<body >
<?php
if(isset($_SESSION["email"])) {
?>
  <section>
  <div class="container">
     
       <ul class="list-inline">

<li><a href="csvup.php">Home</a></li><li><?php echo $_SESSION["email"]; ?>
Click here to <a href="logout.php">Logout.</li>
<li>About Me</li>

<li><a href="checkoutbox.php">Cart<span class="badge badge-dark" id='lblCartCount'></span></a></li>


<li>Contact</li>
<li><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>




</ul>

</div>

</section>


<section>
 <div class="container py-5" >
  <div class="row mt-6" style="margin-top: 63px;">
                        
                        <?php
                        include_once "config.php";
                        $query = "SELECT * FROM products ORDER BY prod_name ASC";
                        $result = mysqli_query($conn,$query);
                        while($res = mysqli_fetch_array($result)) {  
                            $prod_id=$res['prod_id'];
                      
                    ?>   
                        <div class="col-md-3 mt-3">
                          <div class="card" style="width: 230px;"  >
                            
                               <a href="view_selectedfile.php?prod_id=<?php echo $res['prod_id'];?>" target="_blank" >
                                <img src="../servererrorpage/<?php echo $res['prod_pic1']; ?>" width="230px" height="200px" >
                              </a>
                               
                                <div class="card-body">
                            
                              <h5 class="card-title"><b><?php echo $res['prod_name'];?></b></h5>
                              <h6 ><a class="btn btn-success btn-round" title="Click for more details!" href="showcart.php?prod_id=<?php echo $res['prod_id']; ?>" name="submit"><i class="now-ui-icons gestures_tap-01"></i>Add to Cart</a>
                          
                                 <a class="btn btn-danger btn-round" title="Click for more details!" href="view_deletedfile.php?prod_id=<?php echo $res['prod_id'];?>" name="submit">Delete</a>
                                <br>
                                <medium class="text">Rs<?php echo $res['prod_price']; ?></medium></h6>
                            </div>

                            </div>
                         
                          </div>
                                 
                    <?php }?> 

                          </div>
                      </div>
	<!-- <div class="row row-cols-1 row-cols-md-4">
  <div class="col mb-4">
    <div class="card w-60">
      <img src="c06607554.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-primary">Go To Cart</a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card w-60">
      <img src="c06607554.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-primary">Go To Cart</a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card w-60">
      <img src="c06607554.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go To Cart</a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card w-60">
      <img src="c06607554.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-primary">Go To Cart</a>
      </div>
    </div>
  </div>
</div> -->

	<!-- 
	<div class="card" style="width: 18rem;">
  <img src="c06607554.png" class="card-img-top" alt="Hp">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go To Cart</a>
  </div>
</div> -->
</section>

<?php
}else echo "<h1>Please login first .</h1>";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="" charset="utf-8"></script>
</body>
</html>