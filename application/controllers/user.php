<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class user extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('modeluser');
		$this->load->model('modelproduk');
		$this->load->model('modeljenisproduk');
		$this->load->library('session');
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
 
	// User Publik 
	function userpublik(){
		$data['produk'] = $this->modelproduk->getproduk()->result();
		$data['jenis_produk'] = $this->modeljenisproduk->getjenisproduk()->result();
		$this->load->view('userlogin/index.php',$data);
	}

	function detailproduk($id){
		$data['jenis_produk'] = $this->modeljenisproduk->getjenisproduk()->result();
        $where = array('id' => $id);
        $data['produk'] = $this->modelproduk->detail($where, 'produk')->result();
        $this->load->view('userlogin/detail.php', $data);
	}

	function myorder(){
		$id = $this->session->userdata('id');
		$where = array('jenis_id' =>  $this->session->userdata('id'));
		// $data['pesanan'] = $this->modelproduk->getpesanan()->result();
		$data['myorder'] = $this->modelproduk->myorder($where, 'produk')->result();
		$this->load->view('userlogin/myorder.php', $data);
	}
}