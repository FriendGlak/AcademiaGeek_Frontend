<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Importado de la red -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title><?php echo constant('NOMBREAPP'); ?></title>

    <!-- Configuraciones locales -->
    <link href="<?php echo constant('URL'); ?>public/css/estilos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo constant('URL') . constant('LOGO'); ?>" />
    <script src="<?php echo constant('URL'); ?>public/js/jquery.js"></script>

    <style>
        .if {
            background-image: url(public/images/image-form.png);
            background-position: center center;
        }
    </style>
</head>

<body class="bg-light">
    <?php require 'views/items/navbars/navbar.php' ?>