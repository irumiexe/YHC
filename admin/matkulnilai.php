<?php
include 'header.php';
?>

<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <h4>INPUT MATAKULIAH</h4>
        </ol>
    </div>
    <div class="panel-container">
        <div class="bootstrap-tabel">
            <a href="matkulaksi.php?aksi=tambah" class="btn btn-primary">Tambah Matakuliah</a>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Kode Matakuliah</th>
                            <th class="text-center">Nama Matakuliah</th>
                            <th class="text-center">Dosen Pengampu</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $hasil = $db->query("SELECT * from tbl_matkul order by kd_matkul asc");
                        $no = 1;
                        while ($d = $hasil->fetch_array()) {
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $d['kd_matkul'] ?></td>
                                <td class="text-center"><?php echo $d['nama_matkul'] ?></td>
                                <td class="text-center"><?php echo $d['nama_dosen'] ?></td>
                                <td class="text-center">
                                    <a href="matkulaksi.php?kode=<?php echo $d['kd_matkul'] ?>&aksi=ubah" class="btn btn-success">Ubah</a>
                                    <a href="matkulproses.php?kode=<?php echo $d['kd_matkul'] ?>&proses=proseshapus" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>