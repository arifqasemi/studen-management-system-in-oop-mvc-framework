<?php



class Database{


    private function connect(){

        
            $string = DBDRIVER.":host=".DBHOST.";dbname=".DBNAME;

          if(!$DB = new PDO($string,DBUSER,DBPASS)){
            die('not conneted');
          }else{
            return $DB;
          }
        
        

    }

  
    public function query($query,$data = [], $data_type="object")
	{

		$DB  = $this->connect();
		$stm = $DB->prepare($query);

		if($stm){

			$check = $stm->execute($data);
		}if($check){
			if($data_type == "object"){
				$data = $stm->fetchAll(PDO::FETCH_OBJ);

			}else{
				$data = $stm->fetchAll(PDO::FETCH_ASSOC);
			}

		


		}

		if(is_array($data)){
			if(property_exists($this,'afterFindig')){
			 foreach($this->afterFindig as $val){
				 $data= $this->$val($data);
			 }
	 
	 
		 }
	 }
	 
	 if(is_array($data) && count($data) > 0){
		return $data;
	}
	return true;
		return false;

	}



    public function write($query,$data = [])
	{

		$DB  = $this->connect();
		$stm = $DB->prepare($query);

		if(count($data) > 0){

			$check = $stm->execute($data);
		}else{
			$stm = $DB->query($query);
			$check = 0;
			if($stm){
				$check = 1;
			}
		}

		if($check)
		{
			return true;
		}

		return false;

	}

	public function read($query,$data = [])
	{

		$DB  = $this->connect();
		$stm = $DB->prepare($query);

		if(count($data) > 0){

			$check = $stm->execute($data);
		}else{
			$stm = $DB->query($query);
			$check = 0;
			if($stm){
				$check = 1;
			}
		}

		if($check)
		{
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		return false;

	}

	 public function total_item($sql){
    	$DB  = $this->connect();
		$stm = $DB->prepare($sql);
        $result =$stm->execute();
		return $stm->rowCount();
        
	 }

}