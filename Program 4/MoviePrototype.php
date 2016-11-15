<?php

abstract class MoviePrototype {
    protected $title;
    protected $topic;
    abstract function __clone();
    function getTitle() {
        return $this->title;
    }
    function setTitle($titleIn) {
        $this->title = $titleIn;
    }
    function getTopic() {
        return $this->topic;
    }
}

class LRMoviePrototype extends MoviePrototype {
    function __construct() {
        $this->topic = 'The Lord of the Rings';
    }
    function __clone() {
    }
}



  

?>
