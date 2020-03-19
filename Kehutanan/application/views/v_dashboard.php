<!DOCTYPE html>
<html lang="en">
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Table Pesanggem Perhutani Kabupaten Jember</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
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
                                    <th>Nomor Tlp</th>
                                    <th>Nama Lahan</th>
                                    <th>Luas Lahan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($kehutanan as $u){ //mengganti variabel $user menjadi variabel $ u pada view agar tidak tertukar 
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $u->NIK ?></td>
                                    <td><?php echo $u->nama_pesanggem ?></td>
                                    <td><?php echo $u->alamat?></td>
                                    <td><?php echo $u->no_tlp?></td>
                                    <td><?php echo $u->nama_lahan?></td>
                                    <td><?php echo $u->luas?></td>
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