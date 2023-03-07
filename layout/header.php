<!DOCTYPE html>
<html data-bs-theme="dark">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_TITLE; ?></title>
    <link href="<?php echo BASE_URL; ?>/img/favicon.ico" type="image/x-icon" rel="icon"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/resources/bootstrap/css/bootstrap.min.css"/>
    <!-- Bootstrap Table -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/resources/bootstrap-table/bootstrap-table.min.css"/>
    <!-- Custom -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/styles.css"/>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="<?php echo BASE_URL; ?>"><?php echo SITE_TITLE; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/list.php">ROMS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-3">