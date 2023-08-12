<?php

class M_kategori extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('tb_kategori');
	}

	function input_data($data,$table){
    $this->db->insert($table,$data);
  }

  function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  function hapus_data($id)
  {
    $hapus = $this->db->query("DELETE FROM tb_kategori WHERE id ='$id'");
    return $hapus;
  }

  function jumlahKategori()
  {   
    $query = $this->db->get('tb_kategori');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
  }
}