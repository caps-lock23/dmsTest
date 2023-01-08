<?php 
    include('./dms.php');
?>

<?php
  if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {  
        echo 'We don\'t have mysqli!!!';  
 } else {  
     echo 'mysqli is installed';
 }
?>

<?php
    $conn = mysqli_connect('localhost', 'root', '', 'orderdetails');
    
    if(!$conn){
        echo 'Connection error ' . mysqli_connect_error();
    } else {
        echo 'Connection is good';
    }

//write query for all fields
    $sql = 'SELECT * FROM order';

//make query and get result
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <header><h1>Contrivance</h1></header>
    <form action = "dms.php" method="post">
        <div class="form-field">
            <label for="firstName">First Name</label>
            <input type="text" id = "firstName" name ="firstName"/>
        </div>
        <div class="form-field">
            <label for="lastName">Last Name</label>
            <input type="text" id = "lastName" name="lastName"/>
        </div>
        <div class="form-field">
            <label for="contact">Contact Number</label>
            <input type="text" id = "contact" name="contact"/>
        </div>
        <div class="form-field">
            <label for="email">Email</label>
            <input type="text" id = "email" name="email"/>
        </div>
        <div class="form-field">
            <label for="product">Product</label>
            <input type="text" id = "product" name="product"/>
        </div>
        <div class="form-field">
            <label for="amount">Amount</label>
            <input type="number" id = "amount" name="amount"/>
        </div>
        <div class="form-field">
            <label for="size">Size</label>
            <label for="small"><input type="radio" name="size" id="small">Small</label> 
            <label for="medium"><input type="radio" name="size" id="medium">Medium</label>
            <label for="large"><input type="radio" name="size" id="large">Large</label>
            <label for="xl"><input type="radio" name="size" id="xl">XL</label> 
        </div>
        <div class="form-field">
            <label for="deliveryAddress" name="deliveryAddress">Address</label>
            <input type="text" id = "deliveryAddress"/>
        </div>
        <input type = "submit">
    </form>
</body>
</html>