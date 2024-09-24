<?php

include "../../app.php";

include "./show.php";

if (isset($_POST['tombol'])) {
    $icon        = escapeString($_POST['icon']);
    $title_judul = escapeString($_POST['title_judul']);
    $deskripsi   = escapeString($_POST['deskripsi']);
    
    $query = "UPDATE `tb_ppdb` SET `icon`='$icon',`title_judul`='$title_judul',`deskripsi`='$deskripsi' WHERE id=$ppdb->id";

    $result = $connect->query($query);
    
    if ($result) {
        echo "<script>window.location.href='../../pages/ppdb/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/ppdb/edit.php'</script>";
    }
    exit();
}
