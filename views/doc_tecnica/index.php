<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo constant('URL') . constant('LOGO'); ?>" />
    <title>Documentación Técnica | <?php echo constant('NOMBREAPP'); ?></title>
</head>


<body>
    <?php require 'views/header.php' ?>

    <div class="bg-white position-fixed navegacion">
        <header class="text-black fs-3 m-3">Xbox Live</header>
        <ul class="ulnav">
            <li class="animxbox">
                <a class=" text-decoration-none p-3 text-black" href="">Información General</a>
            </li>
            <li class="animxbox">
                <a class=" text-decoration-none p-3 text-black" href="">Unirse a un programa de desarrolladores</a>
            </li>
            <li class="animxbox">
                <a class=" text-decoration-none p-3 text-black" href="">Cómo funciona Xbox Live</a>
            </li>
            <li class="animxbox">
                <a class=" text-decoration-none p-3 text-black" href="">Almacenamiento en la nube</a>
            </li>
            <li class="animxbox">
                <a class=" text-decoration-none p-3 text-black" href="">Información general sobre privacidad y permisos</a>
            </li>
            <li class="animxbox">
                <a class=" text-decoration-none p-3 text-black" href="">Comprobación de permisos</a>
            </li>
            <li class="animxbox">
                <a class=" text-decoration-none p-3 text-black" href="">Referencia</a>
            </li>
        </ul>
    </div>

    <main class="position-absolute p-5 mb-5" style="margin-left: 310px;">


        <section class="main-section" id="Introduction">
            <header class="fs-2">Información General</header>
            <article>
                <p>
                    Xbox Live es una red de juegos de Premier que conecta millones de jugadores de todo el mundo. Puede Agregar Xbox Live a su juego en plataformas móviles, PC con Windows 10 y Xbox One (o posterior) consola para aprovechar las características y los servicios de Xbox Live.
                </p>

                <p>
                    Estas son algunas razones para agregar Xbox Live a tu juego:
                </p>
                <ul>
                    <li>
                        Unidades Xbox Live: jugadores en todas las consolas Xbox One (o una versión posterior) y Windows 10, para que los jugadores puedan jugar con sus amigos y conectarte con una comunidad masiva de reproductores.
                    </li>
                    <li>
                        Xbox Live permite a los jugadores construir un juego heredado desbloqueando las menciones especiales, compartiendo los clips del juego Epic, amassing Gamerscore y perfeccionando su avatar.
                    </li>
                    <li>
                        Xbox Live permite que los jugadores jueguen y retomen donde lo dejaron en otra consola o equipo de Xbox One (o una versión posterior), lo que permite guardar todos los dispositivos.
                    </li>
                    <li>
                        Con más de 1 mil millones de varios jugadores reproducidos cada mes, Xbox Live está diseñado para mejorar el rendimiento, la velocidad y la fiabilidad.
                    </li>
                    <li>
                        Con los jugadores con varios dispositivos, los jugadores pueden jugar con tus amigos independientemente de si se reproducen en la consola Xbox One (o posterior) o en un equipo con Windows 10.
                    </li>
                </ul>
            </article>
        </section>
        <section class="main-section" id="Program">
            <header class="fs-2">Unirse a un programa de desarrolladores</header>
            <article>
                <p>
                    Con el programa Xbox Live Creators, cualquier persona con una cuenta del centro de socios puede crear un juego de plataforma universal de Windows (UWP) habilitado para Xbox Live que se puede ejecutar en consolas de equipos Windows 10 y Xbox One (o posterior).
                </p>

                <p>
                    Para los desarrolladores de juegos que desean sacar provecho de la completa experiencia de Xbox Live, incluidos los multijugador, los logros y el desarrollo de consola nativa de Xbox.
                </p>
            </article>
        </section>
        <section class="main-section" id="Live">
            <header class="fs-2">Cómo funciona Xbox Live</header>
            <article>
                <p>
                    Xbox Live es una colección de microservicios que exponen características de Xbox Live como perfil, amigos y presencia, estadísticas, marcadores, logros, multijugador y Matchmaking. Los datos de Xbox Live se almacenan en la nube y se puede obtener acceso a ellos mediante el uso de puntos de conexión de REST y WebSockets seguros que son accesibles desde un conjunto de API de cliente diseñado para desarrolladores de juegos.
                </p>

                <p>
                    Además de las API de REST, hay API de cliente que encapsulan la funcionalidad de REST.
                </p>
            </article>
        </section>
        <section class="main-section" id="Cloud">
            <header class="fs-2">Almacenamiento en la nube</header>
            <article>
                <p>El almacenamiento en la nube de Xbox Live proporciona almacenamiento de títulos y almacenamiento conectado. Estos son dos servicios diferentes pero complementarios.
                </p>
                <ul>
                    <li>
                        El almacenamiento conectado le permite implementar el guardado de un juego en la nube, que se transferirá a través de los dispositivos. Independientemente del lugar donde un usuario inicie sesión.

                    </li>
                    <li>
                        El almacenamiento de títulos le permite almacenar blobs de datos que pueden ser por usuario o por título y compartirse entre distintos usuarios.
                    </li>
                </ul>
            </article>
        </section>
        <section class="main-section" id="Privacity">
            <header class="fs-2">Información general sobre privacidad y permisos</header>
            <article>
                <p>
                    Xbox Live Privacy Service protege a los usuarios respetando sus preferencias y proporcionando las experiencias sociales que quieren. Privacy Service admite la comprobación de permisos, silenciar listas y evitar listas a través de una API de XSAPI y una API de REST.
                </p>
                <p>
                    Privacy Service no permite obtener ni establecer la configuración de privacidad de un usuario.
                </p>
            </article>
        </section>
        <section class="main-section" id="Permises">
            <header class="fs-2">Comprobación de permisos</header>
            <article>
                <p>Las comprobaciones de permisos son la principal capacidad proporcionada por Privacy Service. Estas comprobaciones determinan si un usuario determinado puede realizar una acción con otro usuario (o usuarios).
                </p>

                <p>
                    Por ejemplo, si se le pregunta "¿puede el usuario comunicarse con el objetivo?", el servicio de privacidad basa la respuesta en la gama de criterios pertinentes, como por ejemplo:
                </p>
                <ul>
                    <li>
                        ¿Permite la configuración de ambos usuarios este escenario?
                    </li>
                    <li>
                        ¿Cuál es la relación entre los usuarios?
                    </li>
                    <li>¿Es el actor de la lista evitar del objetivo?

                    </li>
                </ul>
            </article>
        </section>
        <section class="main-section" id="References">
            <header class="fs-2">Referencias</header>
            <article>
                <ul>
                    <li>
                        Toda la documentación fue tomada de
                        <a href="https://docs.microsoft.com/es-mx/gaming/xbox-live/">XBOX LIVE</a>
                    </li>
                </ul>

            </article>
        </section>
    </main>



    <script src="<?php echo constant('URL'); ?>public/libs/bootstrap/dist/js/bootstrap.min.js?n=<?php echo constant('VERSION'); ?>"></script>
    <script src="<?php echo constant('URL'); ?>public/js/navegacion.js?n=<?php echo constant('VERSION'); ?>"></script>
    <script src="<?php echo constant('URL'); ?>public/js/validations.js?n=<?php echo constant('VERSION'); ?>"></script>
</body>

</html>