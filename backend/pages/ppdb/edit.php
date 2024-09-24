<?php include "../../components/head.php" ?>

<?php $title = 'Edit Data PPDB';
$section = 'edit_data_ppdb' ?>

<body>

    <?php include "../../components/header.php" ?>

    <?php include "../../components/sidebar.php" ?>

    <?php include "../../components/breadcrumb.php" ?>

    <div class="row">
        <!-- ppdb start -->
        <div class="col-12">
            <div class="card">
                <div class="card-body mt-3">

                    <?php include "../../actions/ppdb/show.php" ?>
                    <form action="../../actions/ppdb/update.php?id=<?= $ppdb->id ?>" method="post">
                        
                    <div class="mb-3">
                            <label for="icon" class="form-label">Icon</label>
                            <input
                                type="text"
                                class="form-control"
                                name="icon"
                                id="icon"
                                placeholder="Masukan Icon Company"
                                value="<?= $ppdb->icon ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="title_judul" class="form-label">Title Judul</label>
                            <input
                                type="text"
                                class="form-control"
                                name="title_judul"
                                id="title_judul"
                                placeholder="Masukan Title_judul Company"
                                value="<?= $ppdb->title_judul ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input
                                type="text"
                                class="form-control"
                                name="deskripsi"
                                id="deskripsi"
                                placeholder="Masukan Deskripsi Company"
                                value="<?= $ppdb->deskripsi ?>" />
                        </div>
                        <div class="d-flex">
                            <button
                                type="submit"
                                class="btn btn-primary"
                                name="tombol"
                                value="ubah">
                                Submit
                            </button>
                            <a href="../ppdb" class="btn btn-primary ms-auto">Kembali</a>
                        </div>


                    </form>

                </div>
            </div>
        </div>
        <!-- ppdb end -->



        <?php include "../../components/footer.php" ?>

        <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>