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
        <div class="d-flex">
          <?php include "../actions/footer/showAll.php";
          while ($item = $result->fetch_object()) : ?>
            <div class="social-links mt-4">
              <a href="<?= $item->link ?>"><i class="bi <?= $item->icon ?>"></i></a>
            </div>
          <?php endwhile; ?>
        </div>
      </div>

      <div class="col-lg-4 col-md-3 footer-links">
        <h4>Akses Cepat</h4>
        <ul>
          <li><a href="#program_unggulan">Program Unggulan</a></li>
          <li><a href="#konsentrasi_keahlian">Konsentrasi keahlian</a></li>
          <li><a href="#prestasi">Prestasi</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
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
  </div>

</footer>