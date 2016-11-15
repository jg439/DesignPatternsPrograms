<?php

include_once('car.php');
include_once('carDecorator.php');

interface StrategyOfInterface {
  public function strategy();
}
class StrategyA implements StrategyOfInterface {
  public function strategy() {
    echo "Paying with cash\n";
  }
}
class StrategyB implements StrategyOfInterface {
  public function strategy() {
    echo "Paying with Paypal\n";
  }
}
class StrategyC implements StrategyOfInterface {
  public function strategy() {
    echo "Paying with Credit Card\n";
  }
}

class Payment{
  private $m_strategy;
  function __construct( $mode ) {
    switch($mode) {
      case 'Cash':
        $this->m_strategy = new StrategyA();
        break;
      case 'Paypal';
        $this->m_strategy = new StrategyB();
        break;
      case 'CreditCard';
        $this->m_strategy = new StrategyC();
        break;
      default:
        error_log( 'recevied unknwon parameter.');
        break;
    }
  }
  public function pay() {
    $this->m_strategy->strategy();
  }

}


?>
