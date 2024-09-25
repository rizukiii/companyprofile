<!-- Get Started Section -->
<section id="contact" class="get-started section">

<div class="container">

  <div class="row justify-content-between gy-4">

    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
      <div class="content">
        <?php include "../actions/contact/show_title.php" ?>
        <h3><?= $contact_title->judul ?></h3>
        <p><?= $contact_title->sub_judul ?>
        </p>
        <p><?= $contact_title->sub_sub_judul ?></p>
      </div>
    </div>

    <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">
      <form action="../actions/contact/store.php" method="post" class="php-email-form">
        <h3>Formulir</h3>
        <div class="row gy-3">

          <div class="col-12">
            <input type="text"
             name="nama"
              class="form-control"
               placeholder="Name"
                required="">
          </div>

          <div class="col-12 ">
            <input type="email"
             class="form-control"
              name="email"
               placeholder="Email"
                required="">
          </div>

          <div class="col-12">
            <input type="text"
             class="form-control"
              name="phone"
               placeholder="Phone"
                required="">
          </div>

          <div class="col-12">
            <textarea class="form-control"
             name="deskripsi"
              rows="6"
               placeholder="Message"
                required=""></textarea>
          </div>

          <div class="col-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

            <button
              type="submit"
              class="btn btn-primary"
              name="tombol"
              value="simpan"
            >
              Submit
            </button>
            
          </div>

        </div>
      </form>
    </div><!-- End Quote Form -->

  </div>

</div>

</section><!-- /Get Started Section -->