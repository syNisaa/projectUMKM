<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class suplier extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
        $this->load->model('modelsuplier');
	}
 
    function suplier(){
        $data['suplier'] = $this->modelsuplier->getsuplier()->result();
        $this->load->view('suplier/index.php',$data);
		// echo $data;
    }

    function hapus($id){
        $hapus = array('id' => $id);
        $this->modelsuplier->hapussuplier($hapus,'suplier');
        redirect('index.php/suplier/suplier');
    }

    public function tambah(){
        $this->load->view('suplier/create.php');
    }

    public function create()
	{
		$this->modelsuplier->createsuplier();
		redirect('index.php/jenissuplier/jenissuplier');
	}
    





    function edit($id)
    {
        $where = array('id' => $id);
        $data['suplier'] = $this->modelsuplier->edit_data($where, 'suplier')->result();
        $this->load->view('suplier/edit.php', $data);
    }

    function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $kota = $this->input->post('kota');
        $kontak = $this->input->post('kontak');
        $alamat = $this->input->post('alamat');
        $telpon = $this->input->post('telpon');
    
        $data = array(
            'nama' => $nama,
            'kota' => $kota,
            'kontak' => $kontak,
            'alamat' => $alamat,
            'telpon' => $telpon
        );
    
        $where = array(
            'id' => $id
        );

        $this->modelsuplier->update_data($where,$data,'suplier');
        redirect('index.php/suplier/suplier');
    }
}