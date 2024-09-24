<?php include "../../components/head.php" ?>

<?php $title = 'Detail Data Medsos';
$section = 'detail_data_footer_medsos' ?>

<body>

  <?php include "../../components/header.php" ?>

  <?php include "../../components/sidebar.php" ?>

  <?php include "../../components/breadcrumb.php" ?>

  <div class="row">
    <!-- footer_medsos start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body mt-3">
          <table class="table">
            <tbody>
            <?php include "../../actions/footer/show.php" ?>
              <tr>
                <th style="width: 100px;">Icon</th>
                <th style="width: 10px;">:</th>
                <td><?= $footer_medsos->icon ?></td>
              </tr>
              <tr>
                <th>Link</th>
                <th>:</th>
                <td><?= $footer_medsos->link ?></td>
              </tr>
            </tbody>
          </table>
          <a href="../footer" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
    <!-- footer_medsos end -->

  </div>

  <?php include "../../components/footer.php" ?>

  <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>