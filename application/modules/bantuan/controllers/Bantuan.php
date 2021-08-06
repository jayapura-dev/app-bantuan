<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan extends MX_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array(
            'M_bantuan',
            'kategori/M_kategori',
            'distrik/M_distrik',
            'pd/M_pd');
    }

    public function kelompok() {
        $data['title'] = 'Data Bantuan Fisik';
        $data['bantuan'] = $this->M_bantuan->GetAllBantuan();

        $this->template->load('MasterLayout','r-bantuan-kel',$data);
    }

    public function create_bantuan_kelompok() {
        $data['title'] = 'Tambah Bantuan';
        $data['kategori'] = $this->M_kategori->GetAllKategori();
        $data['distrik'] = $this->M_distrik->GetAllDistrik();
        $data['pd'] = $this->M_pd->GetAllPd();

        $this->template->load('MasterLayout','c-bantuan-kel',$data);
    }
}