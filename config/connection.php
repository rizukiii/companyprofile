<?php 

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbName = 'db_company_profile';

$connect = new mysqli($hostname, $username, $password, $dbName);

if($connect->errno){
    die($connect->error);
}