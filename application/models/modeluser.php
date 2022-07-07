<?php

class modeluser extends CI_Model
{
	function getUser()
	{
		$query = $this->db->query("SELECT * FROM users WHERE role = 'publik'");
		return $query;
	}

	function auth_admin($username, $password)
	{
		$query = $this->db->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
		return $query;
	}

	function hapususer($hapus,$table){
        $this->db->where($hapus);
        $this->db->delete($table);
    } 

    public function createuser(){
        $data = array(
            'id'=>"",
			'username'=>$this->input->post('username'),
            'password'=>md5($this->input->post('password')),
			'email'=>$this->input->post('email'),
			'status'=>"1",
			'role'=>"publik"
        );
        $this->db->insert('users', $data);
        redirect(base_url().'index.php/');
    }

	public function hitungJenis(){
		$query = $this->db->get('jenis_produk');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}

	public function hitungSuplier(){
		$query = $this->db->get('suplier');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}

	public function hitungPesanan(){
		$query = $this->db->get('pesanan');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}

	public function hitungUser(){
		$query = $this->db->get('users');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}

}
