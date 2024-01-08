<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class MahasiswaAktif extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MahasiswaAktif_model');
	}

	public function index()
	{

		$data['mahasiswaAktif'] = $this->MahasiswaAktif_model->getData();

		$this->load->view('template/admin/header.php');
		$this->load->view('template/admin/sidebar.php');
		$this->load->view('admin/mahasiswa_aktif.php', $data);
		$this->load->view('template/admin/footer.php');
	}

// 	public function import(){
// 		if($_SERVER['REQUEST_METHOD']=='POST'){
// $upload_status = $this->uploadDoc();
// if($upload_status!=false)
// {
// 	$inputFileName = 'asset/upload/imports/'.$upload_status;
// 	$inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);
// 	$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
// 	$spreadsheet = $reader->load($inputFileName);
// 	$sheet =$spreadsheet->getSheet(0);
// 	$count_Rows = 0;
// 	foreach ($sheet->getRowIterator() as $row) {
// 			$nim = $spreadsheet->getActiveSheet()->getCell('A'.$row->getRowIndex());
// 		$nama = $spreadsheet->getActiveSheet()->getCell('B'.$row->getRowIndex());
// 		$prodi = $spreadsheet->getActiveSheet()->getCell('C'.$row->getRowIndex());
// 		$data = array(
// 			'nim'=> $nim,
// 			'nama'=> $nama,
// 			'prodi'=>$prodi,
// 		);
// 		$this->db->insert('tbl_mhs_baru',$data);
// 		$count_Rows++;
// 	}
// 	$this->session->set_flashdata('succes','sukses imposrt data');
// 	redirect(base_url('MahasiswaBaru/index'));
// }
// else{
// 	$this->session->set_flashdata('error','gagal imposrt data');
// 	redirect(base_url('MahasiswaBaru/index'));
// }
// }
// else{
// 		$this->load->view('template/admin/header.php');
// 		$this->load->view('template/admin/sidebar.php');
// 		$this->load->view('admin/mahasiswa_baru.php');
// 		$this->load->view('template/admin/footer.php');
// }
// 		}
	
		
	
// 	public function uploadDoc(){
// 		$uploadPath = 'asset/upload/imports';
// 		if(!is_dir($uploadPath)){
// 			mkdir($uploadPath,0777,True);
// 		}
// 		$config['upload_path']=$uploadPath;
// 		$config['allowed_types']='csv|xlsx|xls';
// 		$config['max_size']=1000000;
// 		$this->load->library('upload',$config);
// 		$this->upload->initialize($config);
// 		if($this->upload->do_upload('upload_excel')){
// 			$fileData = $this->upload->data();
// 			return $fileData['file_name'];
// 		}
// 		else{
// 			return false;
// 		}
// 	}
// 	public function export(){
// 		$spreadsheet = new Spreadsheet();
// $activeWorksheet = $spreadsheet->getActiveSheet();
// foreach (range('A','D') as $kolom) {
// 	$spreadsheet->getActiveSheet()->getColumnDimension($kolom)->setAutoSize(true);
// }
// 	$activeWorksheet->setCellValue('A1','id');
// 		$activeWorksheet->setCellValue('B1','nim');
// 			$activeWorksheet->setCellValue('C1','nama');
// 				$activeWorksheet->setCellValue('D1','prodi');
// $mhs = $this->db->query("SELECT * FROM tbl_mhs_baru")->result_array();
// $x=2;
// foreach ($mhs as $row ) {
// 	$activeWorksheet->setCellValue('A'.$x, $row['id']);
// 		$activeWorksheet->setCellValue('B'.$x, $row['nim']);
// 			$activeWorksheet->setCellValue('C'.$x, $row['nama']);
// 				$activeWorksheet->setCellValue('D'.$x, $row['prodi']);
// 				$x++;
// }
// $whriter= new Xlsx($spreadsheet);
// $fileName='user_detail_export.xlsx';
// $whriter->save($fileName);
// 	}
public function import(){
	$upload_file= $_FILES['upload_file']['name'];
	$extension=pathinfo($upload_file,PATHINFO_EXTENSION);
	if($extension=='csv'){
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
	}else if(
		$extension=='xls'
	){
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
	}else{
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
	}
	$spreadsheet=$reader->load($_FILES['upload_file']['tmp_name']);
	$sheetdata=$spreadsheet->getActiveSheet()->toArray();
$sheetcount=count($sheetdata);
if ($sheetcount>1) {
	$data=array();
	for($i=1; $i < $sheetcount; $i++){
		$nim=$sheetdata[$i][1];
		$nama=$sheetdata[$i][2];
		$prodi=$sheetdata[$i][3];
		$thn_akademik=$sheetdata[$i][4];
		$data[]=array(
			'nim'=>$nim,
			'nama'=>$nama,
			'prodi'=>$prodi,
			'thn_akademik'=>$thn_akademik,
		);
}
$insertdata = $this->MahasiswaAktif_model->insert_batch($data);
if($insertdata){
	$this->session->set_flashdata('succes','sukses imposrt data');
	redirect(base_url('MahasiswaAktif/index'));
}else{
	$this->session->set_flashdata('error','sukses imposrt data');
	redirect(base_url('MahasiswaAktif/index'));
}
}
}
}