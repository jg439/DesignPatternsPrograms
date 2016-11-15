<?php
include_once('car.php');

abstract class CarFeature implements Car {
  protected $car;

  function __construct(Car $car)
  {
    $this->car = $car;
  }

  abstract function cost();

  abstract function description();
}


class FancyColor extends CarFeature {
    function cost ()
    {
        return $this->car->cost() + 1050;
    }

    function description()
    {
        return $this->car->description() . ",  fancy color";
    }
}

?>
