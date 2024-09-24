<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/konsentrasi_keahlian/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_konsentrasi_keahlian` WHERE id=$id";

$result = $connect->query($query);

$konsentrasi_keahlian = $result->fetch_object();

if (!$konsentrasi_keahlian) {
    die("Data Tidak Ditemukan!");
}
