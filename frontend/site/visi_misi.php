<?php include "../components/head.php" ?>
<?php $title = 'Visi Misi' ?>

<body class="index-page">

    <?php include "../components/header_kecil.php" ?>

    <?php include "../contents/beranda_kecil.php" ?>

    <!-- Constructions Section -->
    <section id="kepala_sekolah" class="constructions section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Visi Misi</h2>

        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 d-flex">
                <?php include "../actions/visi_misi/show_title.php" ?>
                <div class="col-12 portfolio-item isotope-item filter-remodeling mx-auto" data-aos="fade-up" data-aos-delay="100">
                    <h5>Visi</h5>
                    <p><?= $visi_misi->visi ?></p>
                    <h5>Misi</h5>
                    <p><?= $visi_misi->misi ?></p>
                </div><!-- End Card Item -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                </div>

            </div>

        </div>

    </section><!-- /Constructions Section -->



    <?php include "../components/footer_kecil.php" ?>

    <?php include "../components/scrolltop.php" ?>

    <?php include "../components/preloader.php" ?>

    <?php include "../components/script.php" ?>

</body>

<?php include "../components/end.php" ?>