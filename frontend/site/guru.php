<?php include "../components/head.php" ?>
<?php $title = 'Guru' ?>
<body class="index-page">

    <?php include "../components/header_kecil.php" ?>

    <?php include "../contents/beranda_kecil.php" ?>

        <!-- Projects Section -->
        <section id="guru" class="projects section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Guru</h2>

        </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <?php include "../actions/guru/showAll.php";
                        while ($item = $result->fetch_object()) : ?>

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                    <img src="../../storages/images/guru/<?= $item->foto ?>" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <p><?= $item->nama ?></p>
                                        <a href="../../storages/images/guru/<?= $item->foto ?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                        <?php endwhile; ?>

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Projects Section -->

        <?php include "../components/footer_kecil.php" ?>

        <?php include "../components/scrolltop.php" ?>

        <?php include "../components/preloader.php" ?>

        <?php include "../components/script.php" ?>

</body>

<?php include "../components/end.php" ?>