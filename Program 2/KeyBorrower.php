<?php
include_once('KeySingleton.php');


 Class KeyBorrower {


   private $borrowedKey;
   private $haveKey = FALSE;


   function __construct() {
   }


   function getNameAndOwner() {
     if (TRUE == $this->haveKey) {
       return $this->borrowedKey->getNameAndOwner();
     } else {
       return "I am very sorry but someone else took the keys already";
     }
   }


   function borrowKey() {
     $this->borrowedKey = KeySingleton::borrowKey();
     if ($this->borrowedKey == NULL) {
       $this->haveKey = FALSE;
     } else {
       $this->haveKey = TRUE;
     }
   }


   function returnKey() {
     $this->borrowedKey->returnKey($this->borrowedKey);
   }


 }

 ?>
