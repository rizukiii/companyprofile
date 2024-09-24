<?php

include "../../app.php";

include "./show_title.php";

if (isset($_POST['tombol'])) {
    $deskripsi     = escapeString($_POST['deskripsi']);
    
    
    $fotoSQL   = "";
    if ($_FILES['foto']['name']) {
        $foto = date('Y m d H.i.s') . ' - ' . $_FILES['foto']['name'];
        // 2024 9 2 21.39.53.23
        $file = $_FILES['foto']['tmp_name'];
        $storages = "../../../storages/images/kepala_sekolah/";

        if (file_exists($storages . $kepala_sekolah->foto)) {
            unlink($storages . $kepala_sekolah->foto);
        }
        if (move_uploaded_file($file, $storages . $foto)) {
            $fotoSQL = ", `foto`='$foto'";
        }
    }
    
    $query = "UPDATE `tb_kepala_sekolah` SET `deskripsi`='$deskripsi'$fotoSQL WHERE id=$kepala_sekolah->id";
    
    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/kepala_sekolah/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/kepala_sekolah/edit.php'</script>";
    }
    exit();
}
