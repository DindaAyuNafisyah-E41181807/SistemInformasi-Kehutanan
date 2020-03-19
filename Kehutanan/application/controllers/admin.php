<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model(array('m_admin'));//controller memangguil database dari model m_admin
				$this->load->helper('url');// menggunakan helper url 
	}
// function index yang menampilkan crud admin dan berhubungang dengan function tampil admin di model m_admin
	function index(){
		$data['admin'] = $this->m_admin->tampil_admin()->result();// pada function index dibuat variabel $data yang dengan variabel admin yang didapat dari fction tampil data di model
		$this->load->view( 'topbar');// memberikan view topbar
		$this->load->view( 'sidebar');// memberikan view sidebar
		$this->load->view('theme_admin',$data);// view them_admin adalah template yang didalamnya terdapat v_admin (view yang didalamnya terdapat tabel admin)

	}
	
//function hapus adalah function yang dipanggil saat kita klik aksi hapus di tabel admin
    function hapus($id_admin){
		//function hapus menangkap id dari pengiriman id yang ditampilkan di v_admin
		$where = array('id_admin' => $id_admin);// id kemudian diubah menjadi array
		$this->m_admin->hapus_data($where,'admin');//dan barulah kita kirim data array hapus tersebut pada m_admin dengan function hapus_data 
		redirect('admin/index');// setelah itu langsung diarah kan kembali ke tampilan tabel admin di admin function index 
    }
 //function edit adalah function yang dipanggil saat kita klik aksi edit di tabel admin untuk masuk ke halamn edit data admin atau v_edit_admin
    function edit($id_admin){
		//function edit menangkap id dari pengiriman id yang ditampilkan di v_admin
        $where = array('id_admin' => $id_admin);// kemudian diubah menjadi array
        $data['admin'] = $this->m_admin->edit_data($where,'admin')->result();//dan barulah kita kirim data array edit tersebut pada m_admin dan ditanggapi oleh function edit_data 
        $this->load->view('v_edit_admin',$data);// kemudian setelah dieksekusi menampilkan view v_edit_admin untuk mengubah data
	}
//function tambh adalah function yang dipanggil saat kita klik aksi tambah data di tabel admin untuk masuk ke halamn tambah data admin atau v_input_admin
	function tambah(){
		$this->load->view('v_input_admin');// apabila fuction tambah yang dieksekusi maka akan menampilkan view v_input_admin untuk mengimputkan data
	}
//function tambah aksi adalah function yang dipanggil saat kita klik tambah pada halam tambah data admin dan 
//function ini yang mengupdate hasil tamabahn data baru yang ditambahakan pada tabel admin
	function tambah_aksi(){
		//dengan langkah
		$id_admin = $this->input->post('id_admin');//function melakukan post dari name field yang di inputkan 
		$username = $this->input->post('username');//function melakukan post dari name field yang di inputkan 
        $password = $this->input->post('password');//function melakukan post dari name field yang di inputkan 
        
		$data = array(
			'id_admin' => $id_admin,// kemudian menjadikaanya array data yang ditambahakan untuk ditangkap oleh model
			'username' => $username,// kemudian menjadikaanya array data yang ditambahakan untuk ditangkap oleh model
            'password' => $password// kemudian menjadikaanya array data yang ditambahakan untuk ditangkap oleh model
            
			);
		$this->m_admin->input_data($data,'admin');//dikirimkan ke model m_admin yang ditangkap oleh function input_data
		redirect('admin/index');//apabila ekseskusi selesai akan di arahkan ke halaman admin/index (crud admin)
	}

//function update adalah function yang dipanggil saat kita klik simpan pada halam edit data admin dan 
//function ini yang mengupdate hasil edit data baru yang ditambahakan pada tabel admin
	function update(){
		$id_admin = $this->input->post('id_admin');//function melakukan post dari name field yang di inputkan 
		$username = $this->input->post('username');//function melakukan post dari name field yang di inputkan 
        
		
		$data = array(

			'username' => $username,
			//kemudian menjadikan data tersebut dalam bentuk array
			// kemudian menjadikaanya array data yang ditambahakan untuk ditangkap oleh model
			//yang dijadikan array khusus data yang bisa di edit 
            
		);
	
		$where = array(
			'id_admin' => $id_admin//variabel penentu id mana yang telah diupdate
		);
	
		$this->m_admin->update_data($where,$data,'admin');//SELANJUTNYA KITA KIRIMKAN KE M_admin dan diterima oleh function UPDATED DATA UNTUK MENGNGUBAH DATABASE  
		redirect('admin/index');// setelah itu langsung diarah kan ke halaman admin/index (crud admin)
	}
//function lihat adalah function yang dipanggil saat kita klik aksi lihat di tabel admin untuk melihat data admin yang kita inginkan 
		function lihat($id_admin){
		//function edit menangkap id dari pengiriman id yang ditampilkan di v_admin
        $where = array('id_admin' => $id_admin);// kemudian diubah menjadi array
        $data['admin'] = $this->m_admin->lihat_data($where,'admin')->result();//dan barulah kita kirim data array lihat tersebut pada m_admin dengan function lihat _data 
        $this->load->view('v_lihat_admin',$data);// kemudian ditrampilkan view v_lihat_admin untuk melihat data admin yang diinginkan
	}
    
}