<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>" />
    <?= $this->renderSection('title') ?>
</head>

<body>
    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">E-Speaking</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url() ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                </ul>
                <div class="ml-auto">
                    <a href="<?= base_url('login') ?>" class="btn btn-outline-espeaking">Masuk</a>
                    <a href="<?= base_url('register') ?>" class="btn btn-espeaking">Daftar</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <div class="container-md main-content">
        <?= $this->renderSection('content') ?>
    </div>
    <!-- Footer -->
    <footer class="py-3 bg-espeaking text-center text-white">
        <span>Copyright &copy; 2021 E-Speaking Team</span>
    </footer>

    <script src="<?= base_url() ?>/assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>