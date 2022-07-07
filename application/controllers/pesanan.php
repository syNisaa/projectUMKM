<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class pesanan extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
        $this->load->model('modelpesanan');
	}
 
    function pesanan(){
        $data['pesanan'] = $this->modelpesanan->getpesanan()->result();
        $this->load->view('pesanan/index.php',$data);
		// echo $data;
    }

    function edit($id)
    {
        $where = array('id' => $id);
        $data['pesanan'] = $this->modelpesanan->edit_data($where, 'pesanan')->result();
        $this->load->view('pesanan/edit.php', $data);
    }

    function update(){
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $jumlah = $this->input->post('jumlah');
        $users_id = $this->input->post('users_id');
        $produk_id = $this->input->post('produk_id');
     
        $data = array(
            'tanggal' => $tanggal,
            'jumlah' => $jumlah,
            'users_id' => $users_id,
            'produk_id' => $produk_id,
        );
     
        $where = array(
            'id' => $id
        );
     
        $this->modelpesanan->update_data($where,$data,'pesanan');
        redirect('index.php/pesanan/pesanan');
    }

    function hapus($id){
        $hapus = array('id' => $id);
        $this->modelpesanan->hapuspesanan($hapus,'pesanan');
        redirect('index.php/pesanan/pesanan');
    }

    public function tambah(){
        $this->load->view('pesanan/create.php');
    }

    public function create()
	{
		$this->modelpesanan->createpesanan();
		redirect('index.php/pesanan/pesanan');
	}

    public function order()
	{
		$this->modelpesanan->createpesanan();
		redirect('index.php/user/myorder');
	}
 
}