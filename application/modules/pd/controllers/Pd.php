<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pd extends MX_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pd');
    }

    public function index() {
        $data['title'] = 'Perangkat Daerah';
        $data['pd'] = $this->M_pd->GetAllPd();

        $this->template->load('MasterLayout','r-pd',$data);
    }
}