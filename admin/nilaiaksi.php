<?php
include 'header.php';
if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == 'tambah') {
?>

        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <h4>DATA NILAI/ TAMBAH DATA</h4>
                </ol>
            </div>

            <div class="panel-container">
                <div class="bootstrap-tabel">
                    <form action="nilaiproses.php?proses=prosestambah" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Nama Mahasiswa</label>
                            <br>
                            <select name="nim">
                                <option>---</option>
                                <?php
                                include 'assets/conn/config.php';
                                $hasil = $db->query("SELECT * FROM tbl_mhs") or die(mysqli_error($db));
                                while ($data = mysqli_fetch_array($hasil)) {
                                    echo "<option value=$data[nim]> $data[nama_mhs] </option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Matakuliah</label>
                            <br>
                            <select name="kd_matkul">
                                <option>---</option>
                                <?php
                                include 'assets/conn/config.php';
                                $hasil = $db->query("SELECT * FROM tbl_matkul") or die(mysqli_error($db));
                                while ($data = mysqli_fetch_array($hasil)) {
                                    echo "<option value=$data[kd_matkul]> $data[nama_matkul] </option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nilai</label>
                            <input type="text" name="nilai" class="form-control" value="" placeholder="nilai">
                        </div>

                        <div class="modal-footer">
                            <a href="nilaiinput.php" class="btn btn-primary">Kembali</a>
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
                    <h4>DATA NILAI/ UBAH DATA</h4>
                </ol>
            </div>
            <div class="panel-container">
                <div class="bootstrap-tabel">
                    <form action="nilaiproses.php?proses=prosestambah" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">NIM Mahasiswa</label>
                            <br>
                            <select name="nim">
                                <option>---</option>
                                <?php
                                include 'assets/conn/config.php';
                                $hasil = $db->query("SELECT * FROM tbl_mhs") or die(mysqli_error($db));
                                while ($data = mysqli_fetch_array($hasil)) {
                                    echo "<option value=$data[nim]> $data[nama_mhs] </option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kode Matakuliah</label>
                            <br>
                            <select name="kd_matkul">
                                <option>---</option>
                                <?php
                                include 'assets/conn/config.php';
                                $hasil = $db->query("SELECT * FROM tbl_matkul") or die(mysqli_error($db));
                                while ($data = mysqli_fetch_array($hasil)) {
                                    echo "<option value=$data[kd_matkul]> $data[nama_matkul] </option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nilai</label>
                            <input type="text" name="nilai" class="form-control" value="" placeholder="nilai">
                        </div>

                        <div class="modal-footer">
                            <a href="nilaiinput.php" class="btn btn-primary">Kembali</a>
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>
                </div>
            </div>
        </div>
<?php
    }
}
?>