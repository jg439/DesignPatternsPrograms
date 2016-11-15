<?php
include_once('CDinterface.php');

interface Factory
{
    public function create($type);
}

class CDFactory implements Factory
{
    public function create($type)
    {
        $class = ucfirst(strtolower($type)) . 'CD';
        return new $class;
    }
}

?>
