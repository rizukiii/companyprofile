<?php 

$query = "SELECT * FROM `tb_prestasi` LIMIT 1";

$result = $connect->query($query);

$prestasi = $result->fetch_object();

if (!$prestasi){
    die("data tidak ada !");
}