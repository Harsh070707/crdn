<!DOCTYPE html>
<html>
<head>

	  <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Electricks</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your projects -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
	<title></title>
</head>
<body>
	<?php
// including the database connection file
include("config.php");
if(isset($_POST['submit'])){

    $prod_name=$_POST['prod_name'];
    $prod_series=$_POST['prod_series'];
    $prod_desc=$_POST['prod_desc'];
    $prod_qty=$_POST['prod_qty'];
    $prod_cost=$_POST['prod_cost'];
    $prod_price=$_POST['prod_price'];
   
    $prod_serial=$_POST['prod_serial'];

    move_uploaded_file($_FILES["prod_pic1"]["tmp_name"],"./servererrorpage/" . $_FILES["prod_pic1"]["name"]);         
    $prod_pic1=$_FILES["prod_pic1"]["name"];
    move_uploaded_file($_FILES["prod_pic2"]["tmp_name"],"./servererrorpage/" . $_FILES["prod_pic2"]["name"]);         
    $prod_pic2=$_FILES["prod_pic2"]["name"];
    move_uploaded_file($_FILES["prod_pic3"]["tmp_name"],"./servererrorpage/" . $_FILES["prod_pic3"]["name"]);         
    $prod_pic3=$_FILES["prod_pic3"]["name"];

   

        $query = "INSERT INTO products (prod_name, prod_desc, prod_qty, prod_cost, prod_price, prod_serial, prod_pic1, prod_pic2, prod_pic3) 
        VALUES ('$prod_name','$prod_desc','$prod_qty','$prod_cost','$prod_price','$prod_serial','$prod_pic1','$prod_pic2','$prod_pic3')";  

        $result = mysqli_query($conn,$query);
            
       
        
    }

?>
<div class="panel panel-success panel-size-custom">
          <div class="panel-heading"><h3>Add Purchased Products</h3></div>

          <div class="panel-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form group">
                    <label for="prod_name">Product Name:</label>
                    <input type="text" class="form-control" id="prod_name" name="prod_name" placeholder="Product Name"/>
                    <label for="prod_series">Product Series:</label>
                    <input type="text" class="form-control" id="prod_series" name="prod_series" placeholder="Product Series"/>
                    <label for="prod_desc">Product Description:</label>
                    <input type="text" class="form-control" id="prod_desc" name="prod_desc" placeholder="Product Description"/>
                    <label for="prod_cost">Product Cost (Php):</label>
                    <input type="text" class="form-control" id="prod_cost" name="prod_cost" placeholder="Value e.g. 123.4"/>
                    <label for="prod_price">Product Price (Php):</label>
                    <input type="text" class="form-control" id="prod_price" name="prod_price" placeholder="Value e.g. 123.4"/>
                    <label for="prod_qty">Quantity:</label>
                    <input type="text" class="form-control" id="prod_qty" name="prod_qty" placeholder="Value e.g. 123"/>

                    <div class="form-group">
                        
                        
                        <label for="prod_pic1">Picture 1 (Front View):</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="prod_pic1" name="prod_pic1">  
                        </div>
                        <label for="prod_pic2">Picture 2 (Side View):</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="prod_pic2" name="prod_pic2">  
                        </div>
                        <label for="prod_pic3">Picture 3 (Specifications):</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="prod_pic3" name="prod_pic3">  
                        </div>

                    </div>

                    <label for="prod_serial">Serial:</label>
                    <input type="text" class="form-control" id="prod_serial" name="prod_serial" placeholder="Value e.g. 1234"/>

                </div>
                <br>

                <div class="form group">
                    <button type="submit" class="btn btn-success btn-round" id="submit" name="submit">
                    <i class="now-ui-icons ui-1_check"></i> Add Product
                    </button> 
                </div>
            </form>
          </div>
        </div> 
</body>
</html>