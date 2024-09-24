<?php include "../components/head.php" ?>
<?php $title = 'Prestasi' ?>
<body class="index-page">

    <?php include "../components/header_kecil.php" ?>

    <?php include "../contents/beranda_kecil.php" ?>

        <!-- Projects Section -->
        <section id="prestasi" class="projects section light-background">

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <?php include "../../backend/actions/prestasi/showAll.php";
                        while ($item = $result->fetch_object()) : ?>

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                    <img src="../../storages/images/prestasi_foto/<?= $item->foto ?>" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>App <?= $item->id ?></h4>

                                        <a href="../../storages/images/prestasi_foto/<?= $item->foto ?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>

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