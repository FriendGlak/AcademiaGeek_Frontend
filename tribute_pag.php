<?php $title = "Tributo";
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
                                <div id="content ">
                                    <ul class="linea_tiempo">
                                        <li class="event text-white-50" data-date="12:30 - 1:00pm">
                                            <h3 class="text-white">Registration</h3>
                                            <p>Get here on time, it's first come first serve. Be late, get turned away.</p>
                                        </li>
                                        <li class="event text-white-50" data-date="2:30 - 4:00pm">
                                            <h3 class="text-white">Opening Ceremony</h3>
                                            <p>Get ready for an exciting event, this will kick off in amazing fashion with MOP &amp; Busta Rhymes as an opening show.</p>
                                        </li>
                                        <li class="event text-white-50" data-date="5:00 - 8:00pm">
                                            <h3 class="text-white">Main Event</h3>
                                            <p>This is where it all goes down. You will compete head to head with your friends and rivals. Get ready!</p>
                                        </li>
                                        <li class="event text-white-50" data-date="8:30 - 9:30pm">
                                            <h3 class="text-white">Closing Ceremony</h3>
                                            <p>See how is the victor and who are the losers. The big stage is where the winners bask in their own glory.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Cartas-->
            <!-- <div class="row row-cols-1 row-cols-md-5 g-4">
                <div class="col">
                    <div class="card">
                        <img src="./Utilitys/tower_2.png" class="card-img-top imgcard1" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card ">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <ul class="text-white text-center">
                <li><strong>1856</strong> - Nació en Smiljan (Gospić, Imperio austrohúngaro) Ver y modificar los
                    datos en Wikidata
                </li>
            </ul>
            <blockquote class="text-white text-center" cite="https://www.goodreads.com/author/quotes/278.Nikola_Tesla">
                <p>
                    “Si quieres encontrar los secretos del universo,
                    piensa en términos de energía, frecuencia y vibración”
                </p>
                <cite>― Nikola Tesla</cite>
            </blockquote> -->
            <!-- <h3 class="text-white m-1">
                Si tienes tiempo, podrías leer más acerca de este increíble inventor en
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                    Wikipedia
                </button> -->
            <!-- <a id="tribute-link" class="text-white text-center text-decoration-none"
                        href="https://es.wikipedia.org/wiki/Nikola_Tesla" target="_blank">Wikipedia
                        entry</a>. -->
            </h3>
        </section>
    </div>
</main>

<?php require 'views/footer.php' ?>