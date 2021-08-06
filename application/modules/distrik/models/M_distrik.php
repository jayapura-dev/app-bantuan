<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_distrik extends CI_Model {
    function GetAllDistrik() {
        $query = $this->db->get('tb_distrik');
        return $query->result();
    }
}