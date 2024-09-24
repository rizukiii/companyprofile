<?php include "../../components/head.php" ?>

<?php $title = 'Detail Data Program Unggulan';
$section = 'detail_data_program_unggulan' ?>

<body>

  <?php include "../../components/header.php" ?>

  <?php include "../../components/sidebar.php" ?>

  <?php include "../../components/breadcrumb.php" ?>

  <div class="row">
    <!-- program_unggulan start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body mt-3">
          <table class="table">
            <tbody>
            <?php include "../../actions/program_unggulan/show.php" ?>
              <tr>
                <th style="width: 100px;">Icon</th>
                <th style="width: 10px;">:</th>
                <td><?= $program_unggulan->icon ?></td>
              </tr>
              <tr>
                <th>Nama</th>
                <th>:</th>
                <td><?= $program_unggulan->nama ?></td>
              </tr>
              <tr>
                <th>Deskripsi</th>
                <th>:</th>
                <td><?= $program_unggulan->deskripsi ?></td>
              </tr>
            </tbody>
          </table>
          <a href="../program_unggulan" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
    <!-- program_unggulan end -->

  </div>

  <?php include "../../components/footer.php" ?>

  <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>