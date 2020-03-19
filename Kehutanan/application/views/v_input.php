<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

      
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