<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_TITLE; ?></title>
    <link href="<?php echo BASE_URL; ?>/img/favicon.ico" type="image/x-icon" rel="icon"/><link href="/system/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/resources/bootstrap/css/bootstrap.min.css"/>
    <!-- Custom -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/styles.css"/>
    <!-- Jquery -->
    <script src="<?php echo BASE_URL; ?>/resources/jquery/jquery.js"></script>
    <!--Jquery-UI-->
    <script src="<?php echo BASE_URL; ?>/resources/jquery-ui/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/resources/jquery-ui/jquery-ui.css"/>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo BASE_URL; ?>"><?php echo SITE_TITLE; ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo BASE_URL; ?>">Home</a></li>
                <li><a href="<?php echo BASE_URL; ?>/list.php">List</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container clearfix">