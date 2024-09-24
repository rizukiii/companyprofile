<?php
include "../../app.php";
include "./show.php";

$storages = "../../../storages/konsentrasi_keahlian/";

if(file_exists($storages . $konsentrasi_keahlian->foto)){
    unlink($storages . $konsentrasi_keahlian->foto);
}
$query = "DELETE FROM `tb_konsentrasi_keahlian` WHERE id=$konsentrasi_keahlian->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/konsentrasi_keahlian/index.php'</script>";
exit();