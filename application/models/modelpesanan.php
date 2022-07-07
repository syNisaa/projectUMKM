<?php 
 
class modelpesanan extends CI_Model{

    function getpesanan(){
        return $this->db->get('pesanan');
    }
    
    function hapuspesanan($hapus,$table){
        $this->db->where($hapus);
        $this->db->delete($table);
    } 

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function createpesanan(){
        $data = array(
            'id'=>"",
            'tanggal'=>$this->input->post('tanggal'),
        
            'jumlah'=>$this->input->post('jumlah'),
        
            'users_id'=>$this->input->post('users_id'),
    
            'produk_id'=>$this->input->post('produk_id')
        );
        $this->db->insert('pesanan', $data);
    }
}