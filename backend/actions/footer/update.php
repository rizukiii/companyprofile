<?php

include "../../app.php";

include "./show.php";

if (isset($_POST['tombol'])) {
    $icon       = escapeString($_POST['icon']);
    $link       = escapeString($_POST['link']);
   
    $query = "UPDATE `tb_footer_medsos` SET `icon`='$icon', `link`='$link' WHERE id=$footer_medsos->id";

    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/footer/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/footer/edit.php'</script>";
    }
    exit();
}
