<main class="main">

  <!-- Hero Section -->
  <section id="beranda" class="hero section dark-background">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6 text-center">
            <?php include "../actions/beranda_carousel/show_title.php" ?>
            <h2><?= $beranda->judul ?></h2>
            <p><?= $beranda->sub_judul ?></p>
            <a href="#program_unggulan" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <?php include "../actions/beranda_carousel/showAll.php";
      $no = 1;
      $active = 'active';
      while ($item = $result->fetch_object()):  ?>

        <div class="carousel-item <?= $no == 1 ? $active : '' ?>">
          <img src="../../storages/images/beranda_carousel/<?= $item->foto ?>" alt="">
        </div>

      <?php $no++;
      endwhile; ?>
    </div>

  </section><!-- /Hero Section -->
