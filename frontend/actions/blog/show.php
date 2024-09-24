<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_blog` WHERE id=$id";

$result = $connect->query($query);

$blog = $result->fetch_object();

if (!$blog) {
    die("Data Tidak Ditemukan!");
}
