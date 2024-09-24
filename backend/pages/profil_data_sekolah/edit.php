<?php include "../../components/head.php" ?>

<?php $title = 'Edit Data Profil Data Sekolah';
$section = 'edit_data_profil_data_sekolah' ?>

<body>

    <?php include "../../components/header.php" ?>

    <?php include "../../components/sidebar.php" ?>

    <?php include "../../components/breadcrumb.php" ?>

    <div class="row">
        <!-- beranda start -->
        <div class="col-12">
            <div class="card">
                <div class="card-body mt-3">

                    <?php include "../../actions/profil_data_sekolah/show.php" ?>
                    <form action="../../actions/profil_data_sekolah/update.php?id=<?= $profil_data_sekolah->id ?>" method="post" enctype="multipart/form-data">
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
                        <div class="d-flex">
                        <button
                            type="submit"
                            class="btn btn-primary"
                            name="tombol"
                            value="ubah"
                        >
                            Submit
                        </button>
                        <a href="../profil_data_sekolah" class="btn btn-primary ms-auto">Kembali</a>
                        </div>
                        
                        
                    </form>
                    
                </div>
            </div>
        </div>
        <!-- beranda end -->



        <?php include "../../components/footer.php" ?>

        <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>