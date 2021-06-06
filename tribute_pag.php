<?php $title = "Pagina Tributo";
require 'views/head.php' ?>
<?php require 'views/navbar.php' ?>
<main id="main" class="container-fluid bg-secondary">
    <div class="container p-1">
        <h1 id="title" class="text-white text-center">Nikola Tesla</h1>
        <p class="text-white text-center">El inventor austrohúngaro</p>
        <figure class="text-center" id="img-div">
            <img id="image" class="img-fluid  rounded" src="https://historia.nationalgeographic.com.es/medio/2019/07/09/nikola-tesla_75b66962_1200x630.jpg" class="rounded mx-auto d-block" alt="Una fotografía de Nikola Teslta (1856-1943) a los 34 años." />
            <figcaption id="img-caption" class="text-white text-center"><em>
                    Nikola Tesla posando arduamente frente a la cámara, todo un genio.
            </figcaption></em>
        </figure>
        <section class="text-center" id="tribute-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body --bs-teal border-bottom-0">
                                <h5 class="card-title text-white">Esta es la linea de tiempo dentro de la vida del Dr.Nikola Tesla</h5>
                                <div id="content">
                                    <ul class="linea_tiempo">
                                        <li class="event text-white-50 cardzoom" data-date="10 de julio de 1856">
                                            <h3 class="text-white">Nacimiento</h3>
                                            <p>Nikola Tesla nació, en lo que hoy es Smiljan, en la provincia serbia de Lika, llamada entonces Croacia
                                                De una familia de 5 hermanos subestimado por su padre, un sacerdote ortodoxo serbio decidió que inventaría algo que asombraría al mundo, inicio con experimentos para aprovechar la fuerza del agua, y la fuerza del viento.
                                            </p>
                                        </li>
                                        <li class="event text-white-50 cardzoom" data-date="1862">
                                            <h3 class="text-white">Gospic</h3>
                                            <p>El padre de Tesla, Milutin Tesla recibe un trabajo de pastor en la ciudad de Gospic a donde traslada con toda su familia y donde Tesla cursa la primaria y primeros estudios.</p>
                                        </li>
                                        <li class="event text-white-50 cardzoom" data-date="1870">
                                            <h3 class="text-white">Educación</h3>
                                            <p>Tesla se traslada a Karlovac, donde completa sus estudios básicos en el Gimnasio de Karlovac y se gradúa un año antes debido a su desempeño académico.
                                            </p>
                                        </li>
                                        <li class="event text-white-50 cardzoom" data-date="1873">
                                            <h3 class="text-white">Colera</h3>
                                            <p>Tesla contrae la enfermedad del Cólera que lo dejó en cama durante apróximadamente 9 meses y en repetidas ocasiones al borde de la muerte.</p>
                                        </li>
                                        <li class="event text-white-50 cardzoom" data-date="1882">
                                            <h3 class="text-white">Trabajo</h3>
                                            <p>Empezó a trabajar en la Continental Edison Company en Francia, además con el sueño de trabajar con Edison en sus propios proyectos.</p>
                                        </li>
                                        <li class="event text-white-50 cardzoom" data-date="1884">
                                            <h3 class="text-white">Estados Unidos</h3>
                                            <p>Llegó por primera vez a Estados Unidos a la ciudad de Nueva York en donde trabajó para Edison en su compañia.</p>
                                        </li>
                                        <li class="event text-white-50 cardzoom" data-date="1885">
                                            <h3 class="text-white">Compañia</h3>
                                            <p>Tesla fundó su propia compañia llamada Tesla Electric Light & Manufacturing.</p>
                                        </li>
                                        <li class="event text-white-50 cardzoom" data-date="1903">
                                            <h3 class="text-white">Wandenclyffe<h3>
                                                    <p>Empieza a realizar experimentos en Wardenclyffe, en los cuales pretendía transmitir grandes cantidades de energía inalambricamente a toda la población de esta zona.</p>
                                        </li>
                                        <li class="event text-white-50 cardzoom" data-date="1943">
                                            <h3 class="text-white">Muerte</h3>
                                            <p>Muere en el hotel Wyndham en la habitación 3327 a los 86 años de edad, muere a causa de una trombosis coronaria.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <blockquote class="text-white text-center" cite="https://www.goodreads.com/author/quotes/278.Nikola_Tesla">
                <p>
                    “Si quieres encontrar los secretos del universo,
                    piensa en términos de energía, frecuencia y vibración”
                </p>
                <cite>― Nikola Tesla</cite>
            </blockquote>

            </h3>
        </section>
    </div>
</main>

<?php require 'views/footer.php' ?>