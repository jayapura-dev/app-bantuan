<?php
class M_auth extends CI_Model {
	var $table = 'tb_user';

	function GetPdById() {
		$query = $this->db->get_where('tb_pd',['id_pd' => $id]);
		return $query->row_array();
	}

	//cek user dan sandi di database
	function cek($user, $sandi) {
		$query = $this->db->get_where($this->table, array(
			'nama' => $user,
			'sandi' => $sandi,
			'status' => 'aktif'), 1, 0);
		if ($query->num_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}
	
	//untuk mendapatkan data admin yg login
	function getAdmin($user, $sandi){
		return $query = $this->db->get_where($this->table, array(
			'nama' => $user,
			'sandi' => $sandi,
			'status' => 'aktif'), 1, 0)->row();
	}
}
