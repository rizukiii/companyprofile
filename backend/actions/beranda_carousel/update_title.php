<?php

include "../../app.php";

include "./show_title.php";

if (isset($_POST['tombol'])) {
    $nama      = escapeString($_POST['nama']);
    $judul     = escapeString($_POST['judul']);
    $sub_judul = escapeString($_POST['sub_judul']);
    
    
    $query = "UPDATE `tb_beranda` SET `nama`='$nama',`judul`='$judul',`sub_judul`='$sub_judul' WHERE id=$beranda->id";
    
    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/beranda_carousel/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/beranda_carousel/edit.php'</script>";
    }
    exit();
}
