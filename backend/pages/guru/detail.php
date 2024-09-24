<?php include "../../components/head.php" ?>

<?php $title = 'Detail Data Guru';
$section = 'detail_data_guru' ?>

<body>

  <?php include "../../components/header.php" ?>

  <?php include "../../components/sidebar.php" ?>

  <?php include "../../components/breadcrumb.php" ?>

  <div class="row">
    <!-- guru start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body mt-3">
          <table class="table">
            <tbody>
            <?php include "../../actions/guru/show.php" ?>
              <tr>
                <th style="width: 100px;">Foto</th>
                <th style="width: 10px;">:</th>
                <td><img src="../../../storages/images/guru/<?= $guru->foto ?>" alt="foto"
                style="width: 100%;" onerror="this.style.display='none'"></td>
              </tr>
              <tr>
                <th>Nama</th>
                <th>:</th>
                <td><?= $guru->nama ?></td>
              </tr>
            </tbody>
          </table>
          <a href="../guru" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
    <!-- guru end -->

  </div>

  <?php include "../../components/footer.php" ?>

  <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>