<?php
//kelas yang dipanggil pertama kali sebagai halam pertama yang bisa dilihat
Class Dashboard extends CI_Controller {

    function __construct(){
		parent::__construct();		
        $this->load->model('m_data');// berhubungan dengan model m_data
        $this->load->helper('url');// menggunakan helper url
               
	}
//function index adalah function yang menampilkan view dashboard sebelum login
    public function index () {
        $data['kehutanan'] = $this->m_data->tampil_data()->result();
        $this->load->view( 'topbar');
        $this->load->view( 'sidebar_not');
        $this->load->view( 'tamplate', $data);// view tamplate adalah view yang membawa tampilan tabel pesanggem tanpa aksi (v_dashboard)
    }


}
