<?php include "../../components/head.php" ?>

<?php $title = 'Register';
$section = 'register' ?>

<body>

    <?php include "../../components/header.php" ?>

    <?php include "../../components/sidebar.php" ?>

    <?php include "../../components/breadcrumb.php" ?>

    <div class="row">

        <div class="col-12">
            <div class="card">
            <?php include "../../actions/account/guestcheck.php" ?>
                <div class="card-body mt-3">
                    <form action="../../actions/account/signup.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input
                                type="text"
                                class="form-control"
                                name="username"
                                id="username"
                                placeholder="Masukan Username Anda" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                id="email"
                                placeholder="Masukan Email Anda" />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                id="password"
                                placeholder="Masukan Password Anda" />
                        </div>
                        <button
                            type="submit"
                            class="btn btn-primary form-control"
                            name="tombol"
                            value="Register">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <?php include "../../components/footer.php" ?>

        <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>