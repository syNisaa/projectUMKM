<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class jenisproduk extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
        $this->load->model('modeljenisproduk');
	}
 
    function jenisproduk(){
        $data['jenis_produk'] = $this->modeljenisproduk->getjenisproduk()->result();
        $this->load->view('jenisprodukview/index.php',$data);
		// echo $data;
    }

 
}