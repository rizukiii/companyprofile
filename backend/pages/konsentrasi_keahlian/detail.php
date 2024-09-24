<?php include "../../components/head.php" ?>

<?php $title = 'Detail Data Konsentrasi Keahlian';
$section = 'detail_data_konsentrasi_keahlian' ?>

<body>

  <?php include "../../components/header.php" ?>

  <?php include "../../components/sidebar.php" ?>

  <?php include "../../components/breadcrumb.php" ?>

  <div class="row">
    <!-- konsentrasi_keahlian start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body mt-3">
          <table class="table">
            <tbody>
            <?php include "../../actions/konsentrasi_keahlian/show.php" ?>
              <tr>
                <th style="width: 100px;">Foto</th>
                <th style="width: 10px;">:</th>
                <td><img src="../../../storages/images/konsentrasi_keahlian/<?= $konsentrasi_keahlian->foto ?>" alt="foto"
                style="width: 100%;" onerror="this.style.display='none'"></td>
              </tr>
              <tr>
                <th>Nama</th>
                <th>:</th>
                <td><?= $konsentrasi_keahlian->nama ?></td>
              </tr>
              <tr>
                <th>Deskripsi</th>
                <th>:</th>
                <td><?= $konsentrasi_keahlian->deskripsi ?></td>
              </tr>
            </tbody>
          </table>
          <a href="../konsentrasi_keahlian" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
    <!-- konsentrasi_keahlian end -->

  </div>

  <?php include "../../components/footer.php" ?>

  <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>