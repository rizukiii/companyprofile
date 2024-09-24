<?php

include "../../app.php";

include "./show_title.php";

if (isset($_POST['tombol'])) {
    $judul     = escapeString($_POST['judul']);
    $sub_judul = escapeString($_POST['sub_judul']);
    
    $fotoSQL   = "";
    if ($_FILES['foto']['name']) {
        $foto = date('Y m d H.i.s') . ' - ' . $_FILES['foto']['name'];
        // 2024 9 2 21.39.53.23
        $file = $_FILES['foto']['tmp_name'];
        $storages = "../../../storages/images/ppdb_title/";

        if (file_exists($storages . $ppdb_title->foto)) {
            unlink($storages . $ppdb_title->foto);
        }
        if (move_uploaded_file($file, $storages . $foto)) {
            $fotoSQL = ", `foto`='$foto'";
        }
    }
    
    $query = "UPDATE `tb_ppdb_title` SET `judul`='$judul', `sub_judul`='$sub_judul'$fotoSQL WHERE id=$ppdb_title->id";
    
    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/ppdb/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/ppdb/edit.php'</script>";
    }
    exit();
}
