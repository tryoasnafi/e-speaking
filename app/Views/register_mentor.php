<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Register Mentor &mdash; E-Speaking</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto card shadow">
            <div class="card-title text-center mt-5">
                <h3>Hayuk jadi Mentor!</h3>
            </div>
            <div class="card-body">
                <?php if (session()->getFlashData('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Sukses!</strong> <?= session()->getFlashData('success') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <form action="<?= base_url('register/mentor') ?>" method="POST" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="fullname">Nama Lengkap</label>
                        <input type="text" class="form-control" id="fullname" name="name" name="fullname" aria-describedby="fullnameHelp" value="<?= old('name') ?>" placeholder="Masukkan Nama Lengkap kamu" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan email kamu" value="<?= old('email') ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="Kata sandi minimal 8 karakter" min="8" required>
                    </div>
                    <div class="form-group">
                        <label for="password2">Konfirmasi password</label>
                        <input type="password" class="form-control" id="password2" name="confirmPassword" aria-describedby="confirmPasswordHelp" placeholder="Masukkan ulang kata sandi" required>
                    </div>
                    <input type="hidden" name="role" id="role" value="mentor">

                    <button class="btn btn-espeaking btn-block" type="submit">Daftar</button>
                </form>
            </div>

            <span class="text-center mt-3 mb-5 text-secondary">Sudah Punya Akun? <a href="<?= base_url('login') ?>" class="text-espeaking"><strong>Masuk Sekarang</strong></a></span>
        </div>
    </div>
</section>
<?= $this->endSection() ?>