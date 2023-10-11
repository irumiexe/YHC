<?php
include 'header.php';
if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == 'tambah') {
?>

        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <h4>DATA MAHASISWA/ TAMBAH DATA</h4>
                </ol>
            </div>

            <?php

            $carikode = $db->query("SELECT max(nim) FROM tbl_mhs");
            while ($datakode = mysqli_fetch_array($carikode, MYSQLI_BOTH)) {
                if ($datakode) {
                    $nilaikode = substr($datakode[0], 1);
                    $kode = (int) $nilaikode;
                    $kode = $kode + 1;
                    $kode_otomatis = "A" . str_pad($kode, 2, "0", STR_PAD_LEFT);
                } else {
                    $kode_otomatis = "A01";
                }
            }


            ?>

            <div class="panel-container">
                <div class="bootstrap-tabel">
                    <form action="mhsproses.php?proses=prosestambah" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">NIM</label>
                            <input type="text" name="nim" class="form-control" value="<?php echo $kode_otomatis ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Mahasiswa</label>
                            <input type="text" name="nama_mhs" class="form-control" value="" placeholder="nama mahasiswa">
                        </div>
                        <div class="form-group">
                            <label for="">Program Studi</label>
                            <input type="text" name="studi" class="form-control" value="" placeholder="program studi">
                        </div>
                        <div class="form-group">
                            <label for="">No HP</label>
                            <input type="text" name="nohp" class="form-control" value="" placeholder="nomor handphone">
                        </div>

                        <div class="modal-footer">
                            <a href="mhsinput.php" class="btn btn-primary">Kembali</a>
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
                    <h4>MAHASISWA/ UBAH</h4>
                </ol>
            </div>

            <div class="panel-container">
                <div class="bootstrap-tabel">
                    <?php
                    $data = $db->query("SELECT * From tbl_mhs where nim='$_GET[kode]'");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>

                        <form action="mhsproses.php?proses=ubah" method="post" enctype="multipart/form-data">
                            <div>
                                <label for="">NIM</label>
                                <input type="text" name="nim" class="form-control" value="<?php echo $d['nim'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Mahasiswa</label>
                                <input type="text" name="nama_mhs" class="form-control" value="<?php echo $d['nama_mhs'] ?>" placeholder="nama mahasiswa">
                            </div>
                            <div class="form-group">
                                <label for="">Program Studi</label>
                                <input type="text" name="studi" class="form-control" value="<?php echo $d['studi'] ?>" placeholder="Semester">
                            </div>
                            <div class="form-group">
                                <label for="">No HP</label>
                                <input type="text" name="nohp" class="form-control" value="<?php echo $d['nohp'] ?>" placeholder="Semester">
                            </div>

                            <div class="modal-footer">
                                <a href="mhsinput.php" class="btn btn-primary">Kembali</a>
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