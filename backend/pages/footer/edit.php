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

                    <?php include "../../actions/footer/show.php" ?>
                    <form action="../../actions/footer/update.php?id=<?= $footer_medsos->id ?>" method="post">
                        <div class="mb-3">
                            <label for="icon" class="form-label">Icon</label>
                            <input
                                type="text"
                                class="form-control"
                                name="icon"
                                id="icon"
                                placeholder="Masukan Icon Company"
                                value="<?= $footer_medsos->icon ?>"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input
                                type="text"
                                class="form-control"
                                name="link"
                                id="link"
                                placeholder="Masukan Link Company"
                                value="<?= $footer_medsos->link ?>"
                            />
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