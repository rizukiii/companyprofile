<?php
include "../../app.php";

if (isset($_POST['tombol'])) {
    $nama      = escapeString($_POST['nama']);
    $deskripsi = escapeString($_POST['deskripsi']);


    $foto    = escapeString(date('Y-m-d-H.i.s') . ' - ' . $_FILES['foto']['name']);
    $file    = $_FILES['foto']['tmp_name'];
    $storages = "../../../storages/images/link/";

    if (move_uploaded_file($file, $storages . $foto)) {
        $query = "INSERT INTO `tb_link` (`foto`,`nama`,`deskripsi`) VALUES ('$foto','$nama','$deskripsi')";

        $result = $connect->query($query);
        echo "<script>window.location.href='../../pages/link/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/link/create.php'</script>";
    };
}
