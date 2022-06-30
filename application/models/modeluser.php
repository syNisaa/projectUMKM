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
}
