<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?=doctype('html5') ?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Homepage</title>
    <?=link_tag('assets/css/bootstrap.min.css'); ?>
    <?=link_tag('assets/css/bootstrap-theme.min.css'); ?>
    <?=link_tag('assets/css/estilos.css'); ?>
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=site_url();?>">CodeIgniter App</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?=site_url();?>">Home</a></li>
                <li><a href="<?=site_url("Admin") ?>">admin</a></li>
                <li><a href="<?=site_url("contacto") ?>">Contacto</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<script src="<?=base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?=base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>