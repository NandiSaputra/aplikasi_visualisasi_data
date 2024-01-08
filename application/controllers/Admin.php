<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
public function __construct(){
		parent::__construct();
	$this->load->model('MahasiswaBaru_model');
	$this->load->model('MahasiswaAktif_model');
	}
	public function index()
	{
		$data ['jumlah_mhs'] = $this->MahasiswaBaru_model->countMahasiswa();
		$data ['jumlah_mhs_aktif'] = $this->MahasiswaAktif_model->countMahasiswa();
		$this->load->view('template/admin/header.php');
		$this->load->view('template/admin/sidebar.php');
		$this->load->view('admin/index.php',$data);
  $this->load->view('template/admin/footer.php');

	}

}