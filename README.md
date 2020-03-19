# Dokumentasi Sistem Informasi Berbasis Web Framework Sederhana dengan Tema Kehutanan

## WEBSITE ADMIN INPUT DATA PESANGGEM
Sistem Informasi Kehutanan CodeIgniter 3.0. Website sederhana ini merupakan tugas studi kasus workshop web framework mengenai implementasi crud di dalam mvc.

## Login
Login hanya bisa dilakukan oleh ADMIN
Username :admin1
Password :admin1

## Fitur Website
*> login
*> Master Pesanggem
*> Admin

Dalam pembuatan web sederhana ini saya mengimplementasikan CRUD ke dalam bentuk MVC (Model,View,Controler) yaitu dengan membuat sebuah web admin yang dapat menginputkan data. Tema yang saya angkat kali ini adalah Kehutanan sehingga saya akan membuat sebuah web admin yang berfungsi untuk pendataan pesanggem atau petani yang bekerja di hutan milik Perhutani.

## Penerapan CRUD di dalam MVC 
web tema kehutana yang saya buat memiliki fitur utama yaitu Master Pesanggem.Fitur pesanggem tersebut menerapkan CRUD sehingga nantinya admin yang login ke dalam web tersebut dapat menambahkan, mengedit atau mengupdate, melihat dan menghapus data.

### Fitur Master Pesanggem 
didalam Master pesanggem admin yang login dapat menambah ,mengedit , menghapus, dan melihat data pesanggem yang semuanya dikemas dalam bentuk MVC.

#### a. Model Master Pesanggem

MODEL, Berikut model yang digunakan untuk membangun CRUD di master pesanggem dan Model ini digunakan untuk semua fitur yang ada di Master Pesanggem. Model sendiri merupakan penghubung untuk database yang kita gunakan.

```
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
 ```
 #### b. View pada master pesanggem
 VIEW, Berikut view yang dibuat untuk menampilkan halaman untuk menambahakan, menedit dan melihat data. berikut adalah view yang dibuat pada fitur master pesanggem 
 
 ##### *> View untuk tambah data pesanggem
 ```      
        <!-- Modal Header -->
        <form action="<?php echo base_url(). 'crud/tambah_aksi'; //method di arahkan ke function tambah aksi di controller crud?>" method="post">
        <div class="container container-fluid-md">
        <div class="row justify-content-center mt-4">
        <div class="col-lg-9 pt-4">
        <div class="modal-header">
            <div class="card p shadow"> 
                <div class="card-header text-center text-light bg-info">
                    <h4 class="modal-title">Tambah Data Pesanggem</h4>
            </div>
        </div>
        </div>
       
        <!-- Modal body -->
        <div class="modal-body">
        <div class="card-body p-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">NIK : </span>
                    <input type="text" name="NIK">
                </div>
            </div>
                        
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text">Nama Pesanggem: </span>
                <input type="text" name="nama_pesanggem">
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Alamat :  </span>
                    <input type="text" name="alamat">
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Nomer Telpon :</span>
                    <input type="text" name="no_tlp">
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Nama Lahan : </span>
                    <input type="text" name="nama_lahan">
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Luas Lahan : </span>
                    <input type="text" name="luas">
                </div>
            </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-warning ml-2"><?php echo anchor('crud/index/','Kembali');?></button>
        <input type="submit" value="Tambah" class="btn btn-primary font-m-med">
        </div>
    </div>
  </div>
  </form>
  </form>
</div>
</div>

</body>
</html>
```
##### *> View untuk edit data pesanggem
```
        <!-- Modal Header -->
        <?php foreach($pesanggem as $u){ //mengganti variabloe pasing dari controller?>
        <form action="<?php echo base_url(). 'crud/update'; ?>" method="post">// setelah klik simpan perunahan akan diarahkan ke      //crud dan ditangkap oleh function update
        <div class="container container-fluid-md">
        <div class="row justify-content-center mt-4">
        <div class="col-lg-9 pt-4">
        <div class="modal-header">
            <div class="card p shadow"> 
                <div class="card-header text-center text-light bg-info">
                    <h4 class="modal-title">Edit Data Pesanggem</h4>
            </div>
        </div>
        </div>
       
        <!-- Modal body -->
        <div class="modal-body">
        <div class="card-body p-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text">Nama Pesanggem: </span>
                <input type="hidden" name="NIK" value="<?php echo $u->NIK ?>">
                <input type="text" name="nama_pesanggem" value="<?php echo $u->nama_pesanggem ?>">
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Alamat :  </span>
                    <input type="text" name="alamat" value="<?php echo $u->alamat ?>">
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Nomer Telpon :</span>
                    <input type="text" name="no_tlp" value="<?php echo $u->no_tlp ?>">
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Nama Lahan : </span>
                    <input type="text" name="nama_lahan" value="<?php echo $u->nama_lahan ?>">
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Luas Lahan : </span>
                    <input type="text" name="luas" value="<?php echo $u->luas?>">
                </div>
            </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-warning ml-2"><?php echo anchor('crud/index/','Kembali');?></button>
        <input type="submit" value="Simpan" class="btn btn-primary font-m-med">
        </div>
    </div>
  </div>
  </form>
  </form>
</div>
</div>
<?php } ?>
</body>
</html>
 ```
 ##### *> View untuk lihat data pesanggem
 
 ```
        <!-- Modal Header -->
        <?php foreach($pesanggem as $u){ //mengganti variabloe pasing dari controller?>
        <div class="container container-fluid-md">
        <div class="row justify-content-center mt-4">
        <div class="col-lg-9 pt-4">
        <div class="modal-header">
            <div class="card p shadow"> 
                <div class="card-header text-center text-light bg-info">
                    <h4 class="modal-title">Lihat Data Pesanggem</h4>
            </div>
        </div>
        </div>
       
        <!-- Modal body -->
        <div class="modal-body">
        <div class="card-body p-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">NIK : <?php echo $u->NIK ?></span>
                </div>
            </div>
                        
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text">Nama Pesanggem: <?php echo $u->nama_pesanggem ?></span>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Alamat :  <?php echo $u->alamat ?></span>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Nomer Telpon :<?php echo $u->no_tlp ?></span>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Nama Lahan : <?php echo $u->nama_lahan ?></span>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Luas Lahan : <?php echo $u->luas?></span>
                </div>
            </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-warning ml-2"><?php echo anchor('crud/index/','Kembali');?></button>//
        </div>
    </div>
  </div>
  </form>
  </form>
</div>
</div>
<?php } ?>
</body>
</html>
 ```
#### c. Controller pada master pesanggem
CONTROLLER,  Berikut controller yang dibuat untuk menghubungkan vie dan model pada fitur master pesanggem agar dapat menambahakan, mengedit,menghapus dan melihat data.

```
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
 ```
           
           

## Penggunaan Tamplate dan Boostrap
Dalam pembuatan web sederhanai ini saya menggunakan tamplate untuk memperindah tampilan web saya, berikut penerapan penggunaan tamplate pada codeigniter :

### Tamplate untuk dashboard 
Berikut syntax untuuk menggunakan tamplate untuk memperindah tampilan website kita :

```
<!DOCTYPE html>
<html>
	<!--Tamplate untuk dashboard sebelum login-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Perhutani Jember</title>
		<!--link css-->
	<link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/assets/css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
	<!--isi di dalam template dashboard adalah tabel pesanggem tanpa aksi yaitu berada di v_dashboard-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<?php $this->load->view('v_dashboard')?>

	<!--link js-->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
	<script src="<?php echo base_url();?>/assets/js/scripts.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
	<script src="<?php echo base_url();?>/assets/demo/datatables-demo.js"></script>
	<script src="<?php echo base_url();?>/assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/chart.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/chart-data.js"></script>
	<script src="<?php echo base_url();?>/assets/js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>/assets/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>/assets/js/custom.js"></script>
	<script>
		window.onload = function () {
			var chart1 = document.getElementById("line-chart").getContext("2d");
			window.myLine = new Chart(chart1).Line(lineChartData, {
				responsive: true,
				scaleLineColor: "rgba(0,0,0,.2)",
				scaleGridLineColor: "rgba(0,0,0,.05)",
				scaleFontColor: "#c5c7cc"
			});
		};
	</script>

</body>

</html>
```
