<?php 
namespace App\Ports;

interface PhotoSnapPort{
 
    function getName();
    function getImage();
    function getDescription();    

}