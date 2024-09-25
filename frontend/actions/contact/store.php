<?php
include "../../../config/connection.php";

if (isset($_POST['tombol'])) {
    $nama     = ($_POST['nama']);
    $email     = ($_POST['email']);
    $deskripsi = ($_POST['deskripsi']);
    $phone     = ($_POST['phone']);



    $query = "INSERT INTO `tb_contact` (`nama`,`email`,`deskripsi`,`phone`) VALUES ('$nama','$email','$deskripsi','$phone')";

    $result = $connect->query($query);

    if ($result) {
        echo "<script>window.location.href='../../pages/index.php'</script>";
        exit();
    } else {
        echo "<script>window.location.href='../../pages/index.php'</script>";
        exit();
    }
}
