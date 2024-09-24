<?php
include "../../app.php";
include "./show.php";

$storages = "../../../storages/images/ppdb/";

if(file_exists($storages . $ppdb->foto)){
    unlink($storages . $ppdb->foto);
}
$query = "DELETE FROM `tb_ppdb` WHERE id=$ppdb->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/ppdb/index.php'</script>";
exit();