<?php include "../../components/head.php" ?>

<?php $title = 'Edit Data Contact';
$section = 'edit_data_contact' ?>

<body>

    <?php include "../../components/header.php" ?>

    <?php include "../../components/sidebar.php" ?>

    <?php include "../../components/breadcrumb.php" ?>

    <div class="row">
        <!-- contact start -->
        <div class="col-12">
            <div class="card">
                <div class="card-body mt-3">

                    <?php include "../../actions/contact/show_title.php" ?>
                    <form action="../../actions/contact/update_title.php" method="post">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input
                                type="text"
                                class="form-control"
                                name="judul"
                                id="judul"
                                placeholder="Masukan Judul Company"
                                value="<?= $contact_title->judul ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="sub_judul" class="form-label">Sub Judul</label>
                            <textarea class="form-control" name="sub_judul" id="sub_judul" rows="3"><?= $contact_title->sub_judul ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="sub_sub_judul" class="form-label">Sub Sub Judul</label>
                            <textarea class="form-control" name="sub_sub_judul" id="sub_sub_judul" rows="3"><?= $contact_title->sub_sub_judul ?></textarea>
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
                        <a href="../contact" class="btn btn-primary ms-auto">Kembali</a>
                        </div>
                        
                        
                    </form>
                    
                </div>
            </div>
        </div>
        <!-- contact end -->



        <?php include "../../components/footer.php" ?>

        <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>