<?php

abstract class BookPrototype {
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

 class HPBookPrototype extends BookPrototype {


    function __construct() {
        $this->topic = 'Harry Potter';
    }
    function __clone() {
    }
}




?>
