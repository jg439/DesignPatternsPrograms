<?php

interface Car {
  function cost();
  function description();
}


class Megan implements Car {
    function cost()
    {
      return 20000;
    }

    function description ()
    {
      return "Megan";
    }
}


?>
