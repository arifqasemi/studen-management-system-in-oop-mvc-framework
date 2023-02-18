<?php




class Student  extends controller {



    public function index(){
        $error = array();
        $user = new User();

        $school_id= Auth::getSchool_id();
        // $data = $user->findAll();
        $classe_student = new Classe_student();
        $data =$classe_student->query("select * from classe_student where  school_id ='$school_id'");
        $active = isset($_GET['active'])? $_GET['active'] :'';

   
     
        echo $this->view('student',['row'=>$data,'error'=>$error,'active'=>$active]);
    }
}