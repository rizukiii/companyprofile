<?php include "../../components/head.php" ?>

<body style="background-image: url(https://i.pinimg.com/originals/14/da/22/14da22139098fbe4dcaff18fc77e39d1.jpg);object-fit:cover">
<?php include "../../actions/guestcheck.php" ?>
    <main class="container my-5 w-50 mx-auto">
        <?php include "../../components/alert.php" ?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Login</h3>
            </div>
            <div class="card-body">
                <form action="../../actions/signin.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id="email"
                            placeholder="Masukan email anda"
                            value="<?= isset($_SESSION['value_email']) ? $_SESSION['value_email'] : '' ?>" />
                        <!-- untuk menghapus data value_email yang ada di session -->
                        <?php unset($_SESSION['value_email']) ?>

                        <!-- mengecek apakah ada data error_email di session-->
                        <?php if (isset($_SESSION['error_email'])): ?>
                            <!-- kalau ada ditampilkan -->
                            <small class="ms-2 text-danger"> <?= $_SESSION['error_email'] ?></small>

                            <!-- kemudian hapus data error_email di session -->
                        <?php unset($_SESSION['error_email']);
                        endif; ?>

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            id="password"
                            placeholder="Masukan Password Anda" />
                        <?php if (isset($_SESSION['error_password'])): ?>
                            <small class="ms-2 text-danger"> <?= $_SESSION['error_password'] ?></small>
                        <?php unset($_SESSION['error_password']);
                        endif;
                        ?>
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary"
                        name="button"
                        value="Login">
                        Login
                    </button>

                </form>
            </div>
            <div class="card-footer"></div>
        </div>

    </main>
    
    <?php include "../../components/script.php" ?>
</body>

<?php include "../../components/end.php" ?>