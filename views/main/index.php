<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo constant('URL') . constant('LOGO'); ?>" />
    <title><?php echo constant('NOMBREAPP'); ?></title>
</head>

<body>
    <?php require 'views/header.php' ?>
    <?php require 'views/items/banners/banner.php' ?>

    <section class="icono_iniciativa bg-white prueba">
        <div class="container bg-white position-relative" style="height: 400px">
            <div class="row text-center anim">
                <div class="col-md-3">
                    <div class="icon gradient mb-4">
                        <a href="https://academiageek.co/" target="_blank">
                            <img src="public/Utilitys/logo-ag.png" class="img-thumbnail rounded-0 border-0" alt="Logo Academia Geek">
                        </a>
                    </div>
                    <p>
                        Es un campo de entrenamiento para programadores web con el objetivo de encontrar la empleabilidad rápidamente mediante formación técnica y acompañamiento profesional para un correcto desarrollo real tanto para el empleo como para las habilidades diarias.
                    </p>
                </div>
                <div class="col-md-3">
                    <div class="icon gradient mb-4">
                        <a href="https://www.agileinnova.org/" target="_blank">
                            <img src="public/Utilitys/logo-agileinnova.png" class="img-thumbnail rounded-0 border-0" alt="Logo AgileInnova">
                        </a>
                    </div>
                    <p class="mb-0">
                        Un equipo conformado por expertos en el área de la innovación, dispuestos a acompañar el desarrollo de una persona con talento digital, empresa o la aceleración correcta de un startup buscando identificar y potenciar el talento.
                    </p>
                </div>
                <div class="col-md-3">
                    <div class="icon gradient mb-4">
                        <a href="https://www.e-volution.co/" target="_blank">
                            <img src="public/Utilitys/logo-evolution.png" class="img-thumbnail rounded-0 border-0" alt="Logo Evolution">
                        </a>
                    </div>
                    <p class="mb-0">
                        Es una empresa destinada a crear soluciones únicas para sus socios digitales. Todo esto, analizando, estudiando los conceptos de la experiencia de usuario y el diseño de este.
                    </p>
                </div>
                <div class="col-md-3">
                    <div class="icon gradient mb-4">
                        <a href="https://makaia.org/" target="_blank">
                            <img src="public/Utilitys/logo-makaia.png" class="img-thumbnail rounded-0 border-0" alt="Logo Makaia">
                        </a>
                    </div>
                    <p class="mb-0">
                        MAKAIA trabaja través de la cooperación, la tecnología y la innovación para diseñar soluciones que les permitan a las personas y las comunidades responder a los desafíos del entorno.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php require 'views/footer.php' ?>
</body>

</html>