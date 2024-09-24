<?php include "../../components/head.php" ?>

<?php $title = 'Detail Data Blog';
$section = 'detail_data_blog' ?>

<body>

  <?php include "../../components/header.php" ?>

  <?php include "../../components/sidebar.php" ?>

  <?php include "../../components/breadcrumb.php" ?>

  <div class="row">
    <!-- blog start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body mt-3">
          <table class="table">
            <tbody>
              <?php include "../../actions/blog/show.php" ?>
              <tr>
                <th style="width: 100px;">Foto</th>
                <th style="width: 10px;">:</th>
                <td><img src="../../../storages/images/blog/<?= $blog->foto ?>" alt="foto"
                    style="width: 100%;" onerror="this.style.display='none'"></td>
              </tr>
              <tr>
                <th>Penulis</th>
                <th>:</th>
                <td><?= $blog->penulis ?></td>
              </tr>
              <tr>
                <th>Deskripsi</th>
                <th>:</th>
                <td><?= $blog->deskripsi ?></td>
              </tr>
              <tr>
                <th>Sumber</th>
                <th>:</th>
                <td><?= $blog->sumber ?></td>
              </tr>
              <tr>
                <th>Judul</th>
                <th>:</th>
                <td><?= $blog->judul ?></td>
              </tr>
            </tbody>
          </table>
          <a href="../blog" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
    <!-- blog end -->

  </div>

  <?php include "../../components/footer.php" ?>

  <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>