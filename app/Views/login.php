<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Beranda &mdash; E-Speaking</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="card shadow">
    <div class="row card-body">
        <form class="col-md-4 offset-md-1 my-5" action="POST">
            <h3>Masuk Sekarang</h3>
            <p class="text-secondary mb-4">Masuk dengan akun yang sudah kamu daftarkan</p>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="name@domain.com">
                <small class="text-secondary">Masukkan username kamu</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" placeholder="minimal 8 karakter" min="8">
                <small class="text-secondary">Masukkan kata sandi kamu</small>
            </div>
            <button class="btn btn-espeaking shadow py-2 px-4 rounded">Masuk</button>
        </form>
        <div class="col-md-5 offset-md-1 text-center d-flex align-items-center">
            <div class="my-5">
                <h3>Belum Punya Akun?</h3>
                <p>Daftarkan diri kamu segera di E-Speaking, mulai belajar dan asah skill kamu.</p>
                <a href="<?= base_url() ?>/daftar" class="btn btn-outline-espeaking shadow py-2 px-4 rounded">Daftar</a>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>