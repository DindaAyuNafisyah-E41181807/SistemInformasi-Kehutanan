<?php 
//model untuk eksekusi login 
class M_login extends CI_Model{	
	//function untuk mengecek apakah password dan user ada di database atau tidak
	function cek_login($table,$where){	
		//function cek_login untuk memeriksa apakah data ada di database admin untuk bisa login	
		return $this->db->get_where($table,$where);
	}	
}