<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo constant('URL') . constant('LOGO'); ?>" />
    <title>Formulario | <?php echo constant('NOMBREAPP'); ?></title>
</head>

<body>
    <?php require 'views/header.php' ?>
    <style>
        main,
        .prueba {
            background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);

        }
    </style>

    <main id="main" class="container-fluid bg-secondary">
        <div class="prueba">
            <div class="container w-75 pt-5 pb-5 ps-5 pe-5">
                <div class="row align-items-stretch bg-white rounded-2 shadow">
                    <div class="col if d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded-end-0 rounded-start shadow">
                    </div>
                    <div class="col bg-white p-5 rounded-end">
                        <div class="text-center">
                            <img src="public/Utilitys/Logo2.png" width="150" alt="" srcset="">
                        </div>

                        <h2 class="fw-bold text-center text-black py-1">Formulario de encuesta</h2>

                        <!-- Formulario -->
                        <form action="#" class="needs-validation" novalidate>
                            <div class="mb-4">
                                <label for="name" class="form-label text-black">Nombre</label>
                                <input type="name" class="form-control" required>
                                <div class="valid-feedback">¡Que maravilloso nombre!</div>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label text-black">Correo electrónico</label>
                                <input type="email" class="form-control" required>
                                <div class="valid-feedback">Interesante...</div>
                            </div>
                            <div class="mb-4">
                                <label for="age" class="form-label text-black">Edad</label>
                                <input type="number" class="form-control" required>
                                <div class="valid-feedback">Uno a uno, todos somos mortales.</div>
                            </div>
                            <div class="mb-4">
                                <label class="text-black" for="floatingInput">¿Qué rol cumples?</label>
                                <div>
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                                    <label class="form-check-label me-2 text-black" for="flexRadioDefault1">
                                        Maestro
                                    </label>
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                                    <label class="form-check-label me-2 text-black" for="flexRadioDefault1">
                                        Estudiante
                                    </label>
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                                    <label class="form-check-label me-2 text-black" for="flexRadioDefault1">
                                        Coordinador
                                    </label>
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                                    <label class="form-check-label me-2 text-black" for="flexRadioDefault1">
                                        Mentor
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-black">¿Cuál de los siguientes lenguajes de programación te gustaria aprender?</label>
                                <select class="form-select" aria-label="Default select example" required>
                                    <option selected disabled value>Selecciona tu respuesta</option>
                                    <option value="1">C</option>
                                    <option value="2">C#</option>
                                    <option value="3">Ruby</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-black">¿Qué desarrollador te gustaria ser?</label>
                                <select class="form-select" aria-label="Default select example" required>
                                    <option selected disabled value>Selecciona tu respuesta</option>
                                    <option value="1">Desarrollador Web Front-End</option>
                                    <option value="2">Desarrollador Web Back-End</option>
                                    <option value="3">Desarrollador Full-Stack</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>

                            <div class="d-grid mb-4">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php require 'views/footer.php' ?>
</body>

</html>