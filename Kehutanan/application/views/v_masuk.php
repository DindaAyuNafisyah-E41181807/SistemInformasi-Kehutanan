<!DOCTYPE html>
<html lang="en">
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Table Pesanggem Perhutani Kabupaten Jember</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><button type="button" class="btn btn-dark"><?php echo anchor('crud/tambah','Tambah Data'); // funtion anchor digunakan untukhyperlink ke halam lain misalnya karena tambah data berupa linkn?></button></li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Nama Lahan</th> 
									<th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($pesanggem as $u){ //mengganti variabel $user menjadi variabel $ u pada view agar tidak tertukar 
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $u->NIK ?></td>
                                    <td><?php echo $u->nama_pesanggem ?></td>
									<td><?php echo $u->alamat?></td>
                                    <td><?php echo $u->nama_lahan?></td>
									<td>
									<button type="button" class="btn btn-success"><?php echo anchor('crud/edit/'.$u->NIK,'Edit');//link ini bertrujuan untuk memanggil function edit dan berisi pengiriman data id pada segment 3 nya
				 					// funtion anchor digunakan untukhyperlink ke halam lain misalnya karena edit berupa linkn ?></button>
							  		<button type="button" class="btn btn-danger"><?php echo anchor('crud/hapus/'.$u->NIK,'Hapus');//link ini bertrujuan untuk memanggil function hapus dan berisi pengiriman data id pada segment 3 nya
                                      // funtion anchor digunakan untukhyperlink ke halam lain misalnya karena hapus berupa link ?></button>
                                    <button type="button" class="btn btn-warning"><?php echo anchor('crud/lihat/'.$u->NIK,'Lihat');//link ini bertrujuan untuk memanggil function hapus dan berisi pengiriman data id pada segment 3 nya
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