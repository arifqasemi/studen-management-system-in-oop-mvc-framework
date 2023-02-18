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


    public function model($model){


        if(file_exists("../app/model/".$model.".php")){

            require("../app/model/".$model.".php");
            return $model = new $model();
        }
    }


    public function redirect($link){

        header('location:'.ASSET. "/". trim($link,"/"));
        die;
    }
}