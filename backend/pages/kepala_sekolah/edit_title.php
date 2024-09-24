<?php include "../../components/head.php" ?>

<?php $title = 'Edit Data Kepala Sekolah';
$section = 'edit_data_kepala_sekolah' ?>

<body>

    <?php include "../../components/header.php" ?>

    <?php include "../../components/sidebar.php" ?>

    <?php include "../../components/breadcrumb.php" ?>

    <div class="row">
        <!-- kepala_sekolah start -->
        <div class="col-12">
            <div class="card">
                <div class="card-body mt-3">

                    <?php include "../../actions/kepala_sekolah/show_title.php" ?>
                    <form action="../../actions/kepala_sekolah/update_title.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input
                                type="file"
                                class="form-control"
                                name="foto"
                                id="foto"
                                placeholder="Masukan Foto Company"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"><?= $kepala_sekolah->deskripsi ?></textarea>
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
                        <a href="../kepala_sekolah" class="btn btn-primary ms-auto">Kembali</a>
                        </div>
                        
                        
                    </form>
                    
                </div>
            </div>
        </div>
        <!-- kepala_sekolah end -->



        <?php include "../../components/footer.php" ?>

        <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>