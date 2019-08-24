<?php 
namespace App\Ports;

use App\Ports\PhotoSnapPort;

interface IndexDataPort{
 
     function addHall(PhotoSnapPort $photoSnapPort);
     function getHalls();

     function addInterior(PhotoSnapPort $photoSnapPort);
     function getInteriors();

     function addExterior(PhotoSnapPort $photoSnapPort);
     function getExteriors();

     function addBoardOfMembers(MemberBoardPort $memberBoardPort);
     function getBoardOfMembers();

}