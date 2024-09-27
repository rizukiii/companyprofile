<?php include "../components/head.php" ?>
<?php $title = 'Blog' ?>

<body class="index-page">

    <?php include "../components/header_kecil.php" ?>

    <?php include "../contents/beranda_kecil.php" ?>

    <!-- Recent Blog Posts Section -->
    <section id="blog" class="recent-blog-posts section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Blog</h2>

        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">

                <?php include "../../backend/actions/blog/showAll.php";
                while ($item = $result->fetch_object()) : ?>

                    <div class="col-xl-4 col-md-6 d-flex">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="../../storages/images/blog/<?= $item->foto ?>" class="img-fluid" alt="" style="width: 600px; height: 250px; object-fit:cover">
                                <span class="post-date"><?= $item->date ?></span>
                            </div>

                            <div class="post-content d-flex flex-column ">
                                <div style="height: 80px;">
                                    <h3 class="post-title"><?= $item->judul ?></h3>
                                </div>
                                <div class="meta d-flex align-items-center h-100">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2"><?= $item->penulis ?></span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2"><?= $item->sumber ?></span>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex">
                                    <a href="./blog_detail.php?id=<?= $item->id ?>" class="readmore stretched-link justify-content-center align-items-end"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End post item -->

                <?php endwhile; ?>

            </div>

        </div>

    </section><!-- /Recent Blog Posts Section -->

    </main>



    <?php include "../components/footer_kecil.php" ?>

    <?php include "../components/scrolltop.php" ?>

    <?php include "../components/preloader.php" ?>

    <?php include "../components/script.php" ?>

</body>

<?php include "../components/end.php" ?>