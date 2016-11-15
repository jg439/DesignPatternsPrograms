<?php

include_once('MoviePrototype.php');
include_once('BookPrototype.php');
include_once('Book.php');
include_once('BookDecorator.php');

interface StrategyOfInterface {
  public function strategy();
}
class StrategyA implements StrategyOfInterface {
  public function strategy() {
    echo " Doing a book marathon:\n";
    echo "<br>";
    $hpProto = new HPBookPrototype();
    $book1 = clone $hpProto;



    $book1->setTitle('Harry Potter and the Sorcerers Stone');
    echo ('Book 1 topic: '.$book1->getTopic());
    echo "<br>";
    echo ('Book 1 title: '.$book1->getTitle());
    echo "<br>";
    $book = new Ebook();
    $ebook = new EbookVersion($book);
    echo ('Book version: '.$ebook -> version());

     echo "<br>";
    $book2 = clone $hpProto;
    $book2->setTitle('Harry Potter and the Chamber of Secrets');
    echo('Book 2 topic: '.$book2->getTopic());
    echo "<br>";
    echo('Book 2 title: '.$book2->getTitle());
    echo "<br>";
    
    $book3 = clone $hpProto;
    $book3->setTitle('Harry Potter and the Prisoner of Azkaban');
    echo('Book 3 topic: '.$book3->getTopic());
    echo "<br>";
    echo('Book 3 title: '.$book3->getTitle());
    echo "<br>";
  }
}
class StrategyB implements StrategyOfInterface {
  public function strategy() {
    echo "Doing a movie marathon \n";
    echo "<br>";
    $lrProto = new LRMoviePrototype();
    $movie1 = clone $lrProto;
    $movie1->setTitle('The Fellowship of the Ring');

    echo('Movie 1 topic: '.$movie1->getTopic());
    echo "<br>";
    echo('Movie 1 title: '.$movie1->getTitle());
    echo "<br>";
    echo('');

    $movie2 = clone $lrProto;
    $movie2->setTitle('The Two Towers');

    echo('Movie 2 topic: '.$movie2->getTopic());
      echo "<br>";
    echo('Movie 2 title: '.$movie2->getTitle());
      echo "<br>";
    echo('');

    $movie3 = clone $lrProto;
    $movie3->setTitle('The Return of the King');

    echo('Movie 3 topic: '.$movie3->getTopic());
      echo "<br>";
    echo('Movie 3 title: '.$movie3->getTitle());
      echo "<br>";

  }
}


class Entertainment{
  private $m_strategy;
  function __construct( $mode ) {
    switch($mode) {
      case 'Book Marathon':
        $this->m_strategy = new StrategyA();
        break;
      case 'Movie Marathon';
        $this->m_strategy = new StrategyB();
        break;

      default:
        error_log( 'recevied unknwon parameter.');
        break;
    }
  }
  public function entertain() {
    $this->m_strategy->strategy();
  }

}


?>
