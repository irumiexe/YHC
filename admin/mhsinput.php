<?php
include 'header.php';
?>

<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <h4>INPUT DATA MAHASISWA</h4>
        </ol>
    </div>
    <div class="panel-container">
        <div class="bootstrap-tabel">
            <a href="mhsaksi.php?aksi=tambah" class="btn btn-primary">Tambah Data</a>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">NIM</th>
                            <th class="text-center">Nama Mahasiswa</th>
                            <th class="text-center">Program Studi</th>
                            <th class="text-center">No HP</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $hasil = $db->query("SELECT * from tbl_mhs order by nim asc");
                        $no = 1;
                        while ($d = $hasil->fetch_array()) {
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $d['nim'] ?></td>
                                <td class="text-center"><?php echo $d['nama_mhs'] ?></td>
                                <td class="text-center"><?php echo $d['studi'] ?></td>
                                <td class="text-center"><?php echo $d['nohp'] ?></td>
                                <td class="text-center">
                                    <a href="mhsaksi.php?kode=<?php echo $d['nim'] ?>&aksi=ubah" class="btn btn-success">Ubah</a>
                                    <a href="mhsproses.php?kode=<?php echo $d['nim'] ?>&proses=proseshapus" class="btn btn-danger">Hapus</a>
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