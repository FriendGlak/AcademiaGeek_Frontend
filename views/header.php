<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap CSS -->
    <link href="css/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href="Utilitys/favicontributepage.png" />
    <title>Página de homenaje</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="import" href="views/templates/head.html" id="miimport">
    <script src="js/jquery.js"></script>
</head>

<body class="bg-light">
    
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="ejemplo">
        <div class="container-fluid">
            <div class="logo">
                <a class="logo" href="#"><img src="utilitys/logo.png" alt="Logo"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ejemplo"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-grid gap-2 d-md-block" id="navbarsExample09">
                <ul class="navbar-nav navegador p-1 me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="textologo active ms-1 " aria-current="page" href="#">Experimental</a>
                    </li>

                    <!-- Navegación -->
                    
                    <div class="collapse navbar-collapse ms-5" id="navbarNavLightDropdown">
                        <ul class="navbar-nav">
                            <!--Sprint 1-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sprint 1
                                </a>
                                <ul class="udrop dropdown-menu dropdown-menu-light"
                                    aria-labelledby="navbarLightDropdownMenuLink">

                                    <li class="nav-item dropdown drop-down02">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Semana 1
                                        </a>
                                        <ul class="dropdown-menu sub-menu02 dropdown-menu-Light"
                                            aria-labelledby="navbarLightDropdownMenuLink">
                                            <li><a class="dropdown-item" href="/views/formulario_encuesta/form_enc.php">Página Tributo</a></li>
                                            <li><a class="dropdown-item" href="/views/formulario_encuesta/form_enc.php">Formulario de encuesta</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown drop-down02">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Semana 2
                                        </a>
                                        <ul class="dropdown-menu sub-menu02 dropdown-menu-Light"
                                            aria-labelledby="navbarLightDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Producto Comercial</a></li>
                                            <li><a class="dropdown-item" href="#">Documentación Técnica</a></li>                                              
                                        </ul>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Aplicación</a></li>
                                </ul>
                            </li>

                             <!--Sprint 2-->
                             <li class="nav-item dropdown ms-2">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sprint 2
                                </a>
                                <ul class="udrop dropdown-menu dropdown-menu-light"
                                    aria-labelledby="navbarLightDropdownMenuLink">

                                    <li class="nav-item dropdown drop-down02">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Semana 1
                                        </a>
                                        <ul class="dropdown-menu sub-menu02 dropdown-menu-Light"
                                            aria-labelledby="navbarLightDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Página Tributo</a></li>
                                            <li><a class="dropdown-item" href="#">Formulario de encuesta</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown drop-down02">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Semana 2
                                        </a>
                                        <ul class="dropdown-menu sub-menu02 dropdown-menu-Light"
                                            aria-labelledby="navbarLightDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Producto Comercial</a></li>
                                            <li><a class="dropdown-item" href="#">Documentación Técnica</a></li>                                              
                                        </ul>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Aplicación</a></li>
                                </ul>
                            </li>

                             <!--Sprint 3-->
                             <li class="nav-item dropdown ms-2">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sprint 3
                                </a>
                                <ul class="udrop dropdown-menu dropdown-menu-light"
                                    aria-labelledby="navbarLightDropdownMenuLink">

                                    <li class="nav-item dropdown drop-down02">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Semana 1
                                        </a>
                                        <ul class="dropdown-menu sub-menu02 dropdown-menu-Light"
                                            aria-labelledby="navbarLightDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Página Tributo</a></li>
                                            <li><a class="dropdown-item" href="#">Formulario de encuesta</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown drop-down02">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Semana 2
                                        </a>
                                        <ul class="dropdown-menu sub-menu02 dropdown-menu-Light"
                                            aria-labelledby="navbarLightDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Producto Comercial</a></li>
                                            <li><a class="dropdown-item" href="#">Documentación Técnica</a></li>                                              
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Aplicación</a></li>
                                </ul>
                            </li>

                            <!--Sprint 4-->
                            <li class="nav-item dropdown ms-2">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sprint 4
                                </a>
                                <ul class="udrop dropdown-menu dropdown-menu-light"
                                    aria-labelledby="navbarLightDropdownMenuLink">

                                    <li class="nav-item dropdown drop-down02">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Semana 1
                                        </a>
                                        <ul class="dropdown-menu sub-menu02 dropdown-menu-Light"
                                            aria-labelledby="navbarLightDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Página Tributo</a></li>
                                            <li><a class="dropdown-item" href="#">Formulario de encuesta</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown drop-down02">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Semana 2
                                        </a>
                                        <ul class="dropdown-menu sub-menu02 dropdown-menu-Light"
                                            aria-labelledby="navbarLightDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Producto Comercial</a></li>
                                            <li><a class="dropdown-item" href="#">Documentación Técnica</a></li>                                              
                                        </ul>
                                    </li>

                                    

                                    <li><a class="dropdown-item" href="#">Aplicación</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    
                </ul>
                <form>
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
</div>