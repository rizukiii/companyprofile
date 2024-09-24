<?php

include "../../app.php";

include "./show_title.php";

if (isset($_POST['tombol'])) {
    $judul     = escapeString($_POST['judul']);
    $sub_judul = escapeString($_POST['sub_judul']);
    $sub_sub_judul = escapeString($_POST['sub_sub_judul']);
    
    
    $query = "UPDATE `tb_contact_title` SET `judul`='$judul',`sub_judul`='$sub_judul',`sub_sub_judul`='$sub_sub_judul' WHERE id=$contact_title->id";
    
    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/contact/index.php'</script>";
        exit();
    } else {
        echo "<script>window.location.href='../../pages/contact/edit.php'</script>";
        exit();
    }
   
}
