<!-- Projects Section -->
<section id="prestasi" class="projects section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <?php include "../actions/prestasi/show_title.php" ?>
    <h2><?= $prestasi->judul ?></h2>
    <p><?= $prestasi->sub_judul ?></p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

        <?php include "../actions/prestasi/showAll.php";
        while ($item = $result->fetch_object()) : ?>

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
            <div class="portfolio-content h-100">
              <img src="../../storages/images/prestasi_foto/<?= $item->foto ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App <?= $item->id ?></h4>
                <a href="../../storages/images/prestasi_foto/<?= $item->foto ?>" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->
          <?php endwhile; ?>

      </div><!-- End Portfolio Container -->
      
      <a href="../site/prestasi.php" class="no blue-line text-center">Lihat Selengkapnya...</a>

    </div>

  </div>

</section><!-- /Projects Section -->