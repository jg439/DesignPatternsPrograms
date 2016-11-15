<html>
  <head>

    <meta charset="UTF-8">
    <title>Key Borrower and Alert</title>

    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel="stylesheet" href="css/styles.css">

  </head>



  <body>

    <div class="login-card">


<?php
////////////////////////////////////
// Program 5                      //
// @author Julia Garcia           //
//Design Patterns Used:           //
// Singleton, Observer.           //
//Program Function:               //
// Creating a keyUser singleton   //
// that allows just one borrower  //
// to get the keys. When the      //
// borrower gets the keys, then the //
//observer will send a key alert. //
////////////////////////////////////
include_once ('singleton.php');
include_once ('observer.php');

$observer = new PatternObserver();
$subject = new PatternSubject();
$subject->attach($observer);

$keyuser1 = new keyuserSubject();
$keyuser2 = new keyuserSubject();
$keyuser1->borrowing('Key User 1');
echo 'Key User 1 is trying to borrow the keys';
echo BR;
$userDescription = $keyuser1->getuserDescription();

$subject->updateFavorites($userDescription);
echo BR;
echo BR;
$keyuser1->returning();
echo ' Key User 1 has turned back the keys';
echo BR;
echo BR;
$keyuser2->borrowing('User2');
echo 'Key User 2 is trying to borrow the keys';
echo BR;
$userDescription = $keyuser2->getuserDescription();
$subject->updateFavorites($userDescription);
echo BR;
echo BR;

?>

  </div>
</body>

</html>
