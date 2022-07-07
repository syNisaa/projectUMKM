<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class produk extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('modeluser');
		$this->load->model('modelproduk');
        $this->load->model('modeljenisproduk');
	}
 
	function dashboard(){
		$this->load->view('templateAdmin/index.php');
	}

	function produk(){
        $data['produk'] = $this->modelproduk->getproduk()->result();
        $this->load->view('produk/index.php',$data);
		// echo $data;
    }

    function hapus($id){
        $hapus = array('id' => $id);
        $this->modelproduk->hapusproduk($hapus,'produk');
        redirect('index.php/produk/produk');
    }

    public function tambah(){
        $data['jenis']= $this->modeljenisproduk->getjenisproduk()->result();
        $this->load->view('produk/create.php',$data);
    }

    public function create()
	{
        // $config['upload_path'] ='./assets/gambar';
        // $config['allowed_types'] = 'jpg|png';
        // $config['max_size'] = 1000;
        // $config['max_width'] = 3264;
        // $config['max_height'] = 2720;

        // $kode = $this->input->post('kode');

        // $array = explode('.', $_FILES['berkas']['name']);
        // $ext = end($array);

        // $new_name = $kode . '.' . $ext;

        // $config['file_name'] = $new_name;

        // $this->load->library('upload',$config);

        // if (!$this->upload->do_upload('foto')) {
        //     $error = array('error' => $this->upload->display_errors());
        // } else {
        //     $data = array('upload_data' => $this->upload->data());
        //     echo $data;
        // }
		$this->modelproduk->createproduk();
		redirect('index.php/produk/produk');
	}
 
    function edit($id)
    {
        $where = array('id' => $id);
        $data['produk'] = $this->modelproduk->edit_data($where, 'produk')->result();
        $this->load->view('produk/edit.php', $data);
    }

    function update(){
        $id = $this->input->post('id');
        $kode= $this->input->post('kode');
        $nama = $this->input->post('nama');
        $stok = $this->input->post('stok');
        $harga_beli = $this->input->post('harga_beli');
        $harga_jual = $this->input->post('harga_jual');
        $foto = $this->input->post('foto');
        $id_jenis = $this->input->post('id_jenis');
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'id' => $id,
            'kode' => $kode,
            'nama' => $nama,
            'stok' => $stok,
            'harga_beli' => $harga_beli,
            'harga_jual' => $harga_jual,
            'foto' => $foto,
            'id_jenis' => $id_jenis,
            'deskripsi' => $deskripsi
        );
     
        $where = array(
            'id' => $id
        );
     
        $this->modelproduk->update_data($where,$data,'produk');
        redirect('index.php/jenisproduk/jenisproduk');
    } 

 
}