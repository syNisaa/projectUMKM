<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class user extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('modeluser');
	}
 
	function user(){
		$data['users'] = $this->modeluser->getuser()->result();
		$this->load->view('users/index.php',$data);
	}

	function registrasiuser(){
		$this->modeluser->createuser();
	}

	function hapus($id){
        $hapus = array('id' => $id);
        $this->modeluser->hapususer($hapus,'users');
        redirect('index.php/user/user');
    }
 
}