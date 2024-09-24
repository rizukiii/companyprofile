<?php
include "../../app.php";
include "./show.php";

$storages = "../../../storages/blog/";

if(file_exists($storages . $blog->foto)){
    unlink($storages . $blog->foto);
}
$query = "DELETE FROM `tb_blog` WHERE id=$blog->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/blog/index.php'</script>";
exit();