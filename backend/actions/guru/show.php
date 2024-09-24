<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/guru/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_guru` WHERE id=$id";

$result = $connect->query($query);

$guru = $result->fetch_object();

if (!$guru) {
    die("Data Tidak Ditemukan!");
}
