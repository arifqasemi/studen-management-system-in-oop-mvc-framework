<?php




class Home  extends controller {



    public function index(){

    
    
        if(!Auth::check()){
            $this->redirect('login');
        }
    //    echo $_SESSION['user'];

    $school = Auth::getSchool_id();

   
     
        echo $this->view('home');
    }
}