<?php

include "../../app.php";

include "./show.php";

if (isset($_POST['tombol'])) {
    $fotoSQL   = "";
    if ($_FILES['foto']['name']) {
        $foto = date('Y m d H.i.s') . ' - ' . $_FILES['foto']['name'];
        // 2024 9 2 21.39.53.23
        $file = $_FILES['foto']['tmp_name'];
        $storages = "../../../storages/images/beranda_carousel/";
        
        if (file_exists($storages . $beranda_carousel->foto)) {
            unlink($storages . $beranda_carousel->foto);
        }

        if (move_uploaded_file($file, $storages . $foto)) {
            $fotoSQL = "`foto`='$foto'";
        }
    }

    $query = "UPDATE `tb_beranda_carousel` SET $fotoSQL WHERE id=$beranda_carousel->id";

    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/beranda_carousel/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/beranda_carousel/edit.php'</script>";
    }
    exit();
}
