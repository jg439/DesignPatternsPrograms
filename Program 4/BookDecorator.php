<?php
include_once('Book.php');

abstract class BookVersion implements Book {
  protected $book;

  function __construct(Book $book)
  {
    $this->book = $book;
  }

  abstract function version();
}


class EbookVersion extends BookVersion {

    function version()
    {
        return $this->book->version();
    }
}


?>
