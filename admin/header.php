<?php
session_start();
include '../assets/conn/cek.php';
include '../assets/conn/config.php';
?>

<html>

<head>
    <title>Web Sederhana</title>
    <link rel="stylesheet" href="../assets/css/cosmo.min.css">
</head>

<body>
    <nav class="navbar-inverse navbar-static-right">

        <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href=""></a></li>
                    <li><a href="index.php">DASHBOARD</a></li>
                    <li><a href="mhsinput.php">DATA MAHASISWA</a></li>
                    <li><a href="matkulnilai.php">MATAKULIAH</a></li>
                    <li><a href="nilaiinput.php">NILAI</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>

    </nav>
</body>

</html>