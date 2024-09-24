<?php include "../../components/head.php" ?>

<?php $title = 'Detail Data PPDB';
$section = 'detail_data_ppdb' ?>

<body>

  <?php include "../../components/header.php" ?>

  <?php include "../../components/sidebar.php" ?>

  <?php include "../../components/breadcrumb.php" ?>

  <div class="row">
    <!-- ppdb start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body mt-3">
          <table class="table">
            <tbody>
            <?php include "../../actions/ppdb/show.php" ?>
              <tr>
                <th style="width: 100px;">Icon</th>
                <th style="width: 10px;">:</th>
                <td><?= $ppdb->icon ?></td>
              </tr>
              <tr>
                <th>Title judul</th>
                <th>:</th>
                <td><?= $ppdb->title_judul ?></td>
              </tr>
              <tr>
                <th>Deskripsi</th>
                <th>:</th>
                <td><?= $ppdb->deskripsi ?></td>
              </tr>
            </tbody>
          </table>
          <a href="../ppdb" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
    <!-- ppdb end -->

  </div>

  <?php include "../../components/footer.php" ?>

  <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>