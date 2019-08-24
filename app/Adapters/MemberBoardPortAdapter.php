<?php

namespace App\Adapters;

use App\Ports\MemberBoardPort;

class MemberBoardPortAdapter implements MemberBoardPort
{

    private $name = '';
    private $position = '';

    function __construct($name, $position)
    {
        $this->name = $name;
        $this->position = $position;
    }

    function getName()
    {
        return $this->name;
    }

    function getPosition()
    {
        return $this->position;
    }
}
