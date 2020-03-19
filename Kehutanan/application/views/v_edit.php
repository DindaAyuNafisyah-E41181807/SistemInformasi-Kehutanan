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
        <?php foreach($pesanggem as $u){ //mengganti variabloe pasing dari controller?>
        <form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
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