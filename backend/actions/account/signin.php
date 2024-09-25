<?php
include "../../app.php";

if (isset($_POST['tombol'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `tb_user` WHERE email='$email' LIMIT 1";

    $result = $connect->query($query);

    $user = $result->fetch_object();

    $_SESSION['value_email'] = $email;

    if ($user) {
        // fungsi ini berfungsi unutk memferifikasi password yang dari form dengan password yang dari database
        if (password_verify($password, $user->password)) {
            $_SESSION['id'] = $user->id;
            $_SESSION['username'] = $user->username;
            $_SESSION['email'] = $user->email;
            $_SESSION['role'] =$user->role;

            $_SESSION['success'] = "Berhasil Login";
            echo "<script>window.location.href = '../../pages/dashboard/index.php'</script>";
            exit();

        }
        $_SESSION['error_password'] = "Password anda salah!";
        echo "<script>window.location.href = '../../pages/account/login.php'</script>";
        exit();

    }
    $_SESSION['error_email'] = "Email tidak ditemukan!";
    echo "<script>window.location.href = '../../pages/account/login.php'</script>";
    exit();
}
