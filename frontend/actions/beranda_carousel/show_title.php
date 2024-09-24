<?php 

$query = "SELECT * FROM `tb_beranda` LIMIT 1";

$result = $connect->query($query);

$beranda = $result->fetch_object();

if (!$beranda){
    die("data tidak ada !");
}