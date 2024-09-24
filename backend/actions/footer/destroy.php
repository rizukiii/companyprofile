<?php
include "../../app.php";
include "./show.php";

$storages = "../../../storages/images/footer/";

if(file_exists($storages . $footer_medsos->foto)){
    unlink($storages . $footer_medsos->foto);
}
$query = "DELETE FROM `tb_footer_medsos` WHERE id=$footer_medsos->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/footer/index.php'</script>";
exit();