<?php 
class select_model extends CI_Model{
 	function __construct(){
 	parent::__construct();
 	}

 	function select($data){
 	 $query = $this ->db-> select('*')
       -> where('email', $data)       
       -> get('bir')
       -> result_array();
       if(count($query[0])<1){
       	return 0;
       }else{
       	return 1;
       }
       
 	}
}



 ?>