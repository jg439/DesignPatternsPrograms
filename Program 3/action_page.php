<html>
<head>

  <meta charset="UTF-8">
  <title>Car Shop</title>

  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel="stylesheet" href="css/styles.css">

</head>


<body>
<div class="login-card">
  <h3> Author </h3>

<?php

include_once('builder.php');
include_once('CDinterface.php');
include_once('factory.php');
include_once('track.php');

$factory = new CDFactory;
		print_r($_POST["AuthorName"]);
    echo "<br>";
    if ($_POST["AuthorName"] == 'Taylor Swift'){

      // The factory returns a CD class based upon my
      // parameter to the create method.
      $emptyEnhancedCD = $factory->create('Enhanced');

      $emptyEnhancedCD->setTitle('22');
      $emptyEnhancedCD->setBand('Taylor Swift');

      $track_1 = new SongTrack('22');
      $track_2 = new SongTrack('I knew you were trouble');
      $track_3 = new SongTrack('All too well');

      foreach (array($track_1, $track_2, $track_3) as $track) {
          $emptyEnhancedCD->addTrack($track);
      }

      $data_track = new DataTrack;

      $emptyEnhancedCD->addDataTrack($data_track);

      var_dump($emptyEnhancedCD);
      echo "\n";
    }

    elseif($_POST["AuthorName"] == 'Arctic Monkeys'){
      // Instantiate the EnhancedCDBuilder and pass in the Factory
      // dependency.
      $builder = new EnhancedCDBuilder($factory);

      // Letting the builder know what attributes I want the
      // enhanced CD to to have.
      $builder->title('AM');
      $builder->band('Arctic Monkeys');
      $builder->tracks(
          array(
              new SongTrack('Are you mine?'),
              new SongTrack('Why you only call me when you are high?'),
              new SongTrack('Arabella'),
              new DataTrack,
          )
      );

      // Build it.
      // The EnhancedCDBuilder will always return an
      // EnhancedCD.
      $enhancedCD = $builder->build();

      var_dump($enhancedCD);
        echo "\n";
    }


 else{
   echo 'We do not have that author in our database';
 }

?>
</div>

</body>
<html>
