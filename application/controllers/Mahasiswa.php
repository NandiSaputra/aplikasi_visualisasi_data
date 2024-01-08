<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }
public function index(){
   $data['sum_ms_baru'] = $this->Mahasiswa_model->sumDataByFirst4Letters();
    $data['sum_ms_aktif'] = $this->Mahasiswa_model->get_data_by_category();
    $data['sum_ms_baru_perprodi'] = $this->Mahasiswa_model->sumDataByprodi();
     $data['sum_ms_baru_peraktif'] = $this->Mahasiswa_model->sumDataByaktif();
    
       		$this->load->view('template/admin/header.php');
		$this->load->view('template/admin/sidebar.php');
		$this->load->view('admin/tabel_mahasiswa.php', $data);
		$this->load->view('template/admin/footer.php');
    }
}
 