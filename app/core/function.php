<?php


function get_var($key,$default=""){
if(isset($_POST[$key])){
    return $_POST[$key];
}

return $default;
 
}


function get_select($key,$value){
    if(isset($_POST[$key])){
        if($_POST[$key] == $value){
            return "selected";
        }
    }
echo $value;
    return "";

}


function esc($var){
    return htmlspecialchars($var);
}


function get_random_string_max($length) {

	$array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	$text = "";

	$length = rand(4,$length);

	for($i=0;$i<$length;$i++) {

		$random = rand(0,61);
		
		$text .= $array[$random];

	}

	return $text;
}

function get_date($data){

    return date("jS M ,Y",strtotime($data));
}


function view_path($view){

    if(file_exists("../app/view/".$view.".php")){

        return("../app/view/".$view.".php");
    }else{

       return ("../app/view/404.php");
    }
}