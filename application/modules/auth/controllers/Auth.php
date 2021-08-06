<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {
    function  __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['title'] = 'APP | Login';
        $data['opd'] = $this->db->query("SELECT * FROM tb_pd ORDER BY tb_pd.pd_id ")->result();
        $this->load->view('login',$data);
    }

    function login_post()
    {
		$nama = $this->input->post('nama');
		$sandi = md5($this->input->post('sandi'));
		if (isset($nama, $sandi)) {
			
			if($this->M_auth->cek($nama, $sandi) == TRUE){
				$admin = $this->M_auth->getAdmin($nama, $sandi);
				$data['nama'] = $nama;
				$data['sandi'] = $sandi;
				//$data['id_admin'] = $admin->id_admin;
				$data['level'] = $admin->level;
				$data['nama_lengkap'] = $admin->nama_lengkap;
				$data['id_pd'] = $admin->id_pd;
				$data['login'] = TRUE;
				$this->session->set_userdata($data);

                if ($this->session->userdata('level')=='1'){
				    redirect('Dashboard');
			    } elseif ($this->session->userdata('level')=='2'){
                
                    redirect('Dashboard');
  			    } elseif ($this->session->userdata('level')=='3'){
                
                    redirect('Dashboard');
  			    } elseif ($this->session->userdata('level')=='4'){
                
                    redirect('Dashboard');
  			    } elseif ($this->session->userdata('level')=='5'){
                
                    redirect('Dashboard');
  			    }
                
			} else {
				$this->session->set_flashdata('message', 'Nama dan sandi anda salah');
				redirect('Auth');
			}
			
		} else {
			redirect('Auth');
		}
	}


    function cek_login($user_level = ""){
		$status_login = $this->session->userdata('login');
		if (!isset($status_login) || $status_login != TRUE){
			redirect('Auth');
		} else {
            $this->nama = $this->session->userdata('nama');
            $this->global ['nama'] = $this->nama;
			if ($user_level) {
				if (is_array($user_level)) {
					if (!in_array($this->session->userdata('level'), $user_level)) {
						redirect('Dashboard');
					}
				} else {
					if ($this->session->userdata('level') != $user_level){
						redirect('Auth');
					}
				}
			}
		}
	}

    function logout() {
        $this->session->sess_destroy();
        //helper_log("logout", "Logout dari Applikasi");
		redirect('Auth', 'refresh');
    }
}