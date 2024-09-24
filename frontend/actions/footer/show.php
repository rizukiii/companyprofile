<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/footer/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_footer_medsos` WHERE id=$id";

$result = $connect->query($query);

$footer_medsos = $result->fetch_object();

if (!$footer_medsos) {
    die("Data Tidak Ditemukan!");
}
