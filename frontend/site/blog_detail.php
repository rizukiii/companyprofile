<?php include "../components/head.php" ?>
<?php $title = 'Detail Blog' ?>
<body class="index-page">

    <?php include "../components/header_kecil.php" ?>

    <?php include "../contents/beranda_kecil.php" ?>

        <!-- Recent Blog Posts Section -->
        <section id="blog" class="recent-blog-posts section light-background">

            <div class="container">

                <div class="row gy-5">

                    <?php include "../../backend/actions/blog/show.php"?>

                        <div class="col-12">
                            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="../../storages/images/blog/<?= $blog->foto ?>" class="img-fluid" alt="">
                                    <span class="post-date"><?= $blog->date ?></span>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title"><?= $blog->judul ?></h3>

                                    <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-person"></i> <span class="ps-2"><?= $blog->penulis ?></span>
                                        </div>
                                        <span class="px-3 text-black-50">/</span>
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-folder2"></i> <span class="ps-2"><?= $blog->sumber ?></span>
                                        </div>
                                    </div>

                                    <hr>

                                   <p><?= $blog->deskripsi ?></p>

                                </div>

                            </div>
                        </div><!-- End post item -->

                    

                </div>

            </div>

        </section><!-- /Recent Blog Posts Section -->

    </main>



    <?php include "../components/footer.php" ?>

    <?php include "../components/scrolltop.php" ?>

    <?php include "../components/preloader.php" ?>

    <?php include "../components/script.php" ?>

</body>

<?php include "../components/end.php" ?>