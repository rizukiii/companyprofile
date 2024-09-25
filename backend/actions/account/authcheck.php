<?php

if (!isset($_SESSION['id'])) {
    $_SESSION['error'] = "Anda tidak memiliki akses karena tidak login!";
    echo "<script>window.location.href = '../pages/login.php'</script>";
    exit();
}
