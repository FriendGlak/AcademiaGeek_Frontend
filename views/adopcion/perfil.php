<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require 'views/adopcion/header.php' ?>

    <div class="container-fluid bg-rosado">

        <div class="container bg-rosado">
            <h2 class="fontAdop">Perfil</h2>

            <div class="img-oval align-content-center">

            </div>

            <form action="#" class="needs-validation" novalidate>
                <div class="mb-4">
                    <label for="name" class="form-label text-black">Nombre</label>
                    <input type="name" class="form-control name-form" required>
                    <div class="valid-feedback">¡Que maravilloso nombre!</div>
                </div>

                <div class="mb-4">
                    <label for="name" class="form-label text-black">Apellido</label>
                    <input type="name" class="form-control lastname-form" required>
                    <div class="valid-feedback">¡Que maravilloso apellido!</div>
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label text-black">Correo electrónico</label>
                    <input type="email" class="form-control mail-form" required>
                    <div class="valid-feedback">Interesante...</div>
                </div>

                <div class="d-grid mb-4">
                    <button type="submit" class="btn guardar btn-primary">Guardar</button>
                </div>
        </div>

    </div>
    <script src="<?php echo constant('URL'); ?>public/js/perfil.js?n=<?php echo constant('VERSION'); ?>"></script>
    <?php require 'views/adopcion/footer.php' ?>
</body>

</html>