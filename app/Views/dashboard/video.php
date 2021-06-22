<?= $this->extend('layout/dashboard/default') ?>

<?= $this->section('title') ?>
<title>Dashboard Siswa &mdash; E-Speaking</title>
<?= $this->endSection() ?>

<?= $this->section('content-header') ?>
<h1>Beranda Siswa &mdash; E-Speaking</h1>
<?= $this->endSection() ?>

<?= $this->section('content-body') ?>
<div class="col-12 col-md-8 col-lg-6">
    <div class="alert alert-info">
        <b>Note!</b> Kamu boleh mengupload video kamu ke layanan seperti youtube atau tempat hosting lainnya! .
    </div>
</div>
<div class="col-12 col-md-8 col-lg-6">
    <form action="<?= base_url() ?>/dashboard/video" method="POST" class="card">
        <?= csrf_field() ?>
        <input type="hidden" name="user_id" value="<?= session('user_id') ?>">
        <div class="card-header">
            <h4>Upload link video berbicara kamu disini!</h4>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashData('success')) : ?>
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                        <?= session()->getFlashData('success') ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="form-group">
                <label>*Judul/Tema</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="form-group">
                <label>*Link video (e.g youtube):</label>
                <textarea class="form-control" name="link" required></textarea>
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>