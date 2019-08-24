<?php 
namespace App\BusinessLogic;

use App\Ports\IndexDataPort;
use App\Adapters\PhotoSnapPortAdapter;
use App\Adapters\MemberBoardPortAdapter;

class IndexPageLogic{

  
     
     function getIndexData(IndexDataPort $indexDataPort){

       //Adding halls
      //  $indexDataPort->addHall(new PhotoSnapPortAdapter('name','3','description'));
      $indexDataPort->addHall(new PhotoSnapPortAdapter('name','init.jpg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','4.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','5.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','6.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','7.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','8.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','9.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','10.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','11.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','12.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','13.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','14.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','15.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','16.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','17.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','18.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','19.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','20.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','21.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','22.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','23.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','24.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','25.jpeg','description'));
       $indexDataPort->addHall(new PhotoSnapPortAdapter('name','26.jpeg','description'));


       $indexDataPort->addBoardOfMembers(new MemberBoardPortAdapter('Michael orie','I.T'));
       $indexDataPort->addBoardOfMembers(new MemberBoardPortAdapter('Adaeze c. orie','Human Resources'));
       $indexDataPort->addBoardOfMembers(new MemberBoardPortAdapter('Anita E. Orie','marketing'));

       $indexDataPort->addInterior(new PhotoSnapPortAdapter('name','13.jpeg','description'));
       $indexDataPort->addInterior(new PhotoSnapPortAdapter('name','14.jpeg','description'));
       $indexDataPort->addInterior(new PhotoSnapPortAdapter('name','15.jpeg','description'));
       $indexDataPort->addInterior(new PhotoSnapPortAdapter('name','16.jpeg','description'));
       $indexDataPort->addInterior(new PhotoSnapPortAdapter('name','17.jpeg','description'));
      //  $indexDataPort->addInterior(new PhotoSnapPortAdapter('name','18','description'));
       $indexDataPort->addInterior(new PhotoSnapPortAdapter('name','19.jpeg','description'));
       $indexDataPort->addInterior(new PhotoSnapPortAdapter('name','20.jpeg','description'));


        $data = [
            'halls'=>$indexDataPort->getHalls(),
            'interiors'=>$indexDataPort->getInteriors(),
            // 'exteriors'=>$indexDataPort->getExteriors(),
            'boardOfMembers'=>$indexDataPort->getBoardOfMembers()
        ];

        return $data;
     }
 
     


}
