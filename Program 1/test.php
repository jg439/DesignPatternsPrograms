
<html>
  <head>

    <meta charset="UTF-8">
    <title>Car Shop</title>

    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel="stylesheet" href="css/styles.css">

  </head>



  <body>

    <div class="login-card">
      <p> Good morning, we are right now selling a new megan car</p>
      <p> Description: </p>

      <?php
        ////////////////////////////////////
        /* Program 1                      /*
        /* @author Julia Garcia           /*
        /* Design Patterns Used:          /*
        /* Decorator, strategy, factory   /*
        /*Program Function:               /*
        /*Creates a car adds a decorator  /*
        /*and asks the user for a payment /*
        /*method                          /*
        /**********************************/
      include_once('car.php');
      include_once('carDecorator.php');
      include_once('strategyCost.php');

      $basicCar = new Megan();

      $carFancyColor = new FancyColor($basicCar);


      echo $carFancyColor -> description();
      echo "<br>";


      echo " costs ";
      echo $carFancyColor -> cost();

      ?>

      <p> Please, introduce the payment method that you would like to use </p>

        <form action="action_page.php" method = "post">
          Payment:
          <input type="text" name="payment" placeholder = "PaymentType">
        </div>
  </body>

  </html>
