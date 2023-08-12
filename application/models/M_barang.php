<?php

class M_barang extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('tb_barang');
	}

  function input_data($data,$table){
    $this->db->insert($table,$data);
  }

  function detail($where,$table){   
  return $this->db->get_where($table,$where);
  }

  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  function delete($id_barang){
    $this->db->where_in('id_barang', $id_barang);
    $this->db->delete('tb_barang');
  }

  function edit_data($where,$table){    
  return $this->db->get_where($table,$where);
  }

  function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

	function jumlah_barang()
	{   
    $query = $this->db->get('tb_barang');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
  }

  function cekkodebarang()
    {
        $query = $this->db->query("SELECT MAX(no_seri) as kodebarang from tb_barang");
        $hasil = $query->row();
        return $hasil->kodebarang;
    }
}