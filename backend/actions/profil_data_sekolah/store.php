<?php
include "../../app.php";

if (isset($_POST['tombol'])) {

    $foto    = escapeString(date('Y-m-d-H.i.s') . ' - ' . $_FILES['foto']['name']);
    
    $file    = $_FILES['foto']['tmp_name'];
    
    $storages = "../../../storages/images/profil_data_sekolah/";
    
    if (move_uploaded_file($file, $storages . $foto)) {
        $query = "INSERT INTO `tb_profil_data_sekolah` (`foto`) VALUES ('$foto')";
     
        $result = $connect->query($query);
        
        echo "<script>window.location.href='../../pages/profil_data_sekolah/index.php'</script>";
        exit();
    } else {
        echo "<script>window.location.href='../../pages/profil_data_sekolah/create.php'</script>";
        exit();
    };
}
