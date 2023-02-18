<?php



class Classe_test extends Model {
    protected $user = 'classe_test';

   protected $allowedColumn=[ 'user_id', 'classe_id','school_id', 'disabled','date'];
   protected $beforeinsert=['make_school_id'];
   protected $afterFindig=[ 'get_user'];





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





public function get_user($data){
    $user=new User();

    foreach($data as $key => $value){

        $result = $user->where('userId',$value->user_id);
        $data[$key]->user=is_array($result) ? $result[0] : false;
    }
   

    return $data;

}

}