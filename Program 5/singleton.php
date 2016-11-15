<?php

class keyUser {

  private static $instance = NULL;
  private static $isBorrowed = FALSE;
  private $userDescription;

  public static function borrowing() {
    if(FALSE == self::$isBorrowed) {
      if(NULL == self::$instance) {
        self::$instance = new keyUser();
      }
      self::$isBorrowed = TRUE;
      return self::$instance;
    } else {
      return NULL;
    }
  }

  public function returning(keyUser $keyUser) {
    self::$isBorrowed = FALSE;
  }

  public function getuserDescription() {
    return $this->userDescription;
  }

  public function setuserDescription($userDescription) {
    $this->userDescription = $userDescription;
  }

  protected function __construct() {}
  private function __clone() {}
  private function __wakeup() {}
}
class keyUserSubject {

  private $keyUser;
  private $borrowed = FALSE;

  function __construct() {}

  function getuserDescription() {
    if(TRUE == $this->borrowed) {
      return $this->keyUser->getuserDescription();
    } else {
      return "Borrowing keys";
    }
  }

  function borrowing($userDescription) {
    $this->keyUser = keyUser::borrowing();
    if($this->keyUser == NULL) {
      $this->borrowing = FALSE;
    } else {
      $this->borrowing = TRUE;
      $this->keyUser->setuserDescription($userDescription);
    }
  }

  function returning() {
    $this->keyUser->returning($this->keyUser);
  }
}

?>
