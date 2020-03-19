<?php 
//kelas yang dipanggil saat login
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');// memanggil model m_login

	}
//function yang menampilkan tampilan halaman untuk login
	function index(){
		$this->load->view('v_login');
	}
//function yang mengeksekusi keadaan setalah memasuuka username dan password kemudian klik button login
	function aksi_login(){
		$username = $this->input->post('username');// melakuakn post terhadap username yang di post
		$password = $this->input->post('password');// melakuakn post terhadap password yang di post
		$where = array(
			//kemudian inputan tersebut diubah menjadi array
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();// barulah cek apakah username dan password ada di dalam tabel admin
		//cek dilakukan di m_login dan di tangkap oleh fungsi cek_login

		if($cek > 0){
		//dan terdapat kondisi jika cek ada maka berikan session atas username tersebut jika sedang login
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("crud"));// dan kemudian diarahkan ke controller crud untuk dapat mengakses master pesanggem dan admin

		}else{// jika salah dan tidak sesuai dengan database maka tampilkan bahwa username dan password yang dimasukkan salah
			echo "Username dan password salah !";
		}
	}
// function yang digunakan saat eksekusi untu logout
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('dashboard'));// diarahkan kemabali ke halaman dashboard sebelum login
	}
}