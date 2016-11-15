<?php

include_once('builder.php');
include_once('factory.php');
include_once('track.php');

interface CDInterface
{
    public function setTitle($title);
    public function setBand($band);
    public function addTrack(SongTrack $track);
}

abstract class CD implements CDInterface
{
    public $title = '';
    public $band = '';
    public $tracks = array();

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setBand($band)
    {
        $this->band = $band;
    }

    public function addTrack(SongTrack $track)
    {
        $this->tracks[] = $track->getName();
    }
}

// Does not overwrite any CD attributes or methods
class StandardCD extends CD {}

// Overwrites the constructor
class EnhancedCD extends CD
{
    public function addDataTrack(DataTrack $track)
    {
        array_unshift($this->tracks, $track->getName());
    }
}

?>
