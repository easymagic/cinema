<?php

namespace App\Http\Controllers;

use App\Adapters\IndexDataPortAdapter;
use Illuminate\Http\Request;
use App\BusinessLogic\IndexPageLogic;

class HomeController extends Controller
{
    //

    function index(
        IndexPageLogic $indexPageLogic,
        IndexDataPortAdapter $indexDataPortAdapter,
        Request $request
    ) {

        $data = $indexPageLogic->getIndexData($indexDataPortAdapter);

        return view('home.home',$data);
        
    }
}
