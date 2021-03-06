<?php

namespace App\Adapters;

// use App\Ports\HallPort;
use App\Ports\PhotoSnapPort;

class HallAdapter implements PhotoSnapPort
{

    private $name = '';
    private $image = '';
    private $description = '';

    function __construct($name, $image, $description)
    {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
    }

    function getName()
    {
        return $this->name;
    }

    function getImage()
    {
        return $this->image;
    }

    function getDescription()
    {
        return $this->description;
    }
}
