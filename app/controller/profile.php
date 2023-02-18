<?php




class Profile  extends controller {



    public function index($id=''){
        if(!Auth::check()){
            $this->redirect('login');
        }


        $id = trim($id == '') ? Auth::getId(): $id;
        $user= new User();
        $data= $user->findSingle('id',$id);
       $classe = new Classes_model();
       $result =$classe->where('user_id',$data[0]->userId);
        $active = isset($_GET['active'])? $_GET['active'] :'';
        // print_r($result);

        $data['profile']=$data[0];
        $data['active']=$active;
        $data['classe']=$result;

        echo $this->view('profile',$data);
    }
}