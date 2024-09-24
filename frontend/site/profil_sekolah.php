<?php include "../components/head.php" ?>
<?php $title = 'Kepala Sekolah' ?>

<body class="index-page">

    <?php include "../components/header_kecil.php" ?>

    <?php include "../contents/beranda_kecil.php" ?>

    <!-- Constructions Section -->
    <section id="kepala_sekolah" class="constructions section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Profil Data Sekolah</h2>

        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4  d-flex">

                <?php include "../../backend/actions/kepala_sekolah/show_title.php" ?>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-12">
                        <div class="card-bg"><img src="../../storages/images/kepala_sekolah/<?= $kepala_sekolah->foto ?>" alt="" style="width: 500px;">
                        </div>
                        <div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h5>Selamat Datang di Website SMK Negeri 1 Depok Sleman</h5>
                    <p><?= $kepala_sekolah->deskripsi ?></p>
                </div>

            </div>

        </div>

    </section><!-- /Constructions Section -->



    <?php include "../components/footer.php" ?>

    <?php include "../components/scrolltop.php" ?>

    <?php include "../components/preloader.php" ?>

    <?php include "../components/script.php" ?>

</body>

<?php include "../components/end.php" ?>