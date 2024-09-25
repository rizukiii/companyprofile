<!-- Constructions Section -->
<section id="konsentrasi_keahlian" class="constructions section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <?php include "../actions/konsentrasi_keahlian/show_title.php" ?>
    <h2><?= $konsentrasi_keahlian_title->judul ?></h2>
    <p><?= $konsentrasi_keahlian_title->sub_judul ?></p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <?php include "../actions/konsentrasi_keahlian/showAll.php";
      while ($item = $result->fetch_object()) : ?>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg"><img src="../../storages/images/konsentrasi_keahlian/<?= $item->foto ?>" alt=""></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title"><?= $item->nama ?></h4>
                  <p><?= substr($item->deskripsi, 0, 250) ?>...</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

      <?php endwhile; ?>
      <a href="../site/konsentrasi_keahlian.php" class="no blue-line text-center mt-5" data-aos="fade-up" data-aos-delay="100">Lihat Selengkapnya...</a>
    </div>
    
  </div>

</section><!-- /Constructions Section -->