<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pd extends CI_Model {
    function GetAllPd() {
        $query = $this->db->get('tb_pd');
        return $query->result();
    }
}