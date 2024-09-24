<?php

$query = "SELECT * FROM `tb_profil_data_sekolah`";

$result = $connect->query($query);

$profil_data_sekolah = $result->fetch_object();

if (!$profil_data_sekolah) {
    die("Data Tidak Ditemukan!");
}
