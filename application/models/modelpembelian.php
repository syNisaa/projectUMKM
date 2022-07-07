<?php 
 
class modelpembelian extends CI_Model{

	function getpembelian(){
        return $this->db->get('pembelian');
    }

    function hapuspembelian($hapus,$table){
        $this->db->where($hapus);
        $this->db->delete($table);
    } 

    public function createpembelian(){
        $data = array(
            'id'=>"",
            'tanggal'=>$this->input->post('tanggal'),
            'jumlah'=>$this->input->post('jumlah'),
            'harga'=>$this->input->post('harga'),
            'produk_id'=>$this->input->post('produk_id'),
            'suplier_id'=>$this->input->post('suplier_id')
        );
        $this->db->insert('pembelian', $data);
        header("location",base_url().'index.php/pembelian/pembelian');
    }

    function edit_data($where,$data,$table){
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}