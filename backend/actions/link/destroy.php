<?php
include "../../app.php";
include "./show.php";

$storages = "../../../storages/images/link/";

if(file_exists($storages . $link->foto)){
    unlink($storages . $link->foto);
}
$query = "DELETE FROM `tb_link` WHERE id=$link->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/link/index.php'</script>";
exit();