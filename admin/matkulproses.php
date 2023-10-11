<?php
include 'header.php';
if (isset($_GET['proses'])) {
        if ($_GET['proses'] == 'prosestambah') {
                $kd_matkul=$_POST['kd_matkul'];
                $nama_matkul=$_POST['nama_matkul'];
                $nama_dosen = $_POST['nama_dosen'];

            $hasil = $db->query("INSERT into tbl_matkul (kd_matkul,nama_matkul,nama_dosen) values
                                                            ('$kd_matkul','$nama_matkul','$nama_dosen')");
            header("location:matkulnilai.php");
        
        }elseif ($_GET['proses'] == 'ubah') {
                $kd_matkul = $_POST['kd_matkul'];
                $nama_matkul = $_POST['nama_matkul'];
                $nama_dosen = $_POST['nama_dosen'];

            $hasil = $db->query("UPDATE tbl_matkul set nama_matkul='$nama_matkul', nama_dosen='$nama_dosen' where kd_matkul='$kd_matkul'");
            header("location:matkulnilai.php");

        }elseif ($_GET['proses'] == 'proseshapus') {
            $kd_matkul = $_GET['kode'];
            $hasil = $db->query("DELETE FROM tbl_matkul WHERE kd_matkul='$kd_matkul'");
            header("location:matkulnilai.php");
        }
    }
