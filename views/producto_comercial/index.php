<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo constant('URL') . constant('LOGO'); ?>" />
    <title>Producto Comercial | <?php echo constant('NOMBREAPP'); ?></title>
</head>

<body>
    <?php require 'views/header.php' ?>


    <div class="container">

        <section class="d-flex flex-column align-items-center justify-content-center text-center mt-5">
            <h2 class="mb-2">El complemento perfecto de periféricos para gamers como tú.</h2>
            <form class="needs-validation" action="#" novalidate>
                <div class="mb-2">
                    <input type="email" class="form-control" placeholder="name@mail.com" required>
                    <div class="valid-feedback">Interesante...</div>
                </div>
                <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </section>

        <div class="container m-auto" style="max-width: 1000px;">
            <section class="mt-5">
                <div class="d-flex">
                    <div class="d-flex w-25 align-items-center justify-content-center" style="height: 125px;">
                        <img src="public/images/producto/tape.png" alt="Material" width="40px">
                    </div>
                    <div class="d-flex flex-column justify-content-center w-100 p-2" style="height: 125px">
                        <h2 class="mb-1">Materiales Premium</h2>
                        <p>
                            Nuestros accesorios tecnológicos utilizan las últimas tendencias de construcción en cuanto a teclados, auriculares y mouses.
                        </p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="d-flex w-25 align-items-center justify-content-center" style="height: 125px;">
                        <img src="public/images/producto/shipping-truck.png" alt="Material" width="40px">
                    </div>
                    <div class="d-flex flex-column justify-content-center w-100 p-2">
                        <h2 class="mb-1">Entrega Rápida</h2>
                        <p>
                            Envíamos los productos lo más pronto posible después de haberse ejecutado la compra, utilizamos los mejores servicios de envío del país para que lleguen sanos y salvos a sus hogares.
                        </p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="d-flex w-25 align-items-center justify-content-center" style="height: 125px;">
                        <img src="public/images/producto/badge.png" alt="Material" width="40px">
                    </div>
                    <div class="d-flex flex-column justify-content-center w-100 p-2">
                        <h2 class="mb-1">Garantias Amplias</h2>
                        <p>
                            Las garantias son algo imprescindible a la hora de comprar un artículo, por eso nuestras garantias son razonablemente amplias y contamos con un equipo técnico para ayudar al usuario a resolver problemas con sus productos.
                        </p>
                    </div>
                </div>
            </section>
            <section class="d-flex mt-5 justify-content-center">
                <iframe id="video" height="415" width="760" src="https://www.youtube.com/embed/5E_vRI_3Wk8"" frameborder=" 0" allowfullscreen></iframe>
            </section>

            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mt-5">
                <div class="col">
                    <div class="card mb-4  shadow-sm bg-white">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Audifonos Gravity</h4>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title pricing-card-title">$369.900</h2>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Sonido envolvente 7.1 </li>
                                <li>Conexión alámbrica Jack 3.5mm</li>
                                <li>Micrófono desmontable</li>
                                <li>Diseño perfecto</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary mb-3">Elegir</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 shadow-sm bg-white">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Teclado Bellatrix</h4>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title pricing-card-title">$199.900</h2>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Teclado 70%</li>
                                <li>Switches Kailh</li>
                                <li>Módulo inalámbrico 2.4GHz</li>
                                <li>Capacidad de 1000mAh</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary mb-3">Elegir</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4 shadow-sm bg-white">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Mouse Aurora</h4>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title pricing-card-title">$99.900</h2>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Sensor PMW3330</li>
                                <li>Switch Onrom</li>
                                <li>Peso ligero</li>
                                <li>Textura agradable</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary mb-3">Elegir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require 'views/footer.php' ?>
</body>

</html>