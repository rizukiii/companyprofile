<?php
include "../../app.php";
include "./show.php";

$storages = "../../../storages/images/profil_data_sekolah/";

if(file_exists($storages . $profil_data_sekolah->foto)){
    unlink($storages . $profil_data_sekolah->foto);
}
$query = "DELETE FROM `tb_profil_data_sekolah` WHERE id=$profil_data_sekolah->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/profil_data_sekolah/index.php'</script>";
exit();