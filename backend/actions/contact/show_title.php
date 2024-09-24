<?php 

$query = "SELECT * FROM `tb_contact_title` LIMIT 1";

$result = $connect->query($query);

$contact_title = $result->fetch_object();

if (!$contact_title){
    die("data tidak ada !");
}