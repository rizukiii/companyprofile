<?php
include "../../app.php";
include "./show.php";

$storages = "../../../storages/contact/";

if(file_exists($storages . $contact->foto)){
    unlink($storages . $contact->foto);
}
$query = "DELETE FROM `tb_contact` WHERE id=$contact->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/contact/index.php'</script>";
exit();