<?php

include "../../app.php";

include "./show.php";

if (isset($_POST['tombol'])) {

    $fotoSQL   = "";
    if ($_FILES['foto']['name']) {
        $foto = date('Y m d H.i.s') . ' - ' . $_FILES['foto']['name'];
        // 2024 9 2 21.39.53.23
        $file = $_FILES['foto']['tmp_name'];
        $storages = "../../../storages/images/prestasi_foto/";

        if (file_exists($storages . $prestasi_foto->foto)) {
            unlink($storages . $prestasi_foto->foto);
        }
        if (move_uploaded_file($file, $storages . $foto)) {
            $fotoSQL = " `foto`='$foto'";
        }
    }

    $query = "UPDATE `tb_prestasi_foto` SET $fotoSQL WHERE id=$prestasi_foto->id";

    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/prestasi/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/prestasi/edit_carousel.php'</script>";
    }
    exit();
}
