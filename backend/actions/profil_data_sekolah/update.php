<?php

include "../../app.php";

include "./show.php";

if (isset($_POST['tombol'])) {
    $fotoSQL   = "";
    if ($_FILES['foto']['name']) {
        $foto = date('Y m d H.i.s') . ' - ' . $_FILES['foto']['name'];
        // 2024 9 2 21.39.53.23
        $file = $_FILES['foto']['tmp_name'];
        $storages = "../../../storages/images/profil_data_sekolah/";
        
        if (file_exists($storages . $profil_data_sekolah->foto)) {
            unlink($storages . $profil_data_sekolah->foto);
        }

        if (move_uploaded_file($file, $storages . $foto)) {
            $fotoSQL = "`foto`='$foto'";
        }
    }

    $query = "UPDATE `tb_profil_data_sekolah` SET $fotoSQL WHERE id=$profil_data_sekolah->id";

    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/profil_data_sekolah/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/profil_data_sekolah/edit.php'</script>";
    }
    exit();
}
