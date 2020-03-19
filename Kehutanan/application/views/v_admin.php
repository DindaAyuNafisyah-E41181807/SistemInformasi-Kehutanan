<!DOCTYPE html>
<html lang="en">
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Table Pesanggem Perhutani Kabupaten Jember</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><button type="button" class="btn btn-dark">
                <?php echo anchor('admin/tambah','Tambah Data');
                //ketika klik tambah data akan terhubung pada cobtroller dan dieksekusi oleh functin tamabh?></button></li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>ID Admin</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($admin as $u){ //mengganti variabel $admin menjadi variabel $ u pada view agar tidak tertukar 
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $u->id_admin ?></td>
                                    <td><?php echo $u->username ?></td>
									<td><?php echo $u->password?></td>
									<td>
									<button type="button" class="btn btn-success"><?php echo anchor('admin/edit/'.$u->id_admin,'Edit');//link ini bertrujuan untuk memanggil function edit dan berisi pengiriman data nik pada segment 3 nya
				 					// funtion anchor digunakan untukhyperlink ke halam lain misalnya karena edit berupa linkn ?></button>
							  		<button type="button" class="btn btn-danger"><?php echo anchor('admin/hapus/'.$u->id_admin,'Hapus');//link ini bertrujuan untuk memanggil function hapus dan berisi pengiriman data nik pada segment 3 nya
                                      // funtion anchor digunakan untukhyperlink ke halam lain misalnya karena hapus berupa link ?></button>
                                    <button type="button" class="btn btn-warning"><?php echo anchor('admin/lihat/'.$u->id_admin,'Lihat');//link ini bertrujuan untuk memanggil function lihat dan berisi pengiriman data nik pada segment 3 nya
							  		// funtion anchor digunakan untukhyperlink ke halam lain misalnya karena hapus berupa link ?></button>
									</td>
								</tr>
								<?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</div>
</body>
</html>