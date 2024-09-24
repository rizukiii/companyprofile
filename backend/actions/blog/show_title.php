<?php 

$query = "SELECT * FROM `tb_blog_title` LIMIT 1";

$result = $connect->query($query);

$blog_title = $result->fetch_object();

if (!$blog_title){
    die("data tidak ada !");
}