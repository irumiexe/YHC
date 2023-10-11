<?php
include 'header.php';
if (isset($_GET['proses'])) {
        if ($_GET['proses'] == 'prosestambah') {
                $nim=$_POST['nim'];
                $nama_mhs=$_POST['nama_mhs'];
                $studi = $_POST['studi'];
                $nohp = $_POST['nohp'];

            $hasil = $db->query("INSERT into tbl_mhs (nim,nama_mhs,studi,nohp) values
                                                            ('$nim','$nama_mhs','$studi','$nohp')");
            header("location:mhsinput.php");
        
        }elseif ($_GET['proses'] == 'ubah') {
            $nim = $_POST['nim'];
            $nama_mhs = $_POST['nama_mhs'];
            $studi = $_POST['studi'];
            $nohp = $_POST['nohp'];

            $hasil = $db->query("UPDATE tbl_mhs set nama_mhs='$nama_mhs', studi='$studi', nohp='$nohp' where nim='$nim'");
            header("location:mhsinput.php");

        }elseif ($_GET['proses'] == 'proseshapus') {
            $nim = $_GET['kode'];
            $hasil = $db->query("DELETE FROM tbl_mhs WHERE nim='$nim'");
            header("location:mhsinput.php");
        }
    }
?>