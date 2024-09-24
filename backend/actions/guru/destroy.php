<?php
include "../../app.php";
include "./show.php";

$storages = "../../../storages/guru/";

if(file_exists($storages . $guru->foto)){
    unlink($storages . $guru->foto);
}
$query = "DELETE FROM `tb_guru` WHERE id=$guru->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/guru/index.php'</script>";
exit();