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
            <h4>Mis mascotas favoritas</h4>


            <div class="row" id="mascotasFavoritas">

            </div>
        </div>

        <div class="modal fade" id="detallesMascota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h5 class="modal-title" id="exampleModalLabel"></h5> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal-body">
                        <div id="container">
                            <div class="container-img-details">
                                <img src="https://www.elpaisdelosjovenes.com/wp-content/uploads/2015/05/03_02.jpg" alt="Pascual" class="img-details">
                            </div>
                            <div class="container-details">
                                <div class="details-basics">
                                    <div class="details-name-favorite">
                                        <div class="details-name-gender">
                                            <h4 class="name-details">Pascual</h4>
                                            <img src="<?php echo constant('URL'); ?>public/images/mascotas/genero-hembra.png" alt="Female" class="img-gender-details">
                                        </div>
                                        <div class="favorite-details" id="favorite-heart">
                                            <img src="<?php echo constant('URL'); ?>public/images/mascotas/corazon-favorito.png" alt="Favorito" class="img-favorite" id="img-favorite">
                                        </div>
                                    </div>
                                    <div class="details-race-age">
                                        <div class="details-race">
                                            <img src="<?php echo constant('URL'); ?>public/images/mascotas/raza.png" alt="Raza" class="img-race-details">
                                            <span class="txt-details">Pastor Alemán</span>
                                        </div>
                                        <div class="details-age">
                                            <img src="<?php echo constant('URL'); ?>public/images/mascotas/edad.png" alt="Edad" class="img-age-details">
                                            <span class="txt-details">6 Meses</span>
                                        </div>
                                    </div>
                                    <div class="details-address">
                                        <img src="<?php echo constant('URL'); ?>public/images/mascotas/direccion.png" alt="Dirección">
                                        <span class="txt-details">Se encuentra en robledo cerca a la quintana</span>
                                    </div>
                                </div>
                                <div class="details-personality">
                                    <h5 class="personality-title">Personalidad</h5>
                                    <div class="personalities-list-details" id="personalities">


                                        <div class="personality-item-details">
                                            <img src="<?php echo constant('URL'); ?>public/images/mascotas/personalidad-jugueton.png" alt="Juguetón" class="img-personality">
                                            <span class="personality-text">Juguetón</span>
                                        </div>

                                        <div class="personality-item-details">
                                            <img src="<?php echo constant('URL'); ?>public/images/mascotas/personalidad-ternura.png" alt="Tierno" class="img-personality">
                                            <span class="personality-text">Tierno</span>
                                        </div>

                                        <div class="personality-item-details">
                                            <img src="<?php echo constant('URL'); ?>public/images/mascotas/personalidad-amorosa.png" alt="Cariñoso" class="img-personality">
                                            <span class="personality-text">Cariñoso</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="history-details">
                                    <h5 class="personality-title">Historia de Pascual</h5>
                                    <p class="history-text-details">Esta mal</p>
                                </div>
                                <div class="footer-details">
                                    <div class="author-details">
                                        <img src="<?php echo constant('URL'); ?>public/images/mascotas/autor.png" alt="Autor" class="img-author-details">
                                        <div class="info-author-details">
                                            <span class="by-author-details">Publicado por:</span>
                                            <span class="name-author-details">Mailer Martínez</span>
                                        </div>
                                    </div>
                                    <a href="./messagesDetail.html?idAuthor=1" class="btn-contact">Contactar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
        <button type="button" class="btn btn-primary">Contactar</button>
      </div> -->
                </div>
            </div>
        </div>

    </div>
    <script src="<?php echo constant('URL'); ?>public/js/adopcionfavoritos.js?n=<?php echo constant('VERSION'); ?>"></script>
    <?php require 'views/adopcion/footer.php' ?>
</body>

</html>