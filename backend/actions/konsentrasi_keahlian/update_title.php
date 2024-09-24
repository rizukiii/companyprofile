<?php

include "../../app.php";

include "./show_title.php";

if (isset($_POST['tombol'])) {
    $judul     = escapeString($_POST['judul']);
    $sub_judul = escapeString($_POST['sub_judul']);
    
    
    $query = "UPDATE `tb_konsentrasi_keahlian_title` SET `judul`='$judul',`sub_judul`='$sub_judul' WHERE id=$konsentrasi_keahlian_title->id";
    
    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/konsentrasi_keahlian/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/konsentrasi_keahlian/edit.php'</script>";
    }
    exit();
}
