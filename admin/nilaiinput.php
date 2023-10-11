<?php
include 'header.php';
?>

<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <h4>INPUT NILAI MATAKULIAH</h4>
        </ol>
    </div>
    <div class="panel-container">
        <div class="bootstrap-tabel">
            <a href="nilaiaksi.php?aksi=tambah" class="btn btn-primary">Tambah Nilai </a>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Nama Mahasiswa</th>
                            <th class="text-center">Nama Matakuliah</th>
                            <th class="text-center">Nilai</th>
                            <th class="text-center">Grade</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $hasil = $db->query("SELECT * from tbl_nilai 
                                        inner join tbl_mhs on tbl_nilai.nim = tbl_mhs.nim
                                        inner join tbl_matkul on tbl_nilai.kd_matkul = tbl_matkul.kd_matkul
                                    ");
                        $no = 1;
                        while ($d = $hasil->fetch_array()) {
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $d['nama_mhs'] ?></td>
                                <td class="text-center"><?php echo $d['nama_matkul'] ?></td>
                                <td class="text-center"><?php echo $d['nilai'] ?></td>
                                
                                <td class="text-center">
                                    <?php
                                        if ($d['nilai'] >= 85) {
                                            echo "A";
                                        } 
                                        else if ($d['nilai']>= 75 and $d['nilai' < 80]) {
                                            echo "B";
                                        }
                                        else if ($d['nilai']>= 65 and $d['nilai' < 75]) {
                                            echo "C";
                                        }
                                        else if ($d['nilai']>= 50 and $d['nilai' < 65]) {
                                            echo "D";
                                        }
                                        else if ($d['nilai' < 50]) {
                                            echo "E";
                                        }
                                        
                                    ?>
                                </td>


                                <td class="text-center">
                                    <a href="nilaiaksi.php?kode=<?php echo $d['kd_matkul'] ?>&aksi=ubah" class="btn btn-success">Ubah</a>
                                    <a href="nilaiproses.php?kode=<?php echo $d['kd_matkul'] ?>&proses=proseshapus" class="btn btn-danger">Hapus</a>
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