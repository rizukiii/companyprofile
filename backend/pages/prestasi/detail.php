<?php include "../../components/head.php" ?>

<?php $title = 'Detail Data Prestasi';
$section = 'detail_data_prestasi' ?>

<body>

  <?php include "../../components/header.php" ?>

  <?php include "../../components/sidebar.php" ?>

  <?php include "../../components/breadcrumb.php" ?>

  <div class="row">
    <!-- beranda start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body mt-3">
          <table class="table">
            <tbody>
            <?php include "../../actions/prestasi/show.php" ?>
              <tr>
                <th style="width: 100px;">Foto</th>
                <th style="width: 10px;">:</th>
                <td><img src="../../../storages/images/prestasi_foto/<?= $prestasi_foto->foto ?>" alt="foto"
                style="width: 100%;" onerror="this.style.display='none'"></td>
              </tr>
            </tbody>
          </table>
          <a href="../prestasi" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
    <!-- beranda end -->

  </div>

  <?php include "../../components/footer.php" ?>

  <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>