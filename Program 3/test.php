<html>
  <head>

    <meta charset="UTF-8">
    <title>CD Author Tracker</title>

    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel="stylesheet" href="css/styles.css">

  </head>



  <body>

    <div class="login-card">
      <p> Welcome to our page, now you can either check Taylor Swift's or Arctic Monkeys available tracks!!</p>




<?php

////////////////////////////////////
// Program 3                      //
// @author Julia Garcia           //
//Design Patterns Used:           //
// Builder, factory, strategy     //
//Program Function:               //
// Creates two different CD arrays//
// one of them with factory, and  //
//the other one with builder.     //
//The program also uses strategy to //
//choose the CD array              //
////////////////////////////////////

//--------------
//Combining builder and factory to create
//an array of tracks from different authors.
//--------------
include_once('CDinterface.php');
include_once('builder.php');
include_once('factory.php');
include_once('track.php');

?>
<p> Please, introduce the author that you would like to see </p>

        <form action="action_page.php" method = "post">
          Author Name:
          <input type="text" name="AuthorName" placeholder = "Author Name">
        </div>
  </body>

  </html>
