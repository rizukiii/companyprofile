<?php include "../../components/head.php" ?>

<?php $title = 'Footer';
$section = 'footerr' ?>

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
              <?php include "../../actions/footer/show_title.php" ?>
              <tr>
                <th style="width: 100px;">Jalan</th>
                <th style="width: 10px;">:</th>
                <td><?= $footer->jalan ?></td>
              </tr>
              <tr>
                <th>Kota</th>
                <th>:</th>
                <td><?= $footer->kota ?></td>
              </tr>
              <tr>
                <th>Telp</th>
                <th>:</th>
                <td><?= $footer->telp ?></td>
              </tr>
              <tr>
                <th>Email</th>
                <th>:</th>
                <td><?= $footer->email ?></td>
              </tr>
            </tbody>

          </table>

        </div>
      </div>
    </div>
    <!-- beranda end -->

    <!-- berada carousel start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body mt-3">
          <div class="mb-3">
            <a href="create.php" class="btn btn-primary">Tambah Data</a>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Icon</th>
                <th>Link</th>
                <th></th>
                <th>Aksi</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php include "../../actions/footer/showAll.php";
              $no = 1;
              while ($item = $result->fetch_object()): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><i class="bi <?= $item->icon ?>"></i></a></td>
                  <td><?= $item->link ?></td>
                  <td style="width: 5%;"><a
                      href="detail.php?id=<?= $item->id ?>"
                      class="btn btn-info text-light"><i class="fa-solid fa-circle-info"></i></a></td>

                  <td style="width: 5%;"><a
                      href="edit.php?id=<?= $item->id ?>"
                      class="btn btn-warning text-light"><i class="fa-solid fa-pen-to-square"></i></a></td>

                  <td style="width: 5%;"><a
                      href="../../actions/footer/destroy.php?id=<?= $item->id ?>"
                      onclick="return confirm('Apakah Anda Yakin?')"
                      class="btn btn-danger text-light"><i class="fa-solid fa-ban"></i></a></td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
    <!-- beranda carousel end -->
  </div>

  <?php include "../../components/footer.php" ?>

  <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>