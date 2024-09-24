<?php include "../../components/head.php" ?>

<?php $title = 'Create Data Blog';
$section = 'create_data_blog' ?>

<body>

    <?php include "../../components/header.php" ?>

    <?php include "../../components/sidebar.php" ?>

    <?php include "../../components/breadcrumb.php" ?>

    <div class="row">
        <!-- program keunggulan start -->
        <div class="col-12">
            <div class="card">
                <div class="card-body mt-3">
                    <form action="../../actions/blog/store.php" method="post" enctype="multipart/form-data">
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
                            <label for="penulis" class="form-label">Penulis</label>
                            <input
                                type="text"
                                class="form-control"
                                name="penulis"
                                id="penulis"
                                placeholder="Masukan Penulis Company" />
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input
                                type="text"
                                class="form-control"
                                name="date"
                                id="date"
                                placeholder="Masukan Date Company" />
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
                        <div class="mb-3">
                            <label for="sumber" class="form-label">sumber</label>
                            <input
                                type="text"
                                class="form-control"
                                name="sumber"
                                id="sumber"
                                placeholder="Masukan sumber Company" />
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">judul</label>
                            <input
                                type="text"
                                class="form-control"
                                name="judul"
                                id="judul"
                                placeholder="Masukan judul Company" />
                        </div>
                        <div class="d-flex">
                            <button
                                type="submit"
                                class="btn btn-primary"
                                name="tombol"
                                value="simpan">
                                Submit
                            </button>
                            <a href="../blog" class="btn btn-primary ms-auto">Kembali</a>
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