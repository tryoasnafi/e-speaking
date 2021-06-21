<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Beranda &mdash; E-Speaking</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section style="height: 480px;">
	<!-- Hero -->
	<div class="d-flex flex-md-row flex-column mb-5">
		<div class="col-md-6 d-flex align-item-center justify-content-center flex-column order-2 order-md-1 p-0">
			<h2>Selamat Datang di E-Speaking</h2>
			<p class="mt-2">Sebuah Ruang Belajar <em>public speaking</em> untuk membantumu lebih percaya diri dalam berbicara di depan <em>audiens</em></p>
			<div class="mt-2">
				<a href="<?= base_url('register') ?>" class="btn btn-espeaking">Daftar Sekarang</a>
			</div>
		</div>
		<div class="col-md-6 order-1 order-md-2 p-0">
			<img src="<?= base_url('assets/img/ilustrasi-public-speaking.svg') ?>" width="80%" alt="">
		</div>
	</div>
	<!-- Tentang Section -->
	<!-- FAQs Section -->
</section>
<?= $this->endSection() ?>