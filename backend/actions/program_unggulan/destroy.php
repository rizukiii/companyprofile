<?php
include "../../app.php";
include "./show.php";

$storages = "../../../storages/images/program_unggulan/";

if(file_exists($storages . $program_unggulan->foto)){
    unlink($storages . $program_unggulan->foto);
}
$query = "DELETE FROM `tb_program_unggulan` WHERE id=$program_unggulan->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/program_unggulan/index.php'</script>";
exit();