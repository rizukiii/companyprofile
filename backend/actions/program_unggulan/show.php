<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/program_unggulan/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_program_unggulan` WHERE id=$id";

$result = $connect->query($query);

$program_unggulan = $result->fetch_object();

if (!$program_unggulan) {
    die("Data Tidak Ditemukan!");
}
