<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distrik extends MX_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_distrik');
    }

    public function index() {
        $data['title'] = 'Distrik';
        $data['distrik'] = $this->M_distrik->GetAllDistrik();

        $this->template->load('MasterLayout','r-distrik',$data);
    }
}