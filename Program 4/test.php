<html>
  <head>

    <meta charset="UTF-8">
    <title>Movie or Book Marathon</title>

    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel="stylesheet" href="css/styles.css">

  </head>



  <body>

    <div class="login-card">
      <p> Would you like to have a book marathon or a movie marathon?</p>

      <?php
      include_once('BookPrototype.php');
      include_once('MoviePrototype.php');
      include_once('strategy.php');

      ////////////////////////////////////
      /* Program 4                      /*
      /* @author Julia Garcia           /*
      /* Design Patterns Used:          /*
      /* Prototype, Strategy, Decorator /*
      /* Program Function:              /*
      /* Creates prototype of movies    /*
      /* and books, uses a decorator    /*
      /* to add a version of a book.    /*
      /* Uses strategy to determine     /*
      /* the marathon that the user     /*
      /* wants to see.                  /*
      /**********************************/



      ?>

      <p> Please, select the marathon that you wanna see tonight</p>

        <form action="action_page.php" method = "post">
          Movie/Book:
          <input type="text" name="marathon" placeholder = "MarathonType">
        </div>
  </body>

  </html>
