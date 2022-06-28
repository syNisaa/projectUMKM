<?php 
 
class modeluser extends CI_Model{
	function getUser(){
		return $this->db->get('users');
	}
}