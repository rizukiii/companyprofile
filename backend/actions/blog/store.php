<?php
include "../../app.php";

if (isset($_POST['tombol'])) {
    $penulis     = escapeString($_POST['penulis']);
    $date     = escapeString($_POST['date']);
    $deskripsi = escapeString($_POST['deskripsi']);
    $sumber     = escapeString($_POST['sumber']);
    $judul     = escapeString($_POST['judul']);

    $foto    = escapeString(date('Y-m-d-H.i.s') . ' - ' . $_FILES['foto']['name']);
    $file    = $_FILES['foto']['tmp_name'];
    $storages = "../../../storages/images/blog/";

    if (move_uploaded_file($file, $storages . $foto)) {
        $query = "INSERT INTO `tb_blog` (`penulis`,`date`,`deskripsi`,`foto`,`sumber`,`judul`) VALUES ('$penulis','$date','$deskripsi','$foto','$sumber','$judul')";

        $result = $connect->query($query);
        echo "<script>window.location.href='../../pages/blog/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/blog/create.php'</script>";
    };
}
