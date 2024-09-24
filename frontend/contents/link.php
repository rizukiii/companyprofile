<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <?php include "../actions/link/show_title.php" ?>
    <h2><?= $link_title->judul ?></h2>
    <p><?= $link_title->sub_judul ?></p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 40
            },
            "1200": {
              "slidesPerView": 2,
              "spaceBetween": 20
            }
          }
        }
      </script>

      <div class="swiper-wrapper">

        <?php include "../actions/link/showAll.php";
        while ($item = $result->fetch_object()) : ?>

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="../../storages/images/link/<?= $item->foto ?>" class="testimonial-img shadow-sm" alt="foto link">
                <h3><?= $item->nama ?></h3>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span><?= $item->deskripsi ?></span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <?php endwhile; ?>

      </div>

    <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Testimonials Section -->