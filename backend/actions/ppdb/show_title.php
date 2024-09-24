<?php 

$query = "SELECT * FROM `tb_ppdb_title` LIMIT 1";

$result = $connect->query($query);

$ppdb_title = $result->fetch_object();

if (!$ppdb_title){
    die("data tidak ada !");
}