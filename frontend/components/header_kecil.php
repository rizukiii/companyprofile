<header id="header" class="header d-flex align-items-center fixed-top py-1">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
       <?php include "../../backend/actions/beranda_carousel/show_title.php" ?>
      <h1 class="sitename"><?= $beranda->nama ?></h1> <span>.</span>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li class="dropdown"><a href="#"><span>Profil Sekolah</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="../site/kepala_sekolah.php">Kepala Sekolah</a></li>
            <li><a href="../site/profil_data_sekolah.php">Profil Data Sekolah</a></li>
            <li><a href="../site/visi_misi.php">Visi & Misi</a></li>
            <li class="dropdown"><a href="#"> <span>Guru</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="../site/guru.php">Guru</a></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  </div>
</header>