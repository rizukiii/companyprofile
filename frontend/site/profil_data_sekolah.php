<?php include "../components/head.php" ?>
<?php $title = 'Profil Data Sekolah' ?>

<body class="index-page">

    <?php include "../components/header_kecil.php" ?>

    <?php include "../contents/beranda_kecil.php" ?>

    <!-- Constructions Section -->
    <section id="profil_data_sekolah" class="constructions section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Profil Data Sekolah</h2>

        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4  d-flex">

                <?php include "../actions/profil_data_sekolah/show.php" ?>

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                    <div class="portfolio-content h-100">
                        <img src="../../storages/images/profil_data_sekolah/<?= $profil_data_sekolah->foto ?>" class="img-fluid" alt="">
                    </div>
                </div><!-- End Portfolio Item -->


            </div>

        </div>

    </section><!-- /Constructions Section -->



    <?php include "../components/footer_kecil.php" ?>

    <?php include "../components/scrolltop.php" ?>

    <?php include "../components/preloader.php" ?>

    <?php include "../components/script.php" ?>

</body>

<?php include "../components/end.php" ?>