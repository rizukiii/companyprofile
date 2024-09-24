<?php

include "../../app.php";

include "./show_title.php";

if (isset($_POST['tombol'])) {
    $judul     = escapeString($_POST['judul']);
    $sub_judul = escapeString($_POST['sub_judul']);
    
    
    $query = "UPDATE `tb_prestasi` SET `judul`='$judul',`sub_judul`='$sub_judul' WHERE id=$prestasi->id";
    
    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/prestasi/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/prestasi/edit.php'</script>";
    }
    exit();
}
