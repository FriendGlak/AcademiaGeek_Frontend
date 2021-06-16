<div class="container wrapper">
    <nav class="navbar navbar-expand-md navbar-light bg-light" aria-label="Navbar">
        <div class="container-fluid">
            <a class="navbar-brand sm align-content-center md" href="<?php echo constant('URL'); ?>adopcion"><img src="<?php echo constant('URL'); ?>public/images/LogoAdopet.png" class="logo-adopet" alt="Logo Adopet"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-grid gap-2 d-md-block" id="navbarSupportedContent">
                <ul class="navbar-nav p-1 me-auto mb-2 mb-lg-0">
                    <!-- Navegación -->
                    <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
                        <ul class="navbar-nav nav-links me-auto ">
                            <!--Adopta-->

                            <li class="nav-item">
                                <a class="nav-link fontAdop" href="<?php echo constant('URL'); ?>adopcion/adopta" id="navbarLightDropdownMenuLink" role="button" aria-expanded="false">
                                    Adopta una mascota
                                </a>
                            </li>
                            <!--Volver a Experimental-->
                            <li class="nav-item">
                                <a class="nav-link fontAdop" href="<?php echo constant('URL'); ?>main" id="navbarLightDropdownMenuLink" role="button" "aria-expanded=" false">
                                    Volver a Experimental
                                </a>
                            </li>

                        </ul>
                        <ul class="navbar-nav ml-auto nav-flex-icons">
                            <li class="nav-item ps-3">
                                <a href="<?php echo constant('URL'); ?>adopcion/perfil""><img src=" <?php echo constant('URL'); ?>public/images/mascotas/perfil.png" alt=""></a>

                            </li>
                            <li class="nav-item ps-3">
                                <a href="<?php echo constant('URL'); ?>adopcion/favoritos"> <img src="<?php echo constant('URL'); ?>public/images/mascotas/favorito.png" alt=""> </a>
                            </li>

                            <li class="nav-item ps-3">
                                <a href="<?php echo constant('URL'); ?>adopcion/chat"> <img src="<?php echo constant('URL'); ?>public/images/mascotas/chat.png" alt=""></a>

                            </li>
                        </ul>


                    </div>
            </div>

        </div>
    </nav>
</div>