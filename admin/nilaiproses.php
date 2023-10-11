<?php
include 'header.php';

if (isset($_GET['proses'])) {
    if ($_GET['proses'] == 'prosestambah') {
        $nim = $_POST['nim'];
        $kd_matkul = $_POST['kd_matkul'];
        $nilai = $_POST['nilai'];
        

        $hasil = $db->query("INSERT into tbl_nilai (nim,kd_matkul,nilai) values ('$nim','$kd_matkul','$nilai')");

        header("location:nilaiinput.php");
    } elseif ($_GET['proses'] == 'ubah') {
        $nim = $_POST['nim'];
        $kd_matkul = $_POST['kd_matkul'];
        $nilai = $_POST['nilai'];

        $hasil = $db->query("UPDATE tbl_nilai set nim='$nim', kd_matkul='$kd_matkul', nilai='$nilai' where nim='$nim'");
        header("location:nilaiinput.php");

    } elseif ($_GET['proses'] == 'proseshapus') {
        $kd_matkul = $_GET['kode'];
        $hasil = $db->query("DELETE FROM tbl_nilai WHERE tbl_nilai.kd_matkul='kode'");
        header("location:nilaiinput.php");
    }
}
