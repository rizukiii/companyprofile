<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/profil_data_sekolah/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_profil_data_sekolah` WHERE id=$id";

$result = $connect->query($query);

$profil_data_sekolah = $result->fetch_object();

if (!$profil_data_sekolah) {
    die("Data Tidak Ditemukan!");
}
