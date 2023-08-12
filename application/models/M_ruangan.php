<?php

class M_ruangan extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('tb_ruangan');
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
    $hapus = $this->db->query("DELETE FROM tb_ruangan WHERE id_ruangan ='$id'");
    return $hapus;
  }

	function jumlah_ruangan()
	{   
    $query = $this->db->get('tb_ruangan');
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