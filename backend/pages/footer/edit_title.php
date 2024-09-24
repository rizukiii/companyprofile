<?php include "../../components/head.php" ?>

<?php $title = 'Edit Data Footer';
$section = 'edit_data_footer' ?>

<body>

    <?php include "../../components/header.php" ?>

    <?php include "../../components/sidebar.php" ?>

    <?php include "../../components/breadcrumb.php" ?>

    <div class="row">
        <!-- footer start -->
        <div class="col-12">
            <div class="card">
                <div class="card-body mt-3">

                    <?php include "../../actions/footer/show_title.php" ?>
                    <form action="../../actions/footer/update_title.php" method="post">
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input
                                type="text"
                                class="form-control"
                                name="alamat"
                                id="alamat"
                                placeholder="Masukan Alamat Company"
                                value="<?= $footer->alamat ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="telp" class="form-label">Telp</label>
                            <input
                                type="text"
                                class="form-control"
                                name="telp"
                                id="telp"
                                placeholder="Masukan Telp Company"
                                value="<?= $footer->telp ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="text"
                                class="form-control"
                                name="email"
                                id="email"
                                placeholder="Masukan Email Company"
                                value="<?= $footer->email ?>" />
                        </div>
                        <div class="d-flex">
                        <button
                            type="submit"
                            class="btn btn-primary"
                            name="tombol"
                            value="ubah"
                        >
                            Submit
                        </button>
                        <a href="../footer" class="btn btn-primary ms-auto">Kembali</a>
                        </div>
                        
                        
                    </form>
                    
                </div>
            </div>
        </div>
        <!-- footer end -->



        <?php include "../../components/footer.php" ?>

        <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>