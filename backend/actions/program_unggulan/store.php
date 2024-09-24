<?php
include "../../app.php";

if (isset($_POST['tombol'])) {
    $icon       = escapeString($_POST['icon']);
    $nama       = escapeString($_POST['nama']);
    $deskripsi  = escapeString($_POST['deskripsi']);



    $query = "INSERT INTO `tb_program_unggulan` (`icon`,`nama`,`deskripsi`) VALUES ('$icon','$nama','$deskripsi')";

    $result = $connect->query($query);

    if ($result) {
        echo "<script>window.location.href='../../pages/program_unggulan/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/program_unggulan/create.php'</script>";
    };
}
