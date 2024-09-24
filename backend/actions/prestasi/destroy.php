<?php
include "../../app.php";
include "./show.php";

$storages = "../../../storages/images/prestasi_foto/";

if(file_exists($storages . $prestasi_foto->foto)){
    unlink($storages . $prestasi_foto->foto);
}
$query = "DELETE FROM `tb_prestasi_foto` WHERE id=$prestasi_foto->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/prestasi/index.php'</script>";
exit();