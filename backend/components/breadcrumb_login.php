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
    </div>

    <section class="section <?= $section ?>"></section>