<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jenisproduk extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('modeljenisproduk');
    }

    function jenisproduk()
    {
        $data['jenis_produk'] = $this->modeljenisproduk->getjenisproduk()->result();
        $this->load->view('jenisprodukview/index.php', $data);
        // echo $data;
    }

    function hapus($id)
    {
        $hapus = array('id' => $id);
        $this->modeljenisproduk->hapusjenis($hapus, 'jenis_produk');
        redirect('index.php/jenisproduk/jenisproduk');
    }

    public function tambah()
    {
        $this->load->view('jenisprodukview/create.php');
    }

    public function create()
    {
        $this->modeljenisproduk->createjenis();
        redirect('index.php/jenisproduk/jenisproduk');
    }

    function edit($id)
    {
        $where = array('id' => $id);
        $data['jenis_produk'] = $this->modeljenisproduk->edit_data($where, 'jenis_produk')->result();
        $this->load->view('jenisprodukview/edit.php', $data);
    }

    function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');

     
        $data = array(
            'nama' => $nama
        );
     
        $where = array(
            'id' => $id
        );
     
        $this->modeljenisproduk->update_data($where,$data,'jenis_produk');
        redirect('index.php/jenisproduk/jenisproduk');
    }
}
