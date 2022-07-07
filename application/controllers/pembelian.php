<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class pembelian extends CI_Controller {
    function __construct(){
		parent::__construct();		
        $this->load->model('modelpembelian');
        $this->load->model('modelproduk');
        $this->load->model('modelsuplier');
	}
	
    function pembelian(){
        $data['pembelian'] = $this->modelpembelian->getpembelian()->result();
        $this->load->view('pembelian/index.php',$data);
		// echo $data;
    }

    function hapus($id){
        $hapus = array('id' => $id);
        $this->modelpembelian->hapuspembelian($hapus,'pembelian');
        redirect('index.php/pembelian/pembelian');
    }

    public function tambah(){
        $data['produk'] = $this->modelproduk->getproduk()->result();
        $data['suplier'] = $this->modelsuplier->getsuplier()->result();
        $this->load->view('pembelian/create.php',$data);
    }

    public function create()
	{
		$this->modelpembelian->createpembelian();
		redirect('index.php/pembelian/pembelian');
	}

    function update(){
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $jumlah = $this->input->post('jumlah');
        $harga = $this->input->post('harga');
        $produk_id = $this->input->post('produk_id');
        $suplier_id = $this->input->post('suplier_id');

    
        $data = array(
            'tanggal' => $tanggal,
            'jumlah' => $jumlah,
            'harga' => $harga,
            'produk_id' => $produk_id,
            'suplier_id' => $suplier_id
        );
    
        $where = array(
            'id' => $id
        );

    
        $this->modelpembelian->update_data($where,$data,'pembelian');
        redirect('index.php/pembelian/pembelian');
    }
    
}