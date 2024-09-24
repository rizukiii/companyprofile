<?php include "../components/head.php" ?>
<?php $title = 'Konsentrasi keahlian' ?>
<body class="index-page">

    <?php include "../components/header_kecil.php" ?>

    <?php include "../contents/beranda_kecil.php" ?>


        <!-- Constructions Section -->
        <section id="konsentrasi_keahlian" class="constructions section">

        <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
            <h2>Konsentrasi Keahlian</h2>

        </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <?php include "../../backend/actions/konsentrasi_keahlian/showAll.php";
                    while ($item = $result->fetch_object()) : ?>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                                <div class="row d-flex">
                                    <div class="col-12">
                                        <div class="card-bg"><img src="../../storages/images/konsentrasi_keahlian/<?= $item->foto ?>" alt="" style="width: 100%;"></div>
                                    </div>
                                    <div class="col-12 d-flex align-items-center">
                                        <div class="card-body">
                                            <h4 class="card-title"><?= $item->nama ?></h4>
                                            <p><?= $item->deskripsi ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Card Item -->

                    <?php endwhile; ?>
                </div>

            </div>

        </section><!-- /Constructions Section -->



        <?php include "../components/footer_kecil.php" ?>

        <?php include "../components/scrolltop.php" ?>

        <?php include "../components/preloader.php" ?>

        <?php include "../components/script.php" ?>

</body>

<?php include "../components/end.php" ?>