<?php include "../../components/head.php" ?>

<?php $title = 'Contact';
$section = 'contact' ?>

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
              <tr>
                <?php include "../../actions/contact/show_title.php" ?>
                <th style="width: 100px;">Judul</th>
                <th style="width: 10px;">:</th>
                <td><?= $contact_title->judul ?></td>
              </tr>
              <tr>
                <th>Sub Judul</th>
                <th>:</th>
                <td><?= $contact_title->sub_judul ?></td>
              </tr>
              <tr>
                <th>Sub Sub Judul</th>
                <th>:</th>
                <td><?= $contact_title->sub_sub_judul ?></td>
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
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php include "../../actions/contact/showAll.php";
              $no = 1;
              while ($item = $result->fetch_object()) : ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $item->nama ?></td>
                  <td><?= $item->email ?></td>
                  <td><?= $item->phone ?></td>
                  <td><?= $item->deskripsi ?></td>
                  <td style="width: 5%;"><a
                      href="detail.php?id=<?= $item->id ?>" class="btn btn-info text-light"><i class="fa-solid fa-circle-info"></i></a></td>
                  <td style="width: 5%;"><a
                      href="../../actions/contact/destroy.php?id=<?= $item->id ?>"
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