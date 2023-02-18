<?php



class User extends Model {

   public $error = array();
   protected $allowedColumn=[ 'firstname', 'lastname','date','email','userId','school_id','password','gender','rank'];
   protected $beforeinsert=[ 'make_user_id','make_school_id','make_password_hash',
   ];


   public function validate($data){
    if(empty($data['firstname']) || !preg_match('/^[a-zA-Z]+$/',$data['firstname'])){
        $this->error['username']= "Only letters are allowed in username";
    }
    if(empty($data['lastname']) || !preg_match('/^[a-zA-Z]+$/',$data['lastname'])){
        $this->error['lastname']= "Only letters are allowed in lastname";
    }
    if(empty($data['email']) || !filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
        $this->error['email']= "The email is not valide";
    }
    // if($this->where('email',$data['email'])){
    //     $this->error['email']= "The email is already in use";
    // }

    if(empty($data['gender']) || !in_array($data['gender'],['male','female'])){
        $this->error['gender']= "The Gender is not valide";
    }
    if(empty($data['rank']) || !in_array($data['rank'],['super admin','admin','student','lecturer','Reception'])){
        $this->error['rank']= "The Rank is not valide";
    }
    if(empty($data['password']) || $data['password'] !== $data['retypepassword']){
        $this->error['password']= "The passwords don't match";
    }
    
    if(strlen($data['password']) <=7){
        $this->error['password']= "The passwords should be at least 8 characters";
    }
   
   if(count($this->error) ==0){
    return true;
   }

   return false;
}



public function make_user_id($data){
    $data['userId']=get_random_string_max(30);
    return $data;
}

public function make_school_id($data){
   
        $data['school_id']= get_random_string_max(30);
  
    return $data;
}

public function make_password_hash($data){
    $data['password']= password_hash($data['password'],PASSWORD_DEFAULT);
    return $data;
}





}