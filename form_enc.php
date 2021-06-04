<?php $title = "Formulario Encuesta";
require 'views/head.php' ?>
<?php require 'views/navbar.php' ?>

<main id="main" class="container-fluid bg-secondary">
    <div class="container p-5">
        <form class="mx-auto p-4 bg-white border border-0 rounded needs-validation" style="width: 450px;" novalidate>
            <h2 id="title" class="text-black text-center">Formulario</h2>

            <!-- Nombre -->
            <div class="form-floating mb-3">
                <input type="name" class="form-control" id="floatingInput" placeholder="Nombres y apellidos" required>
                <label class="text-black-50" for="floatingInput">Nombre</label>

            </div>
            <!-- Correo electrónico -->
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label class="text-black-50" for="floatingInput">Correo electrónico</label>
            </div>
            <!-- Edad -->
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label class="text-black-50" for="floatingInput">Edad</label>
            </div>

            <!-- Rol -->
            <div class="mb-3 text-center">
                <label class="text-black fw-bold" for="floatingInput">¿Qué rol cumples?</label>
                <div>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                    <label class="form-check-label me-2" for="flexRadioDefault1">
                        Maestro
                    </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                    <label class="form-check-label me-2" for="flexRadioDefault1">
                        Estudiante
                    </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                    <label class="form-check-label me-2" for="flexRadioDefault1">
                        Coordinador
                    </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                    <label class="form-check-label me-2" for="flexRadioDefault1">
                        Mentor
                    </label>
                </div>

            </div>

            <!-- Selección 1 -->
            <div class="mb-3 text-center">
                <label for="exampleInputPassword1" class="form-label text-black fw-bold">Pregunta</label>
                <select class="form-select" aria-label="Default select example" required>
                    <option selected disabled value>Selecciona tu respuesta</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>

            <!-- Selección 2 -->
            <div class="mb-3 text-center">
                <label for="exampleInputPassword1" class="form-label text-black fw-bold">Pregunta</label>
                <select class="form-select" aria-label="Default select example" required>
                    <option selected disabled value>Selecciona tu respuesta</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>
            <!-- Lenguajes programación -->
            <div class="mb-3 form-check align-content-center">
                <div class="text-center">
                    <p class="text-black fw-bold">¿Qué lenguajes de programación usas?</p>
                </div>
                <div class="">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Java</label>
                </div>
                <div>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">C#</label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
                <div>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Python</label>
                </div>
                <div>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">C++</label>
                </div>
                <div>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">C</label>
                </div>
                <div>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Visual Basic .NET</label>
                </div>
                <div>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">JavaScript</label>
                </div>
                <div>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">PHP</label>
                </div>
                <div>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Swift</label>
                </div>
                <div>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ninguno de los anteriores</label>
                </div>
            </div>
            <div class="mx-auto" style="width: 80px;"">
                <button type=" submit" class="btn btn-primary">Submit</button>
            </div>

        </form>


    </div>

</main>


<?php require 'views/footer.php' ?>