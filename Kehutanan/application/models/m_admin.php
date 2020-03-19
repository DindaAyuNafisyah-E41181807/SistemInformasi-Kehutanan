<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 // model untuk crud admin
class M_admin extends CI_Model{
 
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  //fuction untuk menampilkan tabel admin
  public function tampil_admin(){
    return $this->db->get('admin');
  }
  
  //function untuk menginputkan data admin
  function input_data($data,$table){
		$this->db->insert($table,$data);
	}
   //function untuk menghapus data admin
  function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
  }
    //function untuk mengedit data admin
  function edit_data($where,$table){		
    return $this->db->get_where($table,$where);
  }
    //function untuk mengupdate tabel admin setelah dilakukan edit data
  function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
  }	
    //function untuk melihat data admin yang diinginkan
  function lihat_data($where,$table){		
    return $this->db->get_where($table,$where);
  }

}