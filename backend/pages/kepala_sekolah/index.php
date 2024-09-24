<?php include "../../components/head.php" ?>

<?php $title = 'Kepala Sekolah';
$section = 'kepala_sekolah' ?>

<body>

  <?php include "../../components/header.php" ?>

  <?php include "../../components/sidebar.php" ?>

  <?php include "../../components/breadcrumb.php" ?>

  <div class="row">
    <!-- beranda start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body mt-3">
          <div class="mb-3">
            <a href="edit_title.php" class="btn btn-primary">Edit Data</a>
          </div>
          <table class="table">
            <tbody>
              <?php include "../../actions/kepala_sekolah/show_title.php" ?>
              <tr>
                <th style="width: 100px;">Foto</th>
                <th style="width: 100px;">:</thv>
                <td><img src="../../../storages/images/kepala_sekolah/<?= $kepala_sekolah->foto ?>" alt="foto"
                    style="width: 100%;" onerror="this.style.display='none'"></td>
              </tr>
              <tr>
                <th>Deskripsi</th>
                <th style="width: 100px;">:</th>
                <td><?= $kepala_sekolah->deskripsi ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- beranda end -->

  </div>

  <?php include "../../components/footer.php" ?>

  <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>