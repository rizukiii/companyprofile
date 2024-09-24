<?php include "../../components/head.php" ?>

<?php $title = 'Detail Data Link';
$section = 'detail_data_link' ?>

<body>

  <?php include "../../components/header.php" ?>

  <?php include "../../components/sidebar.php" ?>

  <?php include "../../components/breadcrumb.php" ?>

  <div class="row">
    <!-- link start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body mt-3">
          <table class="table">
            <tbody>
            <?php include "../../actions/link/show.php" ?>
              <tr>
                <th style="width: 100px;">Foto</th>
                <th style="width: 10px;">:</th>
                <td><img src="../../../storages/images/link/<?= $link->foto ?>" alt="foto"
                style="width: 100%;" onerror="this.style.display='none'"></td>
              </tr>
              <tr>
                <th>Nama</th>
                <th>:</th>
                <td><?= $link->nama ?></td>
              </tr>
              <tr>
                <th>Deskripsi</th>
                <th>:</th>
                <td><?= $link->deskripsi ?></td>
              </tr>
            </tbody>
          </table>
          <a href="../link" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
    <!-- link end -->

  </div>

  <?php include "../../components/footer.php" ?>

  <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>