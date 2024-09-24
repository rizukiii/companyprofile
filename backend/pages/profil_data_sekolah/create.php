<?php include "../../components/head.php" ?>

<?php $title = 'Create Data Profil Data Sekolah';
$section = 'create_data_profil_data_sekolah' ?>

<body>

    <?php include "../../components/header.php" ?>

    <?php include "../../components/sidebar.php" ?>

    <?php include "../../components/breadcrumb.php" ?>

    <div class="row">
        <!-- beranda start -->
        <div class="col-12">
            <div class="card">
                <div class="card-body mt-3">
                    <form action="../../actions/profil_data_sekolah/store.php" method="post" enctype="multipart/form-data">
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
                        <div class="d-flex">
                        <button
                            type="submit"
                            class="btn btn-primary"
                            name="tombol"
                            value="simpan"
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