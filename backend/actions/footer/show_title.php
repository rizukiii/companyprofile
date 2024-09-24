<?php 

$query = "SELECT * FROM `tb_footer` LIMIT 1";

$result = $connect->query($query);

$footer = $result->fetch_object();

if (!$footer){
    die("data tidak ada !");
}