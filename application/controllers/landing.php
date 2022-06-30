<?php
defined('BASEPATH') or exit('No direct script access allowed');

class landing extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('modeljenisproduk');
        $this->load->model('modeluser');
    }

    function index()
    {
        $data['jenis_produk'] = $this->modeljenisproduk->getjenisproduk()->result();
        $this->load->view('landing/index.php', $data);
        // echo $data;
    }

    function formlogin()
    {
        $this->load->view('landing/formlogin.php');
    }

    function ceklogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        echo $username, $password;

        $cek_admin = $this->modeluser->auth_admin($username, $password)->num_rows();
        if ($cek_admin >0) {
            // $data_session = array(
            //     'username' => $cek_admin->username,
            //     'logged_in' => true
            // );
            // $this->session->set_userdata($data_session);
            // echo "hallo";
            redirect('index.php/admin/dashboard');
        } else {
            redirect('index.php/landing/formlogin');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php'));
    }

    function formregister()
    {
        $this->load->view('landing/formregister.php');
    }
}
