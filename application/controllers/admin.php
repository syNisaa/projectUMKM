<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('modeluser');
	}
 
	function dashboard(){
		$this->load->view('templateAdmin/index.php');
	}

	function viewproduk(){
		$this->load->view('produk/index.php');
	}

	function viewjenisproduk(){
		$this->load->view('jenisProduk/index.php');
	}

	function viewpembelian(){
		$this->load->view('pembelian/index.php');
	}

	function viewpesanan(){
		$this->load->view('pesanan/index.php');
	}

	function viewsuplier(){
		$this->load->view('suplier/index.php');
	}
 
}