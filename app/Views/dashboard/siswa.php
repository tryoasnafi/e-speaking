<?= $this->extend('layout/dashboard/default') ?>

<?= $this->section('title') ?>
<title>Dashboard Siswa &mdash; E-Speaking</title>
<?= $this->endSection() ?>

<?= $this->section('content-header') ?>
<h1>Beranda Siswa &mdash; E-Speaking</h1>
<?= $this->endSection() ?>

<?= $this->section('content-body') ?>
<h2>Selamat Datang Siswa <?= session('user_name') ?>!</h2>
<?= $this->endSection() ?>