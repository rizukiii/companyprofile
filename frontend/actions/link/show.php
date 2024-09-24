<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/link/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_link` WHERE id=$id";

$result = $connect->query($query);

$link = $result->fetch_object();

if (!$link) {
    die("Data Tidak Ditemukan!");
}
