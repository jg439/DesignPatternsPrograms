<?php
include_once('KeyFactory.php');

abstract class KeyFeature implements Factory{

  protected $key;

  function __construct(Key $key)
  {
    $this->key = $key;
  }

  abstract function description();

  abstract function securityLevel();
}


class KeyDecorator extends KeyFeature{
    function securityLevel ()
    {
        return $this->key->securityLevel()+1;
    }

    function description()
    {
        return $this->car->description();
    }
}




 ?>
