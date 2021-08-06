<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {
    function GetAllKategori() {
        $query = $this->db->get('tb_kategori');
        return $query->result();
    }
}