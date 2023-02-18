<?php


class Sign_up extends controller {



    public function index(){


      $mode = isset($_GET['mode'])?$_GET['mode'] : '';

      $error = array();
      if(count($_POST) >0){

        $user = new User();
        $error = array();
        if($user->validate($_POST)){
          $_POST['date']=date('Y-m-d H:m:s');
         $user->insert( $_POST);
         $redirect = $mode =='student'?'student':'users';
         if($redirect == 'student' && $redirect =='users'){
          $this->redirect($redirect);

         }else{
          $this->redirect('login');
         }
        }else{
          $error= $user->error;
        }
      }



      $this->view('sign_up',['error'=>$error,'mode'=>$mode]);

    }
}