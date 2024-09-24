<?php include "../../components/head.php" ?>

<?php $title = 'Create Data PPDB';
$section = 'create_data_ppdb' ?>

<body>

    <?php include "../../components/header.php" ?>

    <?php include "../../components/sidebar.php" ?>

    <?php include "../../components/breadcrumb.php" ?>

    <div class="row">
        <!-- program keunggulan start -->
        <div class="col-12">
            <div class="card">
                <div class="card-body mt-3">
                    <form action="../../actions/ppdb/store.php" method="post">
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
                            <label for="title_judul" class="form-label">Title Judul</label>
                            <input
                                type="text"
                                class="form-control"
                                name="title_judul"
                                id="title_judul"
                                placeholder="Masukan Title_judul Company" />
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
                            <a href="../ppdb" class="btn btn-primary ms-auto">Kembali</a>
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