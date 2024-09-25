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
                <div class="card-header">
                    <h3 class="card-title">Register</h3>
                </div>
                <div class="card-body">
                    <form action="../actions/signup.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                id="name"
                                placeholder="Masukan Name Anda" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                id="email"
                                placeholder="Masukan email anda" />
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
                            class="btn btn-primary"
                            name="button"
                            value="Register">
                            Register
                        </button>

                    </form>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>

        <?php include "../../components/footer.php" ?>

        <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>