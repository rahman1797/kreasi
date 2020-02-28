<?php

class M_count extends CI_Model
{

	function cek_tanggal($table,$where){		
		return $this->db->get_where($table,$where);
	}


	function input_tanggal($data) {
		$this->db->insert('count_tbl', $data);
	}

	function update($where,$data,$table){
	
		$this->db->where($where);
		
		$this->db->update($table,$data);
	}


}

?>