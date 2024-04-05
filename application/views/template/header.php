<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title translate="no"><?= $title ?></title>

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/favicon.png" rel="apple-touch-icon">

    <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/adm/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-navbartop-freedy">
        <!-- Navbar Brand-->
        <a class="navbar-brand text-center d-flex align-items-center justify-content-center" href="<?=base_url()?>admin/dashboard">
            <img src="<?= base_url() ?>assets/img/logo-only.svg" alt="logo" class="me-2" style="height: 25px;">
        </a>
		<!-- Mode -->
			<!-- Navbar links -->
			<ul class="navbar-nav d-flex justify-content-between col-9">
				<div class="ms-2">
					<label for="proyek" class="visually-hidden">Sandbox</label>
					<select class="form-select-md form-control-solid" id="proyek">
						<option value="Sandbox">Sandbox</option>
						<option value="Live">Live</option>
					</select>
				</div>

				<div class="d-flex align-items-center justify-content-between flex-wrap">
					<li class="me-3">
						<a class="navbar-text me-5">Saldo:9999999</a>
					</li>
					<li class="dropdown d-flex">
						<a href="#" class="navbar-text dropdown-toggle" role="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
							Profile
						</a>
						<ul class="dropdown-menu" aria-labelledby="profileDropdown">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#">Separated link</a></li>
						</ul>
					</li>
				</div>
			</ul>

    </nav>
