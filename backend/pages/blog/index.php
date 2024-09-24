<?php include "../../components/head.php" ?>

<?php $title = 'Blog';
$section = 'blog' ?>

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
              <?php include "../../actions/blog/show_title.php" ?>
              <tr>
                <th style="width: 100px;">Judul</th>
                <th style="width: 10px;">:</th>
                <td><?= $blog_title->judul ?></td>
              </tr>
              <tr>
                <th>Sub Judul</th>
                <th>:</th>
                <td><?= $blog_title->sub_judul ?></td>
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
                <th>Foto</th>
                <th>Penulis</th>
                <th>Date</th>
                <th>Deskripsi</th>
                <th>Sumber</th>
                <th>Judul</th>
                <th></th>
                <th>Aksi</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php include "../../actions/blog/showAll.php";
              $no = 1;
              while ($item = $result->fetch_object()): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><img src="../../../storages/images/blog/<?= $item->foto ?>" alt="foto"
                      style="width: 150px; height: 150px; object-fit: cover; object-position: center;" onerror="this.style.display='none'"></td>
                  <td><?= substr($item->penulis,0,20) ?></td>
                  <td><?= substr($item->date,0,20) ?></td>
                  <td><?= substr($item->deskripsi,0,20) ?></td>
                  <td><?= substr($item->sumber,0,20) ?></td>
                  <td><?= substr($item->judul,0,20) ?></td>
                  <td style="width: 5%;"><a
                      href="detail.php?id=<?= $item->id ?>"
                      class="btn btn-info text-light"><i class="fa-solid fa-circle-info"></i></a></td>

                  <td style="width: 5%;"><a
                      href="edit.php?id=<?= $item->id ?>"
                      class="btn btn-warning text-light"><i class="fa-solid fa-pen-to-square"></i></a></td>

                  <td style="width: 5%;"><a
                      href="../../actions/blog/destroy.php?id=<?= $item->id ?>"
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