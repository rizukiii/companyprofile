<?php 

$query = "SELECT * FROM `tb_link_title` LIMIT 1";

$result = $connect->query($query);

$link_title = $result->fetch_object();

if (!$link_title){
    die("data tidak ada !");
}