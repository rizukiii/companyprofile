<?php include "../../components/head.php" ?>

<?php $title = 'Edit Data Link';
$section = 'edit_data_link' ?>

<body>

    <?php include "../../components/header.php" ?>

    <?php include "../../components/sidebar.php" ?>

    <?php include "../../components/breadcrumb.php" ?>

    <div class="row">
        <!-- link start -->
        <div class="col-12">
            <div class="card">
                <div class="card-body mt-3">

                    <?php include "../../actions/link/show.php" ?>
                    <form action="../../actions/link/update.php?id=<?= $link->id ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="foto" class="form-label">Choose file</label>
                            <input
                                type="file"
                                class="form-control"
                                name="foto"
                                id="foto"
                                placeholder="Masukan Foto Company"
                            />
                        </div>
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama"
                                id="nama"
                                placeholder="Masukan Nama Company"
                                value="<?= $link->nama ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input
                                type="text"
                                class="form-control"
                                name="deskripsi"
                                id="deskripsi"
                                placeholder="Masukan Deskripsi Company"
                                value="<?= $link->deskripsi ?>" />
                        </div>
                        <div class="d-flex">
                            <button
                                type="submit"
                                class="btn btn-primary"
                                name="tombol"
                                value="ubah">
                                Submit
                            </button>
                            <a href="../link" class="btn btn-primary ms-auto">Kembali</a>
                        </div>


                    </form>

                </div>
            </div>
        </div>
        <!-- link end -->



        <?php include "../../components/footer.php" ?>

        <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>