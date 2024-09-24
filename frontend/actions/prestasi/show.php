<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/beranda/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_prestasi_foto` WHERE id=$id";

$result = $connect->query($query);

$prestasi_foto = $result->fetch_object();

if (!$prestasi_foto) {
    die("Data Tidak Ditemukan!");
}
