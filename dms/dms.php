<?php
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST,'lastName');
    $contact = filter_input(INPUT_POST,'contact');
    $email = filter_input(INPUT_POST,'email');
    $product = filter_input(INPUT_POST,'product');
    $amount = filter_input(INPUT_POST,'amount');
    $size = filter_input(INPUT_POST,'size');
    $deliveryAddress = filter_input(INPUT_POST,'deliveryAddress');

    $conn = new mysqli('localhost', 'root', '', 'orderdetails');
    if(empty($firstName)){
      echo "All Fields are Required" ;
      die();
      }
      if(empty($lastName)){
      echo "All Fields are Required" ;
      die();
      
      }
      if(empty($contact)){
      echo "All Fields are Required" ;
      die();
      }
      if(empty($email)){
      echo "All Fields are Required" ;
      die();
      }
      if(empty($product)){
        echo "All Fields are Required" ;
        die();
      }
      if(empty($amount)){
      echo "All Fields are Required" ;
      die();
      }
      if(empty($size)){
        echo "All Fields are Required" ;
        die();
      }
      if(empty($deliveryAddress)){
        echo "All Fields are Required" ;
        die();
      }

    if(!$conn) {
      die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO order(firstName, lastName, contact, email, product, amount, size, deliveryAddress)
      VALUES ('$firstName', '$lastName', '$contact', '$email', '$product', '$amount', '$size', '$deliveryAddress')";
      
      if(mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);
?>