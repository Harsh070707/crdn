<!DOCTYPE html>
<?php include_once "config.php"; ?>
<html>

<head>
  <title>cart</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">

    //$(document).ready(function(){

       function passing_id(id){
//alert(id);    //$("$6+").on("change",function(){
    
    var quantity= $('#quant_'+id).val();
    //alert(quantity);
    var sval= $("#summa_"+id).text();
    //alert(sval);
    //console.log(sval);
     var iNum = parseInt(sval);
        var total= Number(iNum)*Number(quantity);
      //alert(total);

      $('#totalse'+id).html(total);

      var first=$('#totalse'+2).text();
      var iNum1 = parseInt(first);
      var second=$('#totalse'+7).text();
      var iNum2 = parseInt(second);
      var third=$('#totalse'+8).text();
      var iNum3 = parseInt(third);
     // alert(iNum2);

      var grandtotals=Number(iNum1)+Number(iNum2)+Number(iNum3);
     $('#grandtotal').html(grandtotals);




var els=[];
var firsts=$('#totalse'+id).text();
//alert(firsts);
var arr=els.push(firsts);
 // var sizeofarr=els.length;
  //alert(sizeofarr);
console.log(arr);

}





  </script>

 

</head>
<body>


<section>

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-8">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4 wish-list">
          <?php
                    include_once "config.php";
              
$sql="SELECT * FROM cart_item";

$result = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($result);


?>

                    
                 

          <h5 class="mb-4">Cart (<span><?php echo "$num_rows"; ?> </span> items) </h5>
           <?php
                    
                     $sqli="SELECT * FROM cart_item " ;
                      $getthem=mysqli_query($conn,$sqli);
                       while($results=mysqli_fetch_array($getthem)){
                       $rem=$results['cart_items'];
                    $getbase="SELECT * FROM products WHERE prod_id='$rem' ORDER BY  prod_name ASC ";
                    $get=mysqli_query($conn,$getbase);
                   while ($result=mysqli_fetch_array($get)){

                    ?>
             
          <div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid w-100"
                  src="./servererrorpage/<?php echo $result['prod_pic1'] ;?>">
               
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>

                  
                    <h5><?php echo $result['prod_name'] ?></h5>
                    <p class="mb-3 text-muted text-uppercase small">Shirt - blue</p>
                    <p class="mb-2 text-muted text-uppercase small">Color: blue</p>
                    <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                  </div>
                  <div>
                    <div class="def-number-input number-input safari_only mb-0 w-100">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                        class="minus decrease"></button>
                      <input class="quantity" min="0" id="quant_<?php echo $result['prod_id'] ;?>" name="quantity" value="1" type="number" onchange="passing_id(<?php echo $result['prod_id']?>)">
					          
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                        class="plus increase"></button>
                    </div>
                    <small id="passwordHelpBlock" class="form-text text-muted text-center">
                      (Note, 1 piece)
                    </small>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a href="view_deletedfile.php?prod_id=<?php echo $results['cart_items'] ?>" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                        class="fas fa-trash-alt mr-1"></i> Remove item </a>
                    <a href="#!" type="button" class="card-link-secondary small text-uppercase"><i
                        class="fas fa-heart mr-1"></i> Move to wish list </a>
                  </div>

                  <p class="mb-0"><span><strong class="summa" name="ttls[]" id="totalse<?php echo $result['prod_id'] ;?>"><?php echo $result['prod_price'] ?></strong></span></p class="mb-0">

                  <p class="mb-0" style="display: none"><span><strong class="summary" id="summa_<?php echo $result['prod_id'] ;?>"><?php echo $result['prod_price'] ?></strong></span></p class="mb-0">

                </div>
              </div>
            </div>
          </div>
          <?php 
          }  }
          ?>
     
          <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase, adding
            items to your cart does not mean booking them.</p>

        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-4">Expected shipping delivery</h5>

          <p class="mb-0"> Thu., 12.03. - Mon., 16.03.</p>
        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-4">We accept</h5>

          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
            alt="Visa">
          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
            alt="American Express">
          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
            alt="Mastercard">
          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
            alt="PayPal acceptance mark">
        </div>
      </div>
      <!-- Card -->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-3">The total amount of</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Temporary amount
              <span>$25.98</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              Shipping
              <span>Gratis</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>The total amount of</strong>
                <strong>
                  <p class="mb-0">(including VAT)</p>
                </strong>
              </div>
              <?php 
                    

                       $sqli="SELECT * FROM cart_item " ;
                      $getthem=mysqli_query($conn,$sqli);
                       while($results=mysqli_fetch_array($getthem)){
                       $rem=$results['cart_items'];
                    $getbase="SELECT * FROM products WHERE prod_id='$rem' ORDER BY  prod_name ASC ";
                    $get=mysqli_query($conn,$getbase);
                   while ($result=mysqli_fetch_array($get)){
                    $initialprice=$result['prod_price']; 
                    global $total;
                  $total=$total+$initialprice;

                   }
                 }
                 
               ?>
              <span><strong id="grandtotal"><?php echo $total ?></strong></span>
            </li>
          </ul>

          <button type="button" class="btn btn-primary btn-block">go to checkout</button>

        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
            aria-expanded="false" aria-controls="collapseExample">
            Add a discount code (optional)
            <span><i class="fas fa-chevron-down pt-1"></i></span>
          </a>

          <div class="collapse" id="collapseExample">
            <div class="mt-3">
              <div class="md-form md-outline mb-0">
                <input type="text" id="discount-code" class="form-control font-weight-light"
                  placeholder="Enter discount code">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card -->

    </div>
    <!--Grid column-->

  </div>
  <!-- Grid row -->

</section>
<!--Section: Block Content-->

</body>
</html>