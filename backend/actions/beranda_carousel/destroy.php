<?php
include "../../app.php";
include "./show.php";

$storages = "../../../storages/images/beranda_carousel/";

if(file_exists($storages . $beranda_carousel->foto)){
    unlink($storages . $beranda_carousel->foto);
}
$query = "DELETE FROM `tb_beranda_carousel` WHERE id=$beranda_carousel->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/beranda_carousel/index.php'</script>";
exit();