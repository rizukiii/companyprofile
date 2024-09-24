<?php
include "../../app.php";

if (isset($_POST['tombol'])) {

    $foto    = escapeString(date('Y-m-d-H.i.s') . ' - ' . $_FILES['foto']['name']);
    $file    = $_FILES['foto']['tmp_name'];
    $storages = "../../../storages/images/prestasi_foto/";

    if (move_uploaded_file($file, $storages . $foto)) {
        $query = "INSERT INTO `tb_prestasi_foto` (`foto`) VALUES ('$foto')";

        $result = $connect->query($query);
        echo "<script>window.location.href='../../pages/prestasi/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/prestasi/create.php'</script>";
    };
}
