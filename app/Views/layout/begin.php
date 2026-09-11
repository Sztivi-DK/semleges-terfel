<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semleges Térfél</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="ckeditor5/ckeditor5.css">
</head>
<body class="bg-light">

<header class="container-fluid bg-success text-white py-2">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-sm-4 h5 mb-0">
                Semleges Térfél
            </div>

            <nav class="col-sm-8">
                <ul class="navbar-nav flex-row justify-content-end gap-3">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url() ?>">Kezdőlap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('histories') ?>">Régi idők</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('szobo') ?>">Szoboszlai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('nb_one') ?>">NB1</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</header>

<main class="container my-4">
    <div class="row g-4">