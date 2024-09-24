<?php 

$query = "SELECT * FROM `tb_konsentrasi_keahlian_title` LIMIT 1";

$result = $connect->query($query);

$konsentrasi_keahlian_title = $result->fetch_object();

if (!$konsentrasi_keahlian_title){
    die("data tidak ada !");
}