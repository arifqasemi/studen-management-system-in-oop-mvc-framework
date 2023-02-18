<?php



class Model extends Database{
    public $error =array();

    public function __construct(){


        if(!property_exists($this,'user')){
            $this->user = strtolower($this::class)."s";
        }
    }

    public function findSingle($column,$value){

        $column = addslashes($column);
        $query = "select * from ".$this->user." where $column =:value";
        $data = $this->query($query,
         ['value'=>$value
        ]);
        if(is_array($data)){
            if(property_exists($this,'afterFindig')){
             foreach($this->afterFindig as $val){
                 $data= $this->$val($data);
             }
     
     
         }
     }
     return $data;

    }

    public function where($column,$value){

        $column = addslashes($column);
        $query = "select * from ".$this->user." where $column =:value";
        $data = $this->query($query,
         ['value'=>$value
        ]);
        if(is_array($data)){
            if(property_exists($this,'afterFindig')){
             foreach($this->afterFindig as $val){
                 $data= $this->$val($data);
             }
     
     
         }
     }
     return $data;

    }


    public function findAll(){

        $query = "select * from $this->user";
        $data = $this->query($query);
        if(is_array($data)){
       if(property_exists($this,'afterFindig')){
        foreach($this->afterFindig as $val){
            $data= $this->$val($data);
        }


    }
}
    return $data;

}



public function insert($data){

    if(property_exists($this,'allowedColumn')){
        foreach($data as $keys =>$value){
         
            if(!in_array($keys,$this->allowedColumn)){
             unset($data[$keys]);
            }
        }

    }

    if(property_exists($this,'beforeinsert')){
        foreach($this->beforeinsert as $val){
            $data= $this->$val($data);
        }

    }

    $keys = array_keys($data);
    $column = implode(',',$keys);
    $value = implode(',:',$keys);
    $query = "insert into $this->user($column)Values(:$value)";
    $data = $this->query($query,$data);
    return $data;
}



public function update($id,$data){
    $data['id']=$id;

    $str = "";
    foreach($data as $keys =>$value){

        $str.=$keys."=:".$keys.",";

    }

    $str = trim($str,",");
    $query = "update $this->user set $str where id=:id ";
    return $this->query($query,$data);
   
}







public function delete($id){
    
    $query = "delete from $this->user where id =:id";
    $data['id']=$id;
    return $this->query($query,$data);
   
}
}