<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

   
     public function sumDataByFirst4Letters() {
        $query = $this->db->select('LEFT(nim, 4) AS first4Letters, COUNT(*) AS total')
                          ->from('tbl_mhs_baru')
                          ->group_by('first4Letters')
                          ->get();

        return $query->result();
    }
    public function get_data_by_category() {
        $query = $this->db->select('LEFT(thn_akademik, 4) AS first4Letters, COUNT(*) AS total')
                          ->from('tbl_mhs_aktif')
                          ->group_by('first4Letters')
                          ->get();
        return $query->result();
    }
      public function sumDataByprodi() {
        $query = $this->db->select('LEFT(nim, 4) AS first4Letters ,LEFT(prodi, 4) AS pro, COUNT(*) AS total')
                          ->from('tbl_mhs_baru')
                          ->group_by('first4Letters, pro')
                          ->get();

        return $query->result();
    }
      public function sumDataByaktif() {
        $query = $this->db->select('LEFT(prodi, 4) AS pro ,thn_akademik AS thn, COUNT(*) AS total')
                          ->from('tbl_mhs_aktif')
                          ->group_by('pro, thn')
                          ->get();

        return $query->result();
    }

}