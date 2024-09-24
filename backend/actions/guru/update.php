<?php

include "../../app.php";

include "./show.php";

if (isset($_POST['tombol'])) {
    $nama      = escapeString($_POST['nama']);
    

    $fotoSQL   = "";
    if ($_FILES['foto']['name']) {
        $foto = date('Y m d H.i.s') . ' - ' . $_FILES['foto']['name'];
        // 2024 9 2 21.39.53.23
        $file = $_FILES['foto']['tmp_name'];
        $storages = "../../../storages/konsentrasi_keahlian/";

        if (file_exists($storages . $konsentrasi_keahlian->foto)) {
            unlink($storages . $konsentrasi_keahlian->foto);
        }
        if (move_uploaded_file($file, $storages . $foto)) {
            $fotoSQL = ", `foto`='$foto'";
        }
    }

    $query = "UPDATE `tb_konsentrasi_keahlian` SET `nama`='$nama'$fotoSQL WHERE id=$konsentrasi_keahlian->id";

    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/konsentrasi_keahlian/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/konsentrasi_keahlian/edit.php'</script>";
    }
    exit();
}
