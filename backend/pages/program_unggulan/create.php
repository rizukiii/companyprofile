<?php include "../../components/head.php" ?>

<?php $title = 'Create Data Program Unggulan';
$section = 'create_data_program_unggulan' ?>

<body>

    <?php include "../../components/header.php" ?>

    <?php include "../../components/sidebar.php" ?>

    <?php include "../../components/breadcrumb.php" ?>

    <div class="row">
        <!-- program keunggulan start -->
        <div class="col-12">
            <div class="card">
                <div class="card-body mt-3">
                    <form action="../../actions/program_unggulan/store.php" method="post">
                        <div class="mb-3">
                            <label for="icon" class="form-label">Icon</label>
                            <input
                                type="text"
                                class="form-control"
                                name="icon"
                                id="icon"
                                placeholder="Masukan Icon Company" />
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama"
                                id="nama"
                                placeholder="Masukan Nama Company" />
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input
                                type="text"
                                class="form-control"
                                name="deskripsi"
                                id="deskripsi"
                                placeholder="Masukan Deskripsi Company" />
                        </div>
                        <div class="d-flex">
                            <button
                                type="submit"
                                class="btn btn-primary"
                                name="tombol"
                                value="simpan">
                                Submit
                            </button>
                            <a href="../program_unggulan" class="btn btn-primary ms-auto">Kembali</a>
                        </div>


                    </form>

                </div>
            </div>
        </div>
        <!-- program keunggulan end -->



        <?php include "../../components/footer.php" ?>

        <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>