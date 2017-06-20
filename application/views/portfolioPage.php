<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>M4tieuDev</title>
        <link rel="shortcut icon" href="../ressources/img/favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="../ressources/img/favicon/favicon.ico" type="image/x-icon">
        <link href="../ressources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../ressources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <link href="../ressources/css/agency.min.css" rel="stylesheet">
    </head>
    <body id="page-top" class="index">
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><b>Accueil</b></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services"><b>Moi</b></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#portfolio"><b>Mes projets</b></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about"><b>Mon parcours</b></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#reseaux"><b>Mes reseaux sociaux</b></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact"><b>Contact</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-heading">M<a href="https://fr.wikipedia.org/wiki/4_(nombre)">4</a>tieu Dev</div>
                    <div class="intro-footing"> Application Web / Application mobile</div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <a href="#services" class="page-scroll btn btn-xl"><img src="../ressources/img/icon/arrow.png" class="img-responsive" alt=""></a>
                </div>
            </div>
        </header>
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Qui suis-je ?</h2>
                        <?php
                        foreach ($skills as $sk) {
                            echo $sk['nom_competences'] . ' ';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Mes réalisations</h2>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="https://github.com/fabrique-beWeb/findMycOOP_lunel"><img src="../ressources/img/projets/FMC.png" class="img-responsive" alt=""></a>
                        <div class="portfolio-caption">
                            <h4>Find My cOOp</h4>
                            <p class="text-muted">Site hybride coopératif / gestion de projet</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="http://fabrique-beweb.com/"><img src="../ressources/img/projets/BEWEB.png" class="img-responsive" alt=""></a>
                        <div class="portfolio-caption">
                            <h4>BeWeb v1</h4>
                            <p class="text-muted">Site web de l'école BeWeB</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="http://feelu.fr/"><img src="../ressources/img/projets/FEELU.png" class="img-responsive" alt=""></a>
                        <div class="portfolio-caption">
                            <h4>Feel U</h4>
                            <p class="text-muted">Application Web / Android / IOS</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">École</h2>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="timeline">
                            <li class=" col-lg-12">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="../ressources/img/icon/CERTIF.png" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>2016 - 2017</h4>
                                        <h4 class="subheading">Titre professionnel
                                            <br>
                                            développeur logiciel</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Beweb - Fabrique coopérative numérique de Lunel (34400)</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted col-lg-12">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="../ressources/img/icon/BAC.png" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>2008 - 2009</h4>
                                        <h4 class="subheading">BAC professionnel Systeme Electronique et Numérique</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Lycée Jean-François Champollion de Lattes (34973)</p>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-12">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="../ressources/img/icon/BEP.png" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>2006 - 2008</h4>
                                        <h4 class="subheading">BEP Électronique</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Lycée Jean-François Champollion de Lattes (34973)</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="reseaux" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="section-heading">Retrouver moi sur les reseaux</h1>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="text-center">
                        <ul class="list-inline social-buttons">
                            <li><a href="https://twitter.com/M4tieuDev"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/m4tieuDev"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/m4tieudev/"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="https://github.com/m4tieu"><i class="fa fa-github-alt"></i></a>
                            </li>
                            <li><a href="https://bitbucket.org/m4tieu/"><i class="fa fa-bitbucket"></i></a>
                            </li>
                            <li><a href="https://simplon-co.slack.com/messages/@m4tieu/"><i class="fa fa-slack"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <p class="large text-muted"></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Contactez moi</h2>
                        <h3 class="section-subheading text-muted">A travers le monde et même plus...</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nom" id="name" required data-validation-required-message="Entrer votre nom.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Entrer votre adresse email.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Téléphone" id="phone" required data-validation-required-message="Entrer votre numéro de téléphone.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Votre message" id="message" required data-validation-required-message="Entrer votre message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl">Envoi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="copyright">Copyright &copy; 2017<a href="http://www.shafou.com/"> m4tieu</a> all rights reserved.</span>
                    </div>
                </div>
            </div>
        </footer>
        <script src="../ressources/vendor/jquery/jquery.min.js"></script>
        <script src="../ressources/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
        <script src="../ressources/js/jqBootstrapValidation.js"></script>
        <script src="../ressources/js/contact_me.js"></script>
        <script src="../ressources/js/agency.min.js"></script>
    </body>
</html>