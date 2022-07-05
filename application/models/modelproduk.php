<?php 
 
class modelproduk extends CI_Model{

    function getproduk(){
        return $this->db->get('produk');
    }
    
    function getdatawhere($where,$table){		
        return $this->db->get_where($table,$where);
    }
    
    
	function detail($where,$table){		
        return $this->db->get_where($table,$where);
    }

    function myorder($where,$table){
        return $this->db->get_where($table,$where);
    }
}