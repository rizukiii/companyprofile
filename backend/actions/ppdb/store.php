<?php
include "../../app.php";

if (isset($_POST['tombol'])) {
    $icon       = escapeString($_POST['icon']);
    $title_judul  = escapeString($_POST['title_judul']);
    $deskripsi  = escapeString($_POST['deskripsi']);



    $query = "INSERT INTO `tb_ppdb` (`icon`,`title_judul`,`deskripsi`) VALUES ('$icon','$title_judul','$deskripsi')";

    $result = $connect->query($query);

    if ($result) {
        echo "<script>window.location.href='../../pages/ppdb/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/ppdb/create.php'</script>";
    };
}
