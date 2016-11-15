<?php

include_once('CDinterface.php');
include_once('factory.php');
include_once('track.php');

interface Builder
{
    public function build();
}

abstract class CDBuilder implements Builder
{
    protected $factory;
    protected $band;
    protected $title;
    protected $tracks;

    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
    }

    public function build()
    {
        // The class knows what type of CD it wants.
        $cd = $this->factory->create($this->getType());
        $cd->setTitle($this->title);
        $cd->setBand($this->band);

        if (is_array($this->tracks)) {
            foreach ($this->tracks as $track) {
                $cd->addTrack($track);
            }
        }
        return $cd;
    }

    public function band($band)
    {
        $this->band = $band;
    }

    public function title($title)
    {
        $this->title = $title;
    }

    public function tracks(array $tracks)
    {
        $this->tracks = $tracks;
    }

    // Returns the appropriate type of CD to produce
    abstract protected function getType();
}

class EnhancedCDBuilder extends CDBuilder
{
    public function build()
    {
        // The class knows what type of CD it wants.
        $cd = $this->factory->create($this->getType());
        $cd->setTitle($this->title);
        $cd->setBand($this->band);

        if (is_array($this->tracks)) {
            foreach ($this->tracks as $track) {
                if ($track instanceof DataTrack) {
                    $cd->addDataTrack($track);
                } else {
                    $cd->addTrack($track);
                }
            }
        }
        return $cd;

    }

    protected function getType()
    {
        return 'Enhanced';
    }
}

class StandardCDBuilder extends CDBuilder
{
    protected function getType()
    {
        return 'Standard';
    }
}

?>
