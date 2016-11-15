<?php

interface Track
{
    public function getName();
}

class SongTrack implements Track
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class DataTrack implements Track {

    public function getName()
    {
        return 'DATA TRACK';
    }
}

?>
