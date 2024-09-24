<?php 

$query = "SELECT * FROM `tb_program_unggulan_title` LIMIT 1";

$result = $connect->query($query);

$program_unggulan_title = $result->fetch_object();

if (!$program_unggulan_title){
    die("data tidak ada !");
}