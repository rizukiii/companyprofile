<?php include "../../components/head.php" ?>

<?php $title = 'Edit Data Beranda';
$section = 'edit_data_beranda' ?>

<body>

    <?php include "../../components/header.php" ?>

    <?php include "../../components/sidebar.php" ?>

    <?php include "../../components/breadcrumb.php" ?>

    <div class="row">
        <!-- beranda start -->
        <div class="col-12">
            <div class="card">
                <div class="card-body mt-3">

                    <?php include "../../actions/beranda_carousel/show_title.php" ?>
                    <form action="../../actions/beranda_carousel/update_title.php" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama"
                                id="nama"
                                placeholder="Masukan Nama Company"
                                value="<?= $beranda->nama ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input
                                type="text"
                                class="form-control"
                                name="judul"
                                id="judul"
                                placeholder="Masukan Judul Company"
                                value="<?= $beranda->judul ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="sub_judul" class="form-label">Sub Judul</label>
                            <input
                                type="text"
                                class="form-control"
                                name="sub_judul"
                                id="sub_judul"
                                placeholder="Masukan Sub_judul Company"
                                value="<?= $beranda->sub_judul ?>" />
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
                        <a href="../beranda_carousel" class="btn btn-primary ms-auto">Kembali</a>
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