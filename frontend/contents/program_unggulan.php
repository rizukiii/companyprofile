<!-- Services Section -->
<section id="program_unggulan" class="services section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <?php include "../actions/program_unggulan/show_title.php" ?>
    <h2><?= $program_unggulan_title->judul ?></h2>
    <p><?= $program_unggulan_title->sub_judul ?></p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <?php include "../actions/program_unggulan/showAll.php";
      while ($item = $result->fetch_object()): ?>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="fa-solid <?= $item->icon ?>"></i>
            </div>
            <h3 class="d-block"><?= $item->nama ?></h3>
            <a href="#" class="readmore stretched-link d-block" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $item->id ?>">Read more <i class="bi bi-arrow-right"></i></a>
          </div>

        </div><!-- End Service Item -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal<?= $item->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $item->nama ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p style="word-wrap: break-word"><?= $item->deskripsi ?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>

  </div>

</section><!-- /Services Section -->