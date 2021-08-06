<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends MX_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kategori');
    }

    public function index() {
        $data['title'] = 'Kategori Bantuan';
        $data['kat'] = $this->M_kategori->GetAllKategori();

        $this->template->load('MasterLayout','r-kategori',$data);
    }
}