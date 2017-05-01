<?php 

/**
* 
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class form2 extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();# code...
	}
	public function index(){
		$this->load->helper('url');
		$this->load->view('form2');
	}
}



 ?>