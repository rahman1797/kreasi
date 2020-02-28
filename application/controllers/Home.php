<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __Construct(){
        parent ::__construct();
        $this->load->model('M_count');
    }

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('page/v_home');
		$this->load->view('layout/footer');

		$date = date('Y-m-d');
		$where = array('count_tanggal' => $date);

		$db = $this->M_count->cek_tanggal("count_tbl", $where);

		$cek = $db->num_rows();

		if ($cek < 1) {
			$data = array('count_tanggal' => $date, 'count_jumlah' => 1);
			$this->M_count->input_tanggal($data);
		}

		else {

			$result = $db->result();

			$jumlah = $result['0']->count_jumlah;

			$data = array('count_jumlah' => ($jumlah + 1) );

			$this->M_count->update($where, $data, 'count_tbl');
		}

	}
}
