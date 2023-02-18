<?php




class Users  extends controller {



    public function index(){
       $error =array();
        $user = new User();

        $school_id= Auth::getSchool_id();
        $data = $user->findAll();
        // $data =$user->query("select * from users where school_id =:school_id" ,['school_id'=>$school_id] );

        $active = isset($_GET['active'])? $_GET['active'] :'';

     
        echo $this->view('users',['row'=>$data,'active'=>$active,'error'=>$error]);
    }
}