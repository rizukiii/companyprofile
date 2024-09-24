<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/ppdb/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_ppdb` WHERE id=$id";

$result = $connect->query($query);

$ppdb = $result->fetch_object();

if (!$ppdb) {
    die("Data Tidak Ditemukan!");
}
