<?php

include "../../app.php";

include "./show_title.php";

if (isset($_POST['tombol'])) {
    $judul     = escapeString($_POST['judul']);
    $sub_judul = escapeString($_POST['sub_judul']);
    
    
    $query = "UPDATE `tb_blog_title` SET `judul`='$judul',`sub_judul`='$sub_judul' WHERE id=$blog_title->id";
    
    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/blog/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/blog/edit.php'</script>";
    }
    exit();
}
