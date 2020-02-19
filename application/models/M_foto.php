<?php

class M_foto extends CI_Model
{

	function tampil_foto(){
		$limit = 10;
		$offset = ($_GET['page'] * $limit) - 10;

		$this->db->select('*');
		$this->db->from('dokumentasi_tbl');
		$this->db->where('dokumentasi_tahun', $_GET['tahun']);

		$this->db->limit($limit, $offset);
		$query = $this->db->get();

		return $query;

		// return $this->db->get_where('dokumentasi_tbl', array(
		// 	'dokumentasi_tahun' => $_GET['tahun']));	
	}

	function count_image() {   
	    $query = $this->db->get_where('dokumentasi_tbl', array('dokumentasi_tahun' => $_GET['tahun']));
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

?>