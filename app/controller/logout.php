<?php




class Logout  extends controller {



    public function index(){

     
    
        Auth::logout();
            $this->redirect('login');
     
    }
}