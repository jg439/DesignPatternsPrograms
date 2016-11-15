
<?php

abstract class AbstractSubject {
  abstract function attach(AbstractObserver $observer_in);
  abstract function detach(AbstractObserver $observer_in);

  abstract function notify();
}
abstract class AbstractObserver {
  abstract function update(AbstractSubject $subject);
}
//
class PatternObserver extends AbstractObserver {
  public function __construct() {
  }
  public function update(Abstractsubject $subject) {
    echo BR.BR;
    echo '*Key Borrowed Alert*'.BR;
    echo ' Key Borrower: '.$subject->getFavorites().BR;
    echo '*Key Borrowed Alert Over*'.BR;
  }
}
class PatternSubject extends AbstractSubject {
  private $favoritePatterns = NULL;
  private $observers = array();
  function __construct() {
  }
  function attach(AbstractObserver $observer_in) {
    $this->observers[] = $observer_in;
  }
  function detach(AbstractObserver $observer_in) {
    foreach($this->observers as $okey => $oval) {
      if ($oval == $observer_in) {
        unset($this->observers[$okey]);
      }
    }
  }

  function notify() {
    foreach($this->observers as $obs) {
      $obs->update($this);
    }
  }
  function updateFavorites($newFavorites) {
    $this->favorites = $newFavorites;
    $this->notify();
  }
  function getFavorites() {
    return $this->favorites;
  }
}
define ('BR', '<'.'BR'.'>');
?>
