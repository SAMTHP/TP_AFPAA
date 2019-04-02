<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="assets/css/style2.css" rel="stylesheet">
    </head>
    <body>
        <div id="page">
            <header>

                    <div id="choice-lang" >
                        <div class="lang-choice">
                            <a href="#" ><img src="assets/images/flag-french" alt="Français" ></a>
                        </div>

                        <div class="lang-choice">
                            <a href="#" ><img src="assets/images/flag-britain" alt="Français" ></a>
                        </div>
                    </div>


                    <div class="banniere">

                        <div class="logo">
                            <img id="logo" src="assets/images/logo" alt="..." height="250px">
                        </div>
                        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" >
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                            </ol>
                            <div class="carousel-inner" >
                                <div class="carousel-item active carousel-image">
                                    <img src="assets/images/carousel-1" class="d-block w-100" alt="..." height="250px">
                                </div>
                                <div class="carousel-item carousel-image">
                                    <img src="assets/images/carousel-2" class="d-block w-100" alt="..." height="250px">
                                </div>
                                <div class="carousel-item carousel-image">
                                    <img src="assets/images/carousel-4" class="d-block w-100" alt="..." height="250px">
                                </div>
                                <div class="carousel-item carousel-image">
                                    <img src="assets/images/carousel-5" class="d-block w-100" alt="..." height="250px">
                                </div>
                                <div class="carousel-item carousel-image">
                                    <img src="assets/images/carousel-6" class="d-block w-100" alt="..." height="250px">
                                </div>
                                <div class="carousel-item carousel-image">
                                    <img src="assets/images/carousel-7" class="d-block w-100" alt="..." height="250px">
                                </div>
                                <div class="carousel-item carousel-image">
                                    <img src="assets/images/carousel-8" class="d-block w-100" alt="..." height="250px">
                                </div>
                                <div class="carousel-item carousel-image">
                                    <img src="assets/images/carousel-9" class="d-block w-100" alt="..." height="250px">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

            </header>

            <nav>

                <?php require 'view/nav.php' ?>
            </nav>


            <aside>
                <aside >
                    <div id="menu-aside">
                        <a class="dropdown-item" href="#">PRESENTATION</a>
                        <a class="dropdown-item " href="#">METHODOLOGIE</a>
                        <a class="dropdown-item" href="#">NOTRE CULTURE & NOS VALEURS</a>
                        <a class="dropdown-item" href="#">A QUI S'ADRESSE NOTRE OFFRE ?</a>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="box-img-aside" >
                        <img src="assets/images/logo" alt="..." class="img-aside" >
                    </div>



                </aside>
            </aside>

            <section>
                <p>
                    test Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, dolor rem? Corporis, nesciunt. Perspiciatis id temporibus hic ipsa fugit quasi. Non quod sint adipisci nemo corrupti quas voluptatem rerum. Inventore.
                </p>
                <p>
                    test Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, dolor rem? Corporis, nesciunt. Perspiciatis id temporibus hic ipsa fugit quasi. Non quod sint adipisci nemo corrupti quas voluptatem rerum. Inventore.
                </p>
                <p>
                    test Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, dolor rem? Corporis, nesciunt. Perspiciatis id temporibus hic ipsa fugit quasi. Non quod sint adipisci nemo corrupti quas voluptatem rerum. Inventore.
                    test Lorem ipsum, dolor sit amet consectetur adipisicing  elit. Nulla, dolor rem? Corporis, nesciunt. Perspiciatis id temporibus hic ipsa fugit quasi. Non quod sint adipisci nemo .
                </p>

            </section>
        </div>
            <footer>
                <div id="footer">
                    <?php require 'view/footer.php' ?>
                </div>
            </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="assets/js/javascript.js"></script>
    </body>
</html>