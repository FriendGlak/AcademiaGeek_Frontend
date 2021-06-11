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
    <link rel="icon" type="image/png" href="<?php echo constant('URL') . constant('LOGOADOPCION'); ?>" />
    <script src="<?php echo constant('URL'); ?>public/js/jquery.js"></script>

</head>

<body class="bg-light">
    <script>           
        const URL = "<?php echo constant('URL'); ?>"
    </script>
    <?php require 'views/items/navbars/navbar-adopcion.php' ?>