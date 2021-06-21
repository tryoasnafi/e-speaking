<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Beranda &mdash; E-Speaking</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto card shadow">
            <div class="card-title text-center mt-5">
                <h3>Mari Bergabung!</h3>
            </div>
            <form action="POST" class="card-body">
                <div class="form-group">
                    <label for="NamaLengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namalengkap" aria-describedby="namahelp" placeholder="Masukkan Nama Lengkap kamu">
                </div>
                <div class="form-group">
                    <label for="Username">User Name</label>
                    <input type="text" class="form-control" id="username" aria-describedby="usernamehelp" placeholder="Masukkan username kamu inginkan">
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailhelp" placeholder="Masukkan email kamu, mis:masha@gmail.com">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="password" aria-describedby="passwordhelp" placeholder="Masukkan kata sandi minimal 6 karakter">
                </div>
                <div class="form-group">
                    <label for="Kpassword">Konfirmasi password</label>
                    <input type="password" class="form-control" id="kpassword" aria-describedby="kpasswordhelp" placeholder="Masukkan ulang kata sandi">
                </div>

                <button class="btn btn-espeaking btn-block" type="submit">Daftar</button>
            </form>

            <span class="text-center mt-3 mb-5 text-secondary">Sudah Punya Akun? <a href="<?= base_url() ?>/masuk" class="text-espeaking"><strong>Masuk Sekarang</strong></a></span>
        </div>
    </div>
</section>
<?= $this->endSection() ?>