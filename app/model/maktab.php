<?php



class Maktab extends Model {

   public $error = array();
   protected $allowedColumn=[ 'school', 'school_id','date'];
   protected $beforeinsert=[ 'make_user_id','make_school_id'];
   protected $afterFindig=[ 'get_user'];



   public function validate($data){
    if(empty($data['school']) || !preg_match('/^[a-z A-Z0-9]+$/',$data['school'])){
        $this->error['school']= "Only letters are allowed in school";
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
        $data['school_id']=get_random_string_max(30);
        
    }
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