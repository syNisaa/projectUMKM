<?php 
 
class modeljenisproduk extends CI_Model{

    function getjenisproduk(){
        return $this->db->get('jenis_produk');
    }
    
}