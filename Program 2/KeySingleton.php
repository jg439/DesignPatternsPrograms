<?php
class KeySingleton {


    private $owner = 'Billy McDermott';
    private $name  = 'Bloomberg Terminal Keys';
    private static $key = NULL;
    private static $isLoanedOut = FALSE;


    private function __construct() {
    }


    static function borrowKey() {
      if (FALSE == self::$isLoanedOut) {
        if (NULL == self::$key) {
           self::$key = new KeySingleton();
        }
        self::$isLoanedOut = TRUE;
        return self::$key;
      } else {
        return NULL;
      }
    }


    function returnKey(KeySingleton $keyReturned) {
        self::$isLoanedOut = FALSE;
    }


    function getOwner() {return $this->owner;}


    function getName() {return $this->name;}


    function getNameAndOwner() {
      return $this->getName() . ' the owner of the keys is ' . $this->getOwner();
    }


  }


?>
