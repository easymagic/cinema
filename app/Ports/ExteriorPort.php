<?php 
namespace App\Ports;

interface ExteriorPort{
    function getImage();
    function getDescription();
    function getName();
}