<?php

namespace App\Adapters;

use App\Ports\IndexDataPort;
use App\Ports\PhotoSnapPort;
use App\Ports\MemberBoardPort;

class IndexDataPortAdapter implements IndexDataPort
{

    private $halls = [];
    private $interiors = [];
    private $exteriors = [];
    private $boardMembers = [];


    function addHall(PhotoSnapPort $photoSnapPort)
    {
        $this->halls[] = $photoSnapPort;
    }

    function getHalls()
    {
        return $this->halls;
    }

    function addInterior(PhotoSnapPort $photoSnapPort)
    {
        $this->interiors[] = $photoSnapPort;
    }

    function getInteriors()
    {
        return $this->interiors;
    }

    function addExterior(PhotoSnapPort $photoSnapPort)
    {
        $this->exteriors[] = $photoSnapPort;
    }

    function getExteriors()
    {
        return $this->exteriors;
    }

    function addBoardOfMembers(MemberBoardPort $memberBoardPort)
    {
        $this->boardMembers[] = $memberBoardPort;
    }

    function getBoardOfMembers()
    {
        return $this->boardMembers;
    }
}
