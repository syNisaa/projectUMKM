<?php 
 
class modeljenisproduk extends CI_Model{

    function getjenisproduk(){
        return $this->db->get('jenis_produk');
    }
    
    function hapusjenis($hapus,$table){
        $this->db->where($hapus);
        $this->db->delete($table);
    } 

    public function createjenis(){
        $data = array(
            'id'=>"",
            'nama'=>$this->input->post('nama')
        );
        $this->db->insert('jenis_produk', $data);
        header("location",base_url().'index.php/jenisproduk/jenisproduk');
    }

    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}