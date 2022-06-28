<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class produk extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('modeluser');
	}
 
	function dashboard(){
		$this->load->view('templateAdmin/index.php');
	}
 
}