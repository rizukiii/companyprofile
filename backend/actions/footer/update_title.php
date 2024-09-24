<?php

include "../../app.php";

include "./show_title.php";

if (isset($_POST['tombol'])) {
    $jalan = escapeString($_POST['jalan']);
    $telp = escapeString($_POST['telp']);
    $email = escapeString($_POST['email']);
    $kota = escapeString($_POST['kota']);

    $query = "UPDATE `tb_footer` SET `jalan`='$jalan',`telp`='$telp',`email`='$email',`kota`='$kota' WHERE id=$footer->id";


    $result = $connect->query($query);


    if ($result) {
        echo "<script>window.location.href='../../pages/footer/index.php'</script>";
        exit();
    } else {
        echo "<script>window.location.href='../../pages/footer/edit.php'</script>";
        exit();
    }

}
