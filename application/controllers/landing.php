<?php
defined('BASEPATH') or exit('No direct script access allowed');

class landing extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('modeljenisproduk');
        $this->load->model('modeluser');
        $this->load->model('modelproduk');
        $this->load->library('session');
    }

    function index()
    {
        $data['jenis_produk'] = $this->modeljenisproduk->getjenisproduk()->result();
        // $data['tas'] = $this->modelproduk->getwheredata(array('nama' => "tas"), 'produk')->result();
        // $data['sepatu'] = $this->modelproduk->getwheredata(array('nama' => "sepatu"), 'produk')->result();
        // $data['perhiasan'] = $this->modelproduk->getwheredata(array('nama' => "perhiasan"), 'produk')->result();
        $data['produk'] = $this->modelproduk->getproduk()->result();

        $this->load->view('landing/index.php', $data);
        // echo $data;
    }

    function formlogin()
    {
        $this->load->view('landing/formlogin.php');
    }

    // function ceklogin()
    // {
    //     $username = $this->input->post('username');
    //     $password =md5($this->input->post('password'));


    //     $cek_admin = $this->modeluser->auth_admin($username, $password)->num_rows();
    //     if ($cek_admin > 0) {
    //         redirect('index.php/admin/dashboard');
    //     } else {
    //         // redirect('index.php/landing/formlogin');
    //         echo $username, $password;
    //     }
    // }

    function ceklogin()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $cek_admin = $this->modeluser->auth_admin($username, $password);
        if (!$cek_admin) {
            $data_session = array(
                'username' => $cek_admin->username,
                'logged_in' => true
            );
            $this->session->set_userdata($data_session);
        } else {
            print_r('User doesnt exist');
        }
        if ($cek_admin->num_rows() > 0) {
            $data = $cek_admin->row_array();
            $this->session->set_userdata('masuk', TRUE);
            if ($data['role'] == "admin") {
                $this->session->set_userdata('id', $data['id']);
                $this->session->set_userdata('username', $data['username']);
                redirect('index.php/admin/dashboard');
            } else {
                $this->session->set_userdata('id', $data['id']);
                $this->session->set_userdata('username', $data['username']);
                redirect('index.php/user/userpublik');
            }
        } else {
            echo $username,$password;
            $this->session->set_flashdata('message', 'Maaf Username Atau Password Yang Anda Masukan Salah!');
            // redirect('index.php/landing/formlogin');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('index.php'));
    }

    function formregister()
    {
        $this->load->view('landing/formregister.php');
    }

    function detailproduk($id)
    {
        $data['jenis_produk'] = $this->modeljenisproduk->getjenisproduk()->result();
        $where = array('id' => $id);
        $data['produk'] = $this->modelproduk->detail($where, 'produk')->result();
        $this->load->view('landing/detail.php', $data);
    }

    function detailprodukuser($id){
		$data['jenis_produk'] = $this->modeljenisproduk->getjenisproduk()->result();
        $where = array('id' => $id);
        $data['produk'] = $this->modelproduk->detail($where, 'produk')->result();
        $this->load->view('userlogin/detail.php', $data);
	}
}
