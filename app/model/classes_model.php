<?php



class Classes_model extends Model {
    protected $user = 'classes';

   public $error = array();
   protected $allowedColumn=[ 'classe', 'classes_id', 'school_id','date'];
   protected $beforeinsert=[ 'make_user_id','make_classes_id'];
   protected $afterFindig=[ 'get_user'];



   public function validate($data){
    if(empty($data['classe']) || !preg_match('/^[a-z A-Z0-9]+$/',$data['classe'])){
        $this->error['classe']= "Only letters are allowed in classes";
    }
  
   
   if(count($this->error) ==0){
    return true;
   }

   return false;
}



public function make_user_id($data){
    if(isset($_SESSION['user']->school_id)){
        $data['user_id']=$_SESSION['user']->userId;
        
    }
    return $data;
}

public function make_school_id($data){
    if(isset($_SESSION['user']->school_id)){
        $data['school_id']=$_SESSION['user']->school_id;
        
    }
    return $data;
}

public function make_classes_id($data){

        $data['classe_id']=get_random_string_max(30);
        
    
    return $data;
}




public function get_user($data){
    $user=new User();

    foreach($data as $key => $value){

        $result = $user->where('userId',$value->user_id);
        $data[$key]->user=is_array($result) ? $result[0] : false;
    }
   

    return $data;

}

}