<?php

class modeluser extends CI_Model
{
	function getUser()
	{
		return $this->db->get('users');
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
}
