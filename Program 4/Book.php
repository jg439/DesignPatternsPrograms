<?php

interface Book {
  function version();

}


class Ebook implements Book {

    function version()
    {
      return " Ebook version";
    }
}


?>
