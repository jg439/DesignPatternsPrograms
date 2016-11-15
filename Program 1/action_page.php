<html>
<head>

  <meta charset="UTF-8">
  <title>Car Shop</title>

  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel="stylesheet" href="css/styles.css">

</head>


<body>
<div class="login-card">
  <h3> Payment Method Selected </h3>

<?php

include_once('car.php');
include_once('carDecorator.php');
include_once('strategyCost.php');

		print_r($_POST["payment"]);
    echo "<br>";
    if ($_POST["payment"] == 'Cash'){
      $payment = new Payment( 'Cash' );
      $payment->pay();
      echo "\n";
    }

    elseif($_POST["payment"] == 'Paypal'){
        $payment = new Payment( 'Paypal' );
        $payment->pay();
        echo "\n";
    }

 elseif($_POST["payment"] == 'Credit Card'){
   $payment = new Payment( 'CreditCard' );
   $payment->pay();
   echo "\n";
 }
 else{
   echo 'You cannot use that payment method';
 }

?>
</div>

</body>
<html>
