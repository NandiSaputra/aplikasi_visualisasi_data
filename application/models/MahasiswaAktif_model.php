<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MahasiswaAktif_model extends CI_Model {
	public function getData()
	{
$query = $this->db->get('tbl_mhs_aktif');
return $query->result_array();

	}
	public function insert_batch($data){
		$this->db->insert_batch('tbl_mhs_aktif',$data);
		if($this->db->affected_rows()>0){
			return 1;
		}else{
			return 0;
		}
	}
 public function countMahasiswa(){
  $query = $this->db->get('tbl_mhs_aktif');
  return $query->num_rows();
 }
}