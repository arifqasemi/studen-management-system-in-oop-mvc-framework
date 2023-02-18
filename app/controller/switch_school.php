<?php




class Switch_school  extends controller {



    public function index($id=''){

     
    
        Auth::switch_school($id);
            $this->redirect('home');
     
    }
}