<footer id="footer" class="footer dark-background">

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-6 footer-about">
        <a href="index.html" class="logo d-flex align-items-center">
          <?php include "../actions/beranda_carousel/show_title.php" ?>
          <span class="sitename"><?= $beranda->nama ?></span>
        </a>
        <div class="footer-contact pt-3">
          <?php include "../actions/footer/show_title.php" ?>
          <p><?= $footer->jalan ?></p>
          <p><?= $footer->kota ?></p>
          <p class="mt-3"><strong>Telp:</strong> <span><?= $footer->telp ?></span></p>
          <p><strong>Email:</strong> <span><?= $footer->email ?></span></p>
        </div>
        <div class="social-links d-flex mt-4">

          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>

        </div>
      </div>

      <div class="col-lg-4 col-md-3 footer-links">
        <h4>Akses Cepat</h4>
        <ul>
          <li><a href="../pages/index.php">Program Unggulan</a></li>
          <li><a href="../pages/index.php">Konsentrasi keahlian</a></li>
          <li><a href="../pages/index.php">Prestasi</a></li>
          <li><a href="../pages/index.php">Blog</a></li>
          <li><a href="../pages/index.php">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Akses Cepat</h4>
        <ul>
          <li><a href="../site/profil_data_sekolah.php">Profil Data Sekolah</a></li>
          <li><a href="../site/kepala_sekolah.php">Kepala Sekolah</a></li>
          <li><a href="../site/visi_misi.php">Visi & Misi</a></li>
        </ul>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename"><?= $beranda->nama ?></strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you've purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>

</footer>