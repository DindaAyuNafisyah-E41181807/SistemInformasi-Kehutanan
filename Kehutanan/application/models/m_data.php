<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 //model yang diambil untuk crud pesanggem
class M_data extends CI_Model{
 
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  //fuction untuk menampilkan tabel pesanggem
  public function tampil_data(){
    return $this->db->get('pesanggem');
  }
  
  //function untuk menginputkan data pesanggem
  function input_data($data,$table){
		$this->db->insert($table,$data);
	}
  //function untuk menghapus data pesanggem
  function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
  }
   //function untuk mengedit data pesanggem
  function edit_data($where,$table){		
    return $this->db->get_where($table,$where);
  }
  //function untuk mengupdate tabel pesanggem setelah dilakukan edit data
  function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
  }	
  //function untuk melihat data pesanggem yang diinginkan 
  function lihat_data($where,$table){		
    return $this->db->get_where($table,$where);
  }

}
 