<?php


class Auth {


    public static function authontication($row){
        $_SESSION['user'] = $row;
    }


    public static function logout(){

        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
        }
    }


    public static function check(){
        if(isset($_SESSION['user'])){
            return true;
        }
        return false;
    }

    public static function user(){
        if(isset($_SESSION['user'])){
            return $_SESSION['user']->firstname;
        }
        return false;
    }


    public static function __callStatic($method,$params){


        $prop= strtolower(str_replace('get','',$method));
        if(isset($_SESSION['user']->$prop)){
            return $_SESSION['user']->$prop;
        }
        return "unknown";
    }


    public static function switch_school($id){
        if(isset($_SESSION['user']) && $_SESSION['user']->rank =='super admin'){

            $user = new User();
            $school = new Maktab();
            $data =  $school->where('id',$id);
             $data=$data[0];
            if($data){
                $arr['school_id']=$data->school_id;
                if($user->update($_SESSION['user']->id,$arr)){
                    $_SESSION['user']->school_id=$data->school_id;
                    $_SESSION['user']->school_name=$data->school;

                }

            }
            return true;
        }
        return false;
    }


    public static function access($rank=""){
        if(!isset($_SESSION['user'])){
            return false;
        }

        $check_loged_in = $_SESSION['user']->rank;


        $Rank['super admin'] = ['super admin','admin','lecturer','Reception','student'];
        $Rank['admin'] = ['admin','lecturer','Reception','student'];
        $Rank['lecturer'] = ['lecturer','Reception','student'];
        $Rank['Reception'] = ['Reception','student'];
        $Rank['student'] = ['student'];
        


        if(!$Rank[$check_loged_in]){
            return false;
        }
        

        if(in_array($rank,$Rank[$check_loged_in])){
            return true;
        }









    }
}