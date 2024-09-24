<?php 

$query = "SELECT * FROM `tb_kepala_sekolah` LIMIT 1";

$result = $connect->query($query);

$kepala_sekolah = $result->fetch_object();

if (!$kepala_sekolah){
    die("data tidak ada !");
}