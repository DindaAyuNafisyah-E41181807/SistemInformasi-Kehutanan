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
        <form action="<?php echo base_url(). 'admin/tambah_aksi'; //method di arahkan ke function tambah aksi di controller crud?>" method="post">
        <div class="container container-fluid-md">
        <div class="row justify-content-center mt-4">
        <div class="col-lg-9 pt-4">
        <div class="modal-header">
            <div class="card p shadow"> 
                <div class="card-header text-center text-light bg-info">
                    <h4 class="modal-title">Tambah Data Admin</h4>
            </div>
        </div>
        </div>
       
        <!-- Modal body -->
        <div class="modal-body">
        <div class="card-body p-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">ID ADMIN : </span>
                    <input type="text" name="id_admin">
                </div>
            </div>
                        
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text">Username: </span>
                <input type="text" name="username">
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Password:  </span>
                    <input type="text" name="password">
                </div>
            </div>

        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-warning ml-2"><?php echo anchor('admin/index/','Kembali');?></button>
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