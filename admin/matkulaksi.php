<?php
include 'header.php';
if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == 'tambah') {
?>

        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <h4>MATAKULIAH/ TAMBAH DATA</h4>
                </ol>
            </div>

            <?php

            $carikode = $db->query("SELECT max(kd_matkul) FROM tbl_matkul");
            while ($datakode = mysqli_fetch_array($carikode, MYSQLI_BOTH)) {
                if ($datakode) {
                    $nilaikode = substr($datakode[0], 1);
                    $kode = (int) $nilaikode;
                    $kode = $kode + 1;
                    $kode_otomatis = "M" . str_pad($kode, 2, "0", STR_PAD_LEFT);
                } else {
                    $kode_otomatis = "M01";
                }
            }


            ?>

            <div class="panel-container">
                <div class="bootstrap-tabel">
                    <form action="matkulproses.php?proses=prosestambah" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">ID Matakuliah</label>
                            <input type="text" name="kd_matkul" class="form-control" value="<?php echo $kode_otomatis ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Matakuliah</label>
                            <input type="text" name="nama_matkul" class="form-control" value="" placeholder="nama matakuliah">
                        </div>
                        <div class="form-group">
                            <label for="">Dosen Pengampu</label>
                            <input type="text" name="nama_dosen" class="form-control" value="" placeholder="nama dosen">
                        </div>

                        <div class="modal-footer">
                            <a href="matkulnilai.php" class="btn btn-primary">Kembali</a>
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    <?php } elseif ($_GET['aksi'] == 'ubah') { ?>
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <h4>MATAKULIAH/ UBAH</h4>
                </ol>
            </div>

            <div class="panel-container">
                <div class="bootstrap-tabel">
                    <?php
                    $data = $db->query("SELECT * From tbl_matkul where kd_matkul='$_GET[kode]'");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>

                        <form action="matkulproses.php?proses=ubah" method="post" enctype="multipart/form-data">
                            <div>
                                <label for="">ID Matakuliah</label>
                                <input type="text" name="kd_matkul" class="form-control" value="<?php echo $d['kd_matkul'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Matakuliah</label>
                                <input type="text" name="nama_matkul" class="form-control" value="<?php echo $d['nama_matkul'] ?>" placeholder="nama matakuliah">
                            </div>
                            <div class="form-group">
                                <label for="">Dosen Pengampu</label>
                                <input type="text" name="nama dosen" class="form-control" value="<?php echo $d['nama_dosen'] ?>" placeholder="Dosen Pengampu">
                            </div>

                            <div class="modal-footer">
                                <a href="matkulnilai.php" class="btn btn-primary">Kembali</a>
                                <input type="submit" class="btn btn-success" value="Ubah">
                            </div>

                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
<?php
    }
}
?>