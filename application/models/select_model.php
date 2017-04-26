<?php 
class select_model extends CI_Model{
 	function __construct(){
 	parent::__construct();
 	}

 	function select($data){
 	 $query = $this ->db-> select('id')
       -> where('email', $data)
       -> limit(1)
       -> get('bir')
       -> result_array()[0]['id'];
       if($query){
       	return 1;
       }else{
       	return false;
       }
       
 	}
}



 ?>