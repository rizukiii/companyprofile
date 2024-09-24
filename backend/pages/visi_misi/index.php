<?php include "../../components/head.php" ?>

<?php $title = 'Visi Misi';
$section = 'visi_misi' ?>

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
                            <?php include "../../actions/visi_misi/show_title.php" ?>
                            <tr>
                                <th style="width: 100px;">Visi</th>
                                <th style="width: 10px;">:</th>
                                <td><?= $visi_misi->visi ?></td>
                            </tr>
                            <tr>
                                <th>Misi</th>
                                <th>:</th>
                                <td><?= $visi_misi->misi ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- beranda end -->

    </div>

    <?php include "../../components/footer.php" ?>

    <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>