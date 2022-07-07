<?php

class modelproduk extends CI_Model
{

    function getproduk()
    {
        return $this->db->get('produk');
    }

    function getdatawhere($where, $table)
    {
        return $this->db->get_where($table, $where);
    }


    function detail($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function myorder($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function hapusproduk($hapus, $table)
    {
        $this->db->where($hapus);
        $this->db->delete($table);
    }

    public function createproduk()
    {
        $data = array(
            'id' => "",
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'stok' => $this->input->post('stok'),
            'harga_beli' => $this->input->post('harga_beli'),
            'harga_jual' => $this->input->post('harga_jual'),
            'foto' => "null" ,
            'jenis_id' => $this->input->post('id_jenis'),
            'deskripsi' => $this->input->post('deskripsi')
        );
        $this->db->insert('produk', $data);
        header("location", base_url() . 'index.php/produk/produk');
    }

    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }

}
