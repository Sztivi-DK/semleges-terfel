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

<header class="container-fluid bg-success text-white p-2">
    <div class="row">
	<div class="col-sm-4 h5 pt-3 ps-4">Semleges Térfél</div>
	<nav class="col-sm-8 navbar navbar-dark navbar-expand-sm justify-content-end pe-2">
	<?php if (true): ?>
	    <ul class="navbar-nav">
		<li class="nav-item">
		    <a href="<?= base_url() ?>" class="nav-link">
			<i class="fa-solid fa-house-chimney"></i> Kezdőlap
		    </a>
		</li>
		<li class="nav-item">
		    <a href="<?= base_url('histories') ?>" class="nav-link">
			<i class="fa-solid fa-basketball"></i> Régi idők focija
		    </a>
		</li>
		<li class="nav-item">
		    <a href="<?= base_url('szobo') ?>" class="nav-link">
		    <i class="fa-solid fa-person-running"></i> Szoboszlai Dominik
		    </a>
		</li>
		<li class="nav-item">
		    <a href="<?= base_url('nb_one') ?>" class="nav-link">
		    <i class="fa-solid fa-rectangle-list"></i> NB1
		    </a>
		</li>
	    </ul>
	<?php endif; ?>
	</nav>
    </div>
</header>

<main>