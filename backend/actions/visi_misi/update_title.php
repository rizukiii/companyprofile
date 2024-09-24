<?php

include "../../app.php";

include "./show_title.php";

if (isset($_POST['tombol'])) {
    $visi     = escapeString($_POST['visi']);
    $misi = escapeString($_POST['misi']);
    
    
    $query = "UPDATE `tb_visi_misi` SET `visi`='$visi', `misi`='$misi' WHERE id=$visi_misi->id";
    
    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/ppdb/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/ppdb/edit.php'</script>";
    }
    exit();
}
