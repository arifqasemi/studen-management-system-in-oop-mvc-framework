<?php



class Controller{



    public function view($view,$data=array()){

        extract($data);
        if(file_exists("../app/view/".$view.".php")){

            require("../app/view/".$view.".php");
        }else{

           require "../app/view/404.php";
        }
    }


    // public function model($view){


    //     if(file_exists(".../app/view/".$view.".php")){

    //         require(".../app/view/".$view.".php");
    //     }else{

    //     //    require ".../app/view/404php";
    //     }
    // }
}