<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_dashboard');
    }

    public function index() {
        $data['title'] = 'D A S H B O A R D';
        $this->template->load('MasterLayout','r-dashboard',$data);
    }
}