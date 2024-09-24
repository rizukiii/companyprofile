<?php include "../../components/head.php" ?>

<?php $title = 'Detail Data Contact';
$section = 'detail_data_contact' ?>

<body>

  <?php include "../../components/header.php" ?>

  <?php include "../../components/sidebar.php" ?>

  <?php include "../../components/breadcrumb.php" ?>

  <div class="row">
    <!-- contact start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body mt-3">
          <table class="table">
            <tbody>
            <?php include "../../actions/contact/show.php" ?>
            <tr>
              <th style="width: 100px;">Nama</th>
              <th style="width: 10px;">:</th>
              <td><?= $contact->nama ?></td>
            </tr>
              <tr>
                <th>Email</th>
                <th>:</th>
                <td><?= $contact->email ?></td>
              </tr>
              <tr>
                <th>Phone</th>
                <th>:</th>
                <td><?= $contact->phone ?></td>
              </tr>
              <tr>
                <th>Deskripsi</th>
                <th>:</th>
                <td><?= $contact->deskripsi ?></td>
              </tr>
            </tbody>
          </table>
          <a href="../contact" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
    <!-- contact end -->

  </div>

  <?php include "../../components/footer.php" ?>

  <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>