<?= $this->extend('layout/dashboard/default') ?>

<?= $this->section('title') ?>
<title>Dashboard Siswa &mdash; E-Speaking</title>
<?= $this->endSection() ?>

<?= $this->section('content-header') ?>
<h1>Beranda Siswa &mdash; E-Speaking</h1>
<?= $this->endSection() ?>

<?= $this->section('content-body') ?>

<div class="container-md ">
    <div class="row">
        <div class="card shadow">
            <div class="card-body">

                <?php
                foreach ($materi as $m) {
                ?>
                    <div class="col my-5" style="color: #2d3e50;">
                        <img class="my-3" src=/assets/img/<?= $m['img']; ?> width="100%" alt="">
                        <?= $m['materi']; ?>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <?= $pager->links('materi', 'materi_pagination') ?>
    </div>
</div>
<?= $this->endSection() ?>