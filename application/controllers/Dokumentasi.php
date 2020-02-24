<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumentasi extends CI_Controller {

	function __Construct(){
        parent ::__construct();
        $this->load->model('M_foto');
    }

	public function index()
	{
		$data['count_image'] = $this->M_foto->count_image();
		$data['foto_dokumentasi'] = $this->M_foto->tampil_foto()->result();
		$this->load->view('layout/header_p');
		$this->load->view('page/v_dokumentasi', $data);
		$this->load->view('layout/footer');


	}
}