<html>
<head>

  <meta charset="UTF-8">
  <title>Car Shop</title>

  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel="stylesheet" href="css/styles.css">

</head>


<body>
<div class="login-card">
  <h3> Marathon Selected </h3>

<?php

include_once('BookPrototype.php');
include_once('MoviePrototype.php');
include_once('strategy.php');

		print_r($_POST["marathon"]);
    echo "<br>";
    if ($_POST["marathon"] == 'Book'){
      $marathon = new Entertainment( 'Book Marathon' );
      $marathon->entertain();
      echo "\n";
    }

    elseif($_POST["marathon"] == 'Movie'){
        $marathon = new Entertainment( 'Movie Marathon' );
        $marathon->entertain();
        echo "\n";
    }


 else{
   echo 'You cannot do that marathon';
 }

?>
</div>

</body>
<html>
