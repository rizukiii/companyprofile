<?php 

$query = "SELECT * FROM `tb_visi_misi` LIMIT 1";

$result = $connect->query($query);

$visi_misi = $result->fetch_object();

if (!$visi_misi){
    die("data tidak ada !");
}