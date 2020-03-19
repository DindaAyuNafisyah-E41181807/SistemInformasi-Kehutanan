<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model(array('m_data'));//controller memangguil database dari model m_data 
				$this->load->helper('url');// menggunakan helper url 
				if($this->session->userdata('status') != "login"){
					redirect(base_url("login"));// terdapat session login di controller crud karena setelah login eksekusi berada di controller crud
				}
	}
// function index yang menampilkan crud pesanggem dan berhubungang dengan function tampil data di model m_data
	function index(){
		$data['pesanggem'] = $this->m_data->tampil_data()->result();// pada function index dibuat variabel $data yang menampilkan data tabel user vyang diambil dari model m_data
		$this->load->view( 'topbar');//memberikan view top bar
		$this->load->view( 'sidebar');// memberikan view sidebar
		$this->load->view('theme_crud',$data);// view them_crud adalah template yang didalamnya terdapat v_masuk (view yang di dalamnya terdapat tabel pesanggem) 

	}
//function hapus adalah function yang dipanggil saat kita klik aksi hapus di tabel admin
    function hapus($NIK){
		//function hapus menangkap NIK dari pengiriman NIK yang ditampilkan di view masuk
		$where = array('NIK' => $NIK);// kemudian diubah menjadi array
		$this->m_data->hapus_data($where,'pesanggem');//dan barulah kita kirim data array hapus tersebut pada m_data yang ditangkap oleh function hapus_data
		redirect('crud/index');// setelah itu langsung diarah kan ke function index yang menampilkan v_masuk
    }
//function edit adalah function yang dipanggil saat kita klik aksi edit di tabel pesanggem untuk masuk ke halamn edit data pesanggem atau v_editn
    function edit($NIK){
		//function edit menangkap NIK dari pengiriman NIKyang ditampilkan di v_masuk
        $where = array('NIK' => $NIK);// kemudian diubah menjadi array
        $data['pesanggem'] = $this->m_data->edit_data($where,'pesanggem')->result();//dan barulah kita kirim data array edit tersebut pada m_data dan ditangkap oleh function edit_data 
        $this->load->view('v_edit',$data);// kemudian setelah eksekusi ditrampilkan view v_edit untuk mengubah data
	}
//function tambh adalah function yang dipanggil saat kita klik aksi tambah data di tabel admin untuk masuk ke halamn tambah data admin atau v_input_admin
	function tambah(){
		$this->load->view('v_input');// apabila fuction tambah yang dieksekusi maka akan menampilkan view v_input untuk mengimputkan data
	}
//function tambah aksi adalah function yang dipanggil saat kita klik tambah pada halam tambah data pesanggem dan 
//function ini yang mengupdate hasil tambah data baru yang ditambahakan pada tabel admin
	function tambah_aksi(){
		$NIK = $this->input->post('NIK');//function melakukan post dari name field yang di inputkan
		$nama_pesanggem = $this->input->post('nama_pesanggem');//function melakukan post dari name field yang di inputkan
		$alamat = $this->input->post('alamat');//function melakukan post dari name field yang di inputkan
		$no_tlp = $this->input->post('no_tlp');//function melakukan post dari name field yang di inputkan
		$nama_lahan = $this->input->post('nama_lahan');//function melakukan post dari name field yang di inputkan
		$luas = $this->input->post('luas');//function melakukan post dari name field yang di inputkan
 
		$data = array(
			'NIK' => $NIK,// kemudian menjadikaanya array data yang ditambahakan untuk ditangkap oleh model
			'nama_pesanggem' => $nama_pesanggem,// kemudian menjadikaanya array data yang ditambahakan untuk ditangkap oleh model
			'alamat' => $alamat,// kemudian menjadikaanya array data yang ditambahakan untuk ditangkap oleh model
			'no_tlp' => $no_tlp,// kemudian menjadikaanya array data yang ditambahakan untuk ditangkap oleh model
			'nama_lahan' => $nama_lahan,// kemudian menjadikaanya array data yang ditambahakan untuk ditangkap oleh model
			'luas' => $luas// kemudian menjadikaanya array data yang ditambahakan untuk ditangkap oleh model
			);
		$this->m_data->input_data($data,'pesanggem');//dikirimkan ke model m_data yang ditangkap oleh function input_data
		redirect('crud/index');//apabila ekseskusi selesai akan di arahkan ke halaman crud/index (crud pesanggem)
	}
//function update adalah function yang dipanggil saat kita klik simpan pada halam edit data pesanggem dan 
//function ini yang mengupdate hasil edit data baru yang ditambahakan pada tabel pesanggem
	function update(){
		$NIK = $this->input->post('NIK');//function melakukan post dari name field yang di inputkan
		$nama_pesanggem = $this->input->post('nama_pesanggem');//function melakukan post dari name field yang di inputkan
		$alamat = $this->input->post('alamat');//function melakukan post dari name field yang di inputkan
		$no_tlp = $this->input->post('no_tlp');//function melakukan post dari name field yang di inputkan
		$nama_lahan = $this->input->post('nama_lahan');//function melakukan post dari name field yang di inputkan
		$luas = $this->input->post('luas');//function melakukan post dari name field yang di inputkan
		
		$data = array(

			'nama_pesanggem' => $nama_pesanggem,
			'alamat' => $alamat,
			'no_tlp' => $no_tlp,
			'nama_lahan' => $nama_lahan,
			'luas' => $luas
			//kemudian menjadikan data tersebut dalam bentuk array
			// kemudian menjadikaanya array data yang ditambahakan untuk ditangkap oleh model
			//yang dijadikan array khusus data yang bisa di edit 
			
		);
	
		$where = array(
			'NIK' => $NIK//variabel penentu NIK mana yang telah diupdate
		);
	
		$this->m_data->update_data($where,$data,'pesanggem');//SELANJUTNYA KITA KIRIMKAN KE M_DATA UPDATED DATA UNTUK MENGNGUBAH DATABASE  
		redirect('crud/index');// setelah itu langsung diarah kan ke function index yang menampilkan v_tampil
	}
//function lihat adalah function yang dipanggil saat kita klik aksi lihat di tabel pesanggem untuk melihat data pesanggem yang kita inginkan 
	function lihat($NIK){
		//function edit menangkap id dari pengiriman id yang ditampilkan di view tampil
        $where = array('NIK' => $NIK);// kemudian diubah menjadi array
        $data['pesanggem'] = $this->m_data->lihat_data($where,'pesanggem')->result();//dan barulah kita kirim data array edit tersebut pada m_data dan ditangkap oleh function lihat_data 
        $this->load->view('v_lihat',$data);// kemudian ditrampilkan view v_edit untuk melihatdata
	}
    
}