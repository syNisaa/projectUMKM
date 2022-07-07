<?php 
 
class modelsuplier extends CI_Model{

    function getsuplier(){
        return $this->db->get('suplier');
    }
    
    function hapussuplier($hapus,$table){
        $this->db->where($hapus);
        $this->db->delete($table);
    } 

    public function createjenis(){
        $data = array(
            'id'=>"",
            'nama'=>$this->input->post('nama')
        );
        $this->db->insert('suplier', $data);
        header("location",base_url().'index.php/suplier/suplier');
    }

    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}