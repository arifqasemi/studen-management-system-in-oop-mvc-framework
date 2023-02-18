<?php




class Login extends controller {



    public function index(){
        $error = array();
        if(count($_POST) >0){
  
          $user = new User();
          $error = array();
        $row = $user->where('email',$_POST['email']);
          if(is_array($row)){
            if(password_verify($_POST['password'],$row[0]->password)){
              Auth::authontication($row[0]);
             if(Auth::access('admin') && Auth::access('super admin')){
              $this->redirect('home');
             }else{
              $this->redirect('schools');

             }

            }
           
         
          }

           $error['email'] ="The password or email is incorrect";
        }

        echo $this->view('login',['error'=>$error]);
    }
}