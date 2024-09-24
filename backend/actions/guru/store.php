<?php
include "../../app.php";

if (isset($_POST['tombol'])) {
    $nama     = escapeString($_POST['nama']);

    $foto    = escapeString(date('Y-m-d-H.i.s') . ' - ' . $_FILES['foto']['name']);
    $file    = $_FILES['foto']['tmp_name'];
    $storages = "../../../storages/images/guru/";

    if (move_uploaded_file($file, $storages . $foto)) {
        $query = "INSERT INTO `tb_guru` (`nama`,`foto`) VALUES ('$nama','$foto')";

        $result = $connect->query($query);
        echo "<script>window.location.href='../../pages/guru/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/guru/create.php'</script>";
    };
}
