<main id="main" class="main ">
    <div class="d-flex">
        <div class="pagetitle">
            <h1><?= $title ?></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../<?= $section ?>">Home</a></li>
                    <li class="breadcrumb-item active"><?= $title ?></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <?php if($_SESSION['role'] == 'admin' ) : ?>
        <a href="../../../frontend/pages/index.php" class="btn btn-secondary text-light ms-auto" style="height: 40px;" target="_blank">Ke Front End</a>
        <?php endif; ?>
    </div>

    <section class="section <?= $section ?>">