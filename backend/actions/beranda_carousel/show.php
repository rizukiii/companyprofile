<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/beranda_carousel/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_beranda_carousel` WHERE id=$id";

$result = $connect->query($query);

$beranda_carousel = $result->fetch_object();

if (!$beranda_carousel) {
    die("Data Tidak Ditemukan!");
}
