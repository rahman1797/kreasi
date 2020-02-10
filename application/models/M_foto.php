<?php

class M_foto extends CI_Model
{

	function tampil_foto(){
		return $this->db->get_where('dokumentasi_tbl', array(
			'dokumentasi_tahun' => $_GET['tahun']));	
	}
}

?>