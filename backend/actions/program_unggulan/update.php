<?php

include "../../app.php";

include "./show.php";

if (isset($_POST['tombol'])) {
    $icon       = escapeString($_POST['icon']);
    $nama       = escapeString($_POST['nama']);
    $deskripsi  = escapeString($_POST['deskripsi']);
   
    $query = "UPDATE `tb_program_unggulan` SET `icon`='$icon', `nama`='$nama', `deskripsi`='$deskripsi' WHERE id=$program_unggulan->id";

    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/program_unggulan/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/program_unggulan/edit.php'</script>";
    }
    exit();
}
