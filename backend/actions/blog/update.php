<?php

include "../../app.php";

include "./show.php";

if (isset($_POST['tombol'])) {
    $penulis     = escapeString($_POST['penulis']);
    $date     = escapeString($_POST['date']);
    $deskripsi = escapeString($_POST['deskripsi']);
    $sumber     = escapeString($_POST['sumber']);
    $judul     = escapeString($_POST['judul']);
    

    $fotoSQL   = "";
    if ($_FILES['foto']['name']) {
        $foto = date('Y m d H.i.s') . ' - ' . $_FILES['foto']['name'];
        // 2024 9 2 21.39.53.23
        $file = $_FILES['foto']['tmp_name'];
        $storages = "../../../storages/images/blog/";

        if (file_exists($storages . $blog->foto)) {
            unlink($storages . $blog->foto);
        }
        if (move_uploaded_file($file, $storages . $foto)) {
            $fotoSQL = ", `foto`='$foto'";
        }
    }

    $query = "UPDATE `tb_blog` SET `penulis`='$penulis',`date`='$date',`deskripsi`='$deskripsi',`sumber`='$sumber',`judul`='$judul'$fotoSQL WHERE id=$blog->id";

    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/blog/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/blog/edit.php'</script>";
    }
    exit();
}
