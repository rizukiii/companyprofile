<?php

if (isset($_SESSION['id'])) {
    $_SESSION['error'] = "Anda sudah login!";
    echo "<script>window.location.href = '../../pages/dashboard/index.php'</script>";
    exit();
}