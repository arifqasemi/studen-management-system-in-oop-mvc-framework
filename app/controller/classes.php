<?php




class Classes  extends controller {


    public function index(){

        $crumb[] =['Dashboard',ASSET];
        $crumb[] =['Classes','classes'];
      
        $classes = new Classes_model();
         $school_id = Auth::getSchool_id();
         $data=$classes->query("select * from classes where school_id =:school_id",['school_id'=>$school_id]);
     
        echo $this->view('classes',['row'=>$data,'crumb'=>$crumb,'active'=>'classes']);
    }


    

    public function add(){

        // $user = new Maktab();

        $crumb[] =['Dashboard',ASSET];
        $crumb[] =['classes','classes'];
        $crumb[] =['add','classes'];

        $error = array();
        if(count($_POST) >0){
        //   print_r($_POST);
            $classes = new Classes_model();
            $error = array();
            if($classes->validate($_POST)){
              $_POST['date']=date('Y-m-d H:m:s');
              $_POST['school_id']= Auth::getSchool_id();
               $classes->insert($_POST);
             $this->redirect('classes');
            }else{
              $error= $classes->error;
            }
          }
     
        echo $this->view('add_classes',['error'=>$error,'crumb'=>$crumb]);
    }


    
    public function edit($id=null){

        $classes= new Classes_model();

        $crumb []=['Dashboard',ASSET];
        $crumb[] =['classes',ASSET.'classes'];
        $crumb[] =['edit','classes'];
        $error = array();
        if(count($_POST) >0){
        //   print_r($_POST);
            $error = array();
            if($classes->validate($_POST)){
              $_POST['date']=date('Y-m-d H:m:s');
               $classes->update($id,$_POST);
             $this->redirect('classes');
            }else{
              $error= $classes->error;
            }
          }
          $row = $classes->where('id',$id);
       if($row){
        $row = $row[0];
       }
     
        echo $this->view('edit_classes',['row'=>$row,'error'=>$error,'crumb'=>$crumb]);
    }



    public function delete($id=null){

        $classes = new Classes_model();

        $crumb[] =['Dashboard',ASSET];
        $crumb []=['cla$classess',ASSET.'cla$classess'];
        $crumb[] =['delete','cla$classess'];


        $error = array();
        if(count($_POST) >0){
           
               $classes->delete($id);
             $this->redirect('classes');
         
          }
          $row = $classes->where('id',$id);
       if($row){
        $row = $row[0];
       }
     
        echo $this->view('delete_classes',['row'=>$row,'crumb'=>$crumb]);
    }



    public function details($id=null){

      $classes = new Classes_model();

      $crumb[] =['Dashboard',ASSET];
      $crumb []=['classes',ASSET.'classes'];
      $crumb[] =['delete','clas$classess'];


      $error = array();
      if(count($_POST) >0){
         
             $classes->delete($id);
           $this->redirect('classes');
       
        }
        $row = $classes->where('id',$id);
     if($row){
      $row = $row[0];
     }
   
      echo $this->view('school_details',['row'=>$row,'crumb'=>$crumb]);
  }
}