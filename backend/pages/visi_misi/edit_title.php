<?php include "../../components/head.php" ?>

<?php $title = 'Edit Data Visi Misi';
$section = 'edit_data_visi_misi' ?>

<body>

    <?php include "../../components/header.php" ?>

    <?php include "../../components/sidebar.php" ?>

    <?php include "../../components/breadcrumb.php" ?>

    <div class="row">
        <!-- visi_misi start -->
        <div class="col-12">
            <div class="card">
                <div class="card-body mt-3">

                    <?php include "../../actions/visi_misi/show_title.php" ?>
                    <form action="../../actions/visi_misi/update_title.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="visi" class="form-label">Visi</label>
                            <input
                                type="text"
                                class="form-control"
                                name="visi"
                                id="visi"
                                placeholder="Masukan visi Company"
                                value="<?= $visi_misi->visi ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="misi" class="form-label">Misi</label>
                            <textarea class="form-control" name="misi" id="misi" rows="3"><?= $visi_misi->misi ?></textarea>
                        </div>
                        
                        <div class="d-flex">
                            <button
                                type="submit"
                                class="btn btn-primary"
                                name="tombol"
                                value="ubah">
                                Submit
                            </button>
                            <a href="../visi_misi" class="btn btn-primary ms-auto">Kembali</a>
                        </div>


                    </form>

                </div>
            </div>
        </div>
        <!-- visi_misi end -->



        <?php include "../../components/footer.php" ?>

        <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>