<?php
include "../../app.php";

if (isset($_POST['tombol'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO `user` (`username`,`email`,`password`) VALUES ('$username','$email','$password')";

    $result = $connect->query($query);

    if ($result) {
        echo "<script>window.location.href = '../../pages/account/login.php'</script>";
        exit();
    } else {
        echo "<script>window.location.href = '../../pages/account/register.php'</script>";
        exit();
    }
}
