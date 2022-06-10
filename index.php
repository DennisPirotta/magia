<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Magia</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"/>
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css"/>
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>

<!--Main Navigation-->
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand nav-link" target="_blank" href="">
                <img src="img/logo.svg" width="65" class="revertColor" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
                    aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contatti">Contatti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#orari">Orari</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galleria">Galleria</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    <!-- Carousel wrapper -->
    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white text-center">
                            <img src="img/logo.svg" class="w-50 revertColor" alt="" width="3661" height="1715">
                            <h5 class="mb-4"></h5>
                            <a class="btn btn-outline-light btn-lg m-2"
                               href="https://www.youtube.com/watch?v=c9B4TPnak1A"
                               role="button" rel="nofollow" target="_blank">Chi siamo</a>
                            <a class="btn btn-outline-light btn-lg m-2" href="https://mdbootstrap.com/docs/standard/"
                               target="_blank" role="button">Contattaci</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner -->
    </div>
    <!-- Carousel wrapper -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main class="mt-5">
    <div class="container">
        <!--Section: Content-->
        <section>
            <div class="row">
                <div class="col-md-6 gx-5 mb-4">
                    <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                        <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" alt=""/>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 gx-5 mb-4">
                    <h4><strong>Chi siamo</strong></h4>
                    <p class="text-muted">
                        Siamo una piccola attività nel cuore di Como, un ambiente elegante e professionale in cui
                        sarete accolti da personale qualificato che vi fornirà servizi su misura, adatti a qualunque
                        siano
                        le vostre esigenze
                    </p>
                    <p><strong>Che tipi di trattamento posso trovare da Magia?</strong></p>
                    <p class="text-muted">
                        Oltre ai trattamenti ricostituenti e ai percorsi personalizzati, i nostri clienti potranno
                        trovare
                        i colori express (solo 15 minuti di posa) e colori con base a olio
                    </p>
                </div>
            </div>
        </section>
        <!--Section: Content-->
        <hr class="my-5"/>
        <!--Section: Content-->
        <section class="text-center">
            <h4 class="mb-5"><strong>Cosa puoi trovare da noi</strong></h4>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="img/italy.svg" class="img-fluid w-75" alt="" width="16" height="16"/>
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Prodotti 100% made in Italy</h5>
                            <p class="card-text">
                                I nostri cosmetici sono completamente prodotti in italia da <a
                                        href="https://www.tecnaprofessional.eu/">TECNA PROFESSIONAL HAIR CARE </a> e <a
                                        href="https://www.iam4u.it/">IAM4U</a>
                            </p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="img/int-1.svg" style="object-fit: cover; max-height: 300px; width: 100%" alt=""/>
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Ambiente elegante</h5>
                            <p class="card-text">
                                Curiamo molto l'estetica del nostro negozio per fornire un ambiente professionale che vi
                                faccia sentire accolti
                            </p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="img/poltrone-mega-comode.jpeg" class="img-fluid"
                                 alt="" style="object-fit: cover; max-height: 300px; width: 100%"/>
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Poltrone mega comode bro</h5>
                            <p class="card-text">
                                Giuro, stra comode ;=)
                            </p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Section: Content-->
        <hr class="my-5" id="contatti"/>
        <!--Section: Content-->
        <section class="mb-5" >
            <h4 class="mb-5 text-center"><strong>Contattaci e vienici a trovare</strong></h4>

            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="container shadow-2 p-3">
                        <form method="post" action="contact.php">
                            <!-- Nome input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="nome" name="nome" class="form-control"/>
                                <label class="form-label" for="nome">Nome</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control"/>
                                <label class="form-label" for="email">Email</label>
                            </div>

                            <!-- Oggetto input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="oggetto" name="oggetto" class="form-control"/>
                                <label class="form-label" for="oggetto">Oggetto</label>
                            </div>

                            <!-- Messaggio input -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="messaggio" name="messaggio" rows="4"></textarea>
                                <label class="form-label" for="messaggio" style="margin-left: 0;">Message</label>
                                <div class="form-notch">
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                    <div class="form-notch-middle" style="width: 60px;"></div>
                                    <div class="form-notch-trailing"></div>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block">
                                Contattaci!
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container shadow-1 p-3">
                        <iframe class="w-100 mb-2" height="300"
                                src="https://maps.google.com/maps?q=viale%20roosevelt%2010/A&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                        <p><i class="fas fa-map-marker-alt text-primary"></i> Viale Franklin Delano Roosevelt, 10a,
                            22100 Como (CO)</p>
                    </div>
                </div>
            </div>
            <div class="container text-center p-5">
                <div class="text-center py-4 align-items-center">
                    <a href="https://www.instagram.com/magiaparrucchiericomo/" class="btn btn-primary m-1" role="button"
                       rel="nofollow" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="tel:+390314972844" class="btn btn-primary m-1" role="button" rel="nofollow"
                       target="_blank">
                        <i class="fas fa-phone-alt me-2"></i>031-4972844
                    </a>
                    <a href="" class="btn btn-primary m-1" role="button" rel="nofollow"
                       target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                </div>
            </div>
        </section>
        <!--Section: Content-->
        <hr class="my-5" id="orari"/>
        <!--Section: Orari -->
        <section class="mb-5">
            <h4 class="mb-2 text-center"><strong>Orari di apertura</strong></h4>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="container shadow-3 p-5">
                        <div class="row text-end">
                            <div class="col-sm-5 col-md-5 col-5">
                                Lunedì
                            </div>
                            <div class="col-sm-2 col-md-2 col-2 text-center">
                                -
                            </div>
                            <div class="col-sm-5 col-md-5 col-5 text-start">
                                <b>Chiuso</b>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5 col-md-5 col-5 text-end">
                                Martedì
                            </div>
                            <div class="col-sm-2 col-md-2 col-2 text-center">
                                -
                            </div>
                            <div class="col-sm-5 col-md-5 col-5 text-start">
                                <b>9.00</b> - <b>17.30</b>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5 col-md-5 col-5 text-end">
                                Mercoledì
                            </div>
                            <div class="col-sm-2 col-md-2 col-2 text-center">
                                -
                            </div>
                            <div class="col-sm-5 col-md-5 col-5 text-start">
                                <b>9.00</b> - <b>17.30</b>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5 col-md-5 col-5 text-end">
                                Giovedì
                            </div>
                            <div class="col-sm-2 col-md-2 col-2 text-center">
                                -
                            </div>
                            <div class="col-sm-5 col-md-5 col-5 text-start">
                                <b>9.00</b> - <b>17.30</b>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5 col-md-5 col-5 text-end">
                                Venerdì
                            </div>
                            <div class="col-sm-2 col-md-2 col-2 text-center">
                                -
                            </div>
                            <div class="col-sm-5 col-md-5 col-5 text-start">
                                <b>9.00</b> - <b>17.30</b>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5 col-md-5 col-5 text-end">
                                Sabato
                            </div>
                            <div class="col-sm-2 col-md-2 col-2 text-center">
                                -
                            </div>
                            <div class="col-sm-5 col-md-5 col-5 text-start">
                                <b>9.00</b> - <b>17.30</b>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5 col-md-5 col-5 text-end">
                                Domenica
                            </div>
                            <div class="col-sm-2 col-md-2 col-2 text-center">
                                -
                            </div>
                            <div class="col-sm-5 col-md-5 col-5 text-start">
                                <b>Chiuso</b>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--Section: Orari -->
        <hr class="my-5" id="galleria"/>
        <!-- Section: gallery -->
        <section>

            <h4 class="mb-5 text-center"><strong>Galleria</strong></h4>
            <!-- Gallery -->
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img
                            src="img/cap-5.jpg"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Boat on Calm Water"
                            loading="lazy"
                    />

                    <img
                            src="img/cap-7.jpeg"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Wintry Mountain Landscape"
                            loading="lazy"
                    />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                            src="img/cap-3.jpg"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Mountains in the Clouds"
                            loading="lazy"
                    />

                    <img
                            src="img/cap-2.jpg"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Boat on Calm Water"
                            loading="lazy"
                    />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                            src="img/cap-6.jpg"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Waves at Sea"
                            loading="lazy"
                    />

                    <img
                            src="img/cap-4.jpg"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Yosemite National Park"
                            loading="lazy"
                    />
                </div>
            </div>
            <!-- Gallery -->
            <!-- Section: gallery -->
        </section>
    </div>
</main>
<!--Main layout-->

<!--Footer-->
<footer class="bg-light text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!--Footer-->
<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>