<?php




class Schools  extends controller {



    public function index(){

        $crumb[] =['Dashboard',ASSET];
        $crumb[] =['Schools','schools'];
      
        $user = new Maktab();

         $data=$user->findAll();
        //  echo "<pre>"; print_r($data);
     
        echo $this->view('school',['row'=>$data,'crumb'=>$crumb]);
    }


    

    public function add(){

        $user = new Maktab();

        $crumb[] =['Dashboard',ASSET];
        $crumb[] =['Schools','schools'];
        $crumb[] =['add','schools'];

        $error = array();
        if(count($_POST) >0){
        //   print_r($_POST);
            $school = new Maktab();
            $error = array();
            if($school->validate($_POST)){
              $_POST['date']=date('Y-m-d H:m:s');
               $school->insert($_POST);
             $this->redirect('schools');
            }else{
              $error= $school->error;
            }
          }
     
        echo $this->view('add_school',['error'=>$error,'crumb'=>$crumb]);
    }


    
    public function edit($id=null){

        $school = new Maktab();

        $crumb []=['Dashboard',ASSET];
        $crumb[] =['Schools',ASSET.'schools'];
        $crumb[] =['edit','schools'];
        $error = array();
        if(count($_POST) >0){
        //   print_r($_POST);
            $error = array();
            if($school->validate($_POST)){
              $_POST['date']=date('Y-m-d H:m:s');
               $school->update($id,$_POST);
             $this->redirect('schools');
            }else{
              $error= $school->error;
            }
          }
          $row = $school->where('id',$id);
       if($row){
        $row = $row[0];
       }
     
        echo $this->view('edit_school',['row'=>$row,'error'=>$error,'crumb'=>$crumb]);
    }



    public function delete($id=null){

        $school = new Maktab();

        $crumb[] =['Dashboard',ASSET];
        $crumb []=['Schools',ASSET.'schools'];
        $crumb[] =['delete','schools'];


        $error = array();
        if(count($_POST) >0){
           
               $school->delete($id);
             $this->redirect('schools');
         
          }
          $row = $school->where('id',$id);
       if($row){
        $row = $row[0];
       }
     
        echo $this->view('delete_school',['row'=>$row,'crumb'=>$crumb]);
    }



    public function details($id=null){

      $school = new Maktab();

      $crumb[] =['Dashboard',ASSET];
      $crumb []=['Schools',ASSET.'schools'];
      $crumb[] =['delete','schools'];


      $error = array();
      if(count($_POST) >0){
         
             $school->delete($id);
           $this->redirect('schools');
       
        }
        $row = $school->where('id',$id);
     if($row){
      $row = $row[0];
     }
   
      echo $this->view('school_details',['row'=>$row,'crumb'=>$crumb]);
  }
}