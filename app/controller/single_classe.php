<?php




class Single_classe extends controller {



    public function index($id){
       
          $error = array();
        if(!Auth::check()){
            $this->redirect('login');
        }
        $classe= new classes_model();
        $row= $classe->findSingle('classe_id',$id);
        // print_r($data);

        $result =false;
        $active = isset($_GET['active'])? $_GET['active'] :'lecturers';
        $classe_lecturer = new Classe_lecturer();

    //     if($active == 'add_lecturer' && count($_POST)>0){
    //     if(isset($_POST['classe'])){
    //         if(trim($_POST['classe'] !=='')){
    //         $user = new User();
    //         if(isset($_POST['classe'])){
    //         $name = '%'.trim($_POST['classe']).'%';
    //         $query ="select * from users where (firstname like :fname) && rank ='lecturer'";
    //         $result = $user->query($query,['fname'=>$name]);
    //         } else{
    //         $error[] ="please search a name";
    //     }
    //     }
            
    //     }
       
    // }
        if($active == 'lecturers'){
     


            $query = "select * from classe_lecturer where classeId =:classeId && disabled=0";
            $lecturer = $classe_lecturer->query($query,['classeId'=>$id]);
            $data['lecturer']= $lecturer;
          

        }


       
       
    


    // if(isset($_POST['selected'])){
    //     $arr['classeId']=$id;
    //     $query = "select * from classe_lecturer where classeId =:classeId";

       
    //     if($classe_lecturer->query($query,$arr)){
    //         $error[] ="the lecturer has been already added";
    //     }else{
    //          $arr['classeId'] = $id;
    //         $arr['date'] = date('Y-m-d H:i:s');
    //         $arr['disabled']=0;
    //         $classe_lecturer->insert($arr);


    //     }

       
    // }
 
      
    $data['row']=$result;
    $data['row1']=$row;
    $data['active']=$active;
    $data['error']=$error;


        echo $this->view('single_classe',$data);
    }




    public function add($id=''){
        $error = array();
        if(!Auth::check()){
            $this->redirect('login');
        }
        $classe= new classes_model();
        $row= $classe->findSingle('classe_id',$id);
        // print_r($data);

        $result =false;
        $active = isset($_GET['active'])? $_GET['active'] :'lecturers';
        $classe_lecturer = new Classe_lecturer();

        if($active == 'add_lecturer' && count($_POST)>0){
        if(isset($_POST['classe'])){
            if(trim($_POST['classe'] !=='')){
            $user = new User();
            if(isset($_POST['classe'])){
            $name = '%'.trim($_POST['classe']).'%';
            $query ="select * from users where (firstname like :fname) && rank ='lecturer'";
            $result = $user->query($query,['fname'=>$name]);
            }
        }
            
        }
       
    }

    if(isset($_POST['selected'])){
        $arr['user_id']=$_POST['selected'];
        $query = "select * from classe_lecturer where classeId =:classeId";

       
        // if($classe_lecturer->query($query,$arr)){
        //     $error[] ="the lecturer has been already added";
        // }else{
            $arr['classeId']=$id;
             $arr['user_id'] = $_POST['selected'];
            $arr['date'] = date('Y-m-d H:i:s');
            $arr['disabled']=0;
            $classe_lecturer->insert($arr);


        // }

       
    }
 
  

            $data['row']=$result;
            $data['row1']=$row;
            $data['active']=$active;
            $data['error']=$error;


                echo $this->view('single_classe',$data);
}






public function viewlecturer($id=''){
    $error = array();

    $active = isset($_GET['active'])? $_GET['active'] :'lecturers';

        $result =false;


            $classe= new classes_model();
            $row= $classe->findSingle('classe_id',$id);

            $classe_lecturer = new Classe_lecturer();

            if($active == 'lecturers'){

                $query = "select * from classe_lecturer where classeId =:classeId && disabled=0";
                $lecturer = $classe_lecturer->query($query,['classeId'=>$id]);
                $data['lecturer']= $lecturer;
            
            }
            
            // $data['row']=$result;
            $data['row1']=$row;
            $data['active']=$active;
            $data['error']=$error;


    echo $this->view('single_classe',$data);

}


public function removelec($id=''){
         if(isset($_POST['user_id'])){
          $user_id = $_POST['user_id'];

            $classe_lecturer = new Classe_lecturer();
            $active = isset($_GET['active'])? $_GET['active'] :'remove_lecturer';
            $classe= new classes_model();
            $row= $classe->findSingle('classe_id',$id);


            $check = $classe_lecturer->where('user_id', $_POST['user_id']);
            if(is_array($check)){
                $arr['disabled'] = 1;
                $classe_lecturer->update($check[0]->id,$arr);
            }
      

              }
              $this->viewlecturer($id);

  
}



public function viewStudent($id=''){
    $error = array();
  
    $classe_student = new Classe_student();
    $classe= new classes_model();

    $row= $classe->findSingle('classe_id',$id);
    $active = isset($_GET['active'])? $_GET['active'] :'students';

    if($active == 'students'){
        $query = "select * from classe_student where classe_id =:classe_id && disabled =0";
        $student = $classe_student->query($query,['classe_id'=>$id]);
        $data['row']= $student;

      
    }
    if(isset($_POST['add'])){
                $classe_student = new Classe_student();

                // $arr['classe_id'] = $id;
                // $query = "select * from classe_student where classe_id =:classe_id";
                // if($classe_student->query($query,$arr)){
                //     $error[] ="the student has been already added";
                // }else{
                    $arr['school_id']= Auth::getSchool_id();
                    $arr['user_id']= $_POST['add'];
                     $arr['classe_id'] = $id;
                    $arr['date'] = date('Y-m-d H:i:s');
                    $arr['disabled']=0;
                   $res =  $classe_student->insert($arr);
        
                // }
       
      
    }
    $data['row1']=$row;
    $data['active']=$active;
    $data['error']=$error;
    echo $this->view('single_classe',$data);

}


public function addStudent($id=""){
   
        $error = array();
    if(isset($_POST['student']) && trim($_POST['student'] !=='')){
    

      
            $user = new User();
            $name = '%'.trim($_POST['student']).'%';
            $query ="select * from users where (firstname like :fname) && rank ='student'";
            $result = $user->query($query,['fname'=>$name]);               
                $data['row']=$result;

        }else{
            $error []='please type a name';
        }
    $active = 'add_student';
    $data['classe_id']= $id;
    $data['active']=$active;
    $data['error']=$error;

    echo $this->view('includes/single_user',$data);




 
}


public function removeStudent($id=""){

    if(isset($_POST['user_id'])){
        $user_id = $_POST['user_id'];
        // $classe_id = $_POST['classe_id'];


        $classe_student = new Classe_student();
        // $classe= new classes_model();
        // $row= $classe->findSingle('classe_id',$classe_id);


        $check = $classe_student->where('user_id',$user_id);
        if(is_array($check)){
            $arr['disabled'] = 1;
            $classe_student->update($check[0]->id,$arr);
        }


            }
        
}





}