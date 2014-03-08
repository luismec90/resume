<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style>
        <style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style>
        <style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}</style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="freelance web developer, desarrollador web, programador web, Colombia, Diseño web, web design, php, html5, css3">
        <meta name="author" content="Luis Fernando Montoya, luismec90@gmail.com">

        <title>Luisfer Resume</title>

        <!-- stylesheet -->
        <link href="http://fonts.googleapis.com/css?family=Droid+Sans|Lato|Revalia" rel="stylesheet" type="text/css"><!-- google fonts -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/libs/bootstrap-3.1.1/css/bootstrap.min.css" >
        <link rel="stylesheet" href="<?= base_url() ?>assets/libs/font-awesome-4.0.3/css/font-awesome.min.css">
        <link href="<?= base_url() ?>assets/css/magnific-popup.css" rel="stylesheet"><!-- magnific popup -->
        <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet"><!-- theme style -->

        <!-- favicon -->
        <link rel="shortcut icon"href="<?= base_url() ?>assets/img/favicon.png">

        <!--[if lt IE 9]>
      <script src="<?= base_url() ?>assets/js/html5shiv.js"></script>
      <script src="<?= base_url() ?>assets/js/respond.min.js"></script>
    <![endif]-->


    <body data-spy="scroll" data-target="#main-nav" style="">
        <header class="main-header">
            <!-- master header -->
            <div class="navbar navbar-fixed-top">
                <nav class="container">
                    <!-- site logo -->
                    <div class="navbar-header">
                        <a href="#hero" class="logo">
                            <img src="<?= base_url() ?>assets/img/logo.png" alt="">
                            <h1 class="sr-only">LUISFER.CO</h1>
                        </a>

                        <button type="button" class="navbar-toggle navbar-right" data-toggle="collapse" data-target="#main-nav">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- main navigation -->
                    <div id="main-nav" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right nav-style">
                            <li class="dummy"><a href="#hero"></a></li><!-- dummy li for scrollspy fix -->
                            <li><a href="#profile">Pefil</a></li>
                            <li><a href="#qualification">Educación</a></li>
                            <li class=""><a href="#skill">Habilidades</a></li>
                            <li class=""><a href="#exp">Trabajos destacados</a></li>
                            <li class=""><a href="#contact">Contactame</a></li>
                        </ul>
                    </div>
                </nav>
            </div><!-- .container -->
        </header>

        <!-- hero section -->
        <section id="hero" class="hero">
            <div class="container">

                <!-- figure image -->
                <img class="hero-figure" src="<?= base_url() ?>assets/img/hero-figure.png" alt="">

                <div class="hero-content-wrap">
                    <!-- figure image replacement for responsive screen -->
                    <figure class="hero-figure-res"></figure>

                    <!-- hero content -->
                    <div class="hero-content" style="margin-top: -178.5px;">
                        <h2 class="hero-content-title">Luis Fernando Montoya</h2>

                        <p class="hero-content-text">Hola, soy Luis,  Ingeniero de Sistemas e Informática de la Universidad Nacional de Colombia, freelancer, especialista en el desarrollo y diseño web con 4 años de experiencia. </p>

                        <div class="text-center"><a class="btn btn-danger btn-lg" href="#profile">SABER MÁS <i class="fa fa-angle-double-down"></i></a></div>
                    </div>
                </div>

            </div><!-- .container -->
        </section>
        <!-- hero section end -->

        <!-- profile section -->
        <section id="profile" class="profile">
            <div class="container">
                <!-- profile content -->
                 <h2 class="heading">Perfil</h2>
                <div class="col-md-8 profile-content">	
                   
                    <p> Ingeniero de Sistemas e Informática de la Universidad Nacional de Colombia, actualmente curso la Maestría en Ingenieria de Sistemas en esta misma universidad.</p>

                    <p>Amante de las nuevas tecnologias, proactivo abierto a nuevas oportunidades, con capacidad de análisis y liderazgo, gran sentido de la responsabilidad y cumplimiento proyectando mi labor hacia la búsqueda de la calidad e innovación tecnológica. </p>

                    <p>Cuatro años de experiencia en el desarrollo web me permiten ayudarle a entender sus necesidades de una mejor manera, logrando los resultados esperados </p>

                    <p>Mi trabajo es mi pasión, por tanto, me lo tomo muy en serio.</p>
                </div>
                <div class="col-md-4 text-center">	
                    <!-- profile figure image -->
                    <img class="profile-figure" width="300"  src="<?= base_url() ?>assets/img/logo-un.png" alt="">
                </div>

            </div><!-- .container -->
        </section>
        <!-- profile section end -->

        <!-- qualification section -->
        <section id="qualification" class="qualification">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <!-- education -->
                        <div class="qualification-education">
                            <h2 class="heading">Educación</h2>

                            <ul class="list-unstyled">
                                <li>
                                    <h3 class="qualification-education-title">Estudiante de maestría en Ingenieria de Sistemas</h3>
                                    <p>Universidad Nacional de Colombia</p>
                                </li>
                                <li>
                                    <h3 class="qualification-education-title">Ingeniero de Sistemas e Informática</h3>
                                    <p>Universidad Nacional de Colombia</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- training -->
                        <div class="qualification-training">
                            <h2 class="heading">Training &amp; Certificate</h2>

                            <ul class="fa-ul">
                                <li><i class="fa-fw fa-li fa fa-check"></i>Unto may moveth creeping</li>
                                <li><i class="fa-fw fa-li fa fa-check"></i>Evening made life of yielding</li>
                                <li><i class="fa-fw fa-li fa fa-check"></i>Seed divide subdue</li>
                                <li><i class="fa-fw fa-li fa fa-check"></i>Dry is won't face</li>
                                <li><i class="fa-fw fa-li fa fa-check"></i>Kind give thing fish day</li>
                                <li><i class="fa-fw fa-li fa fa-check"></i>Place also wherein saying</li>
                                <li><i class="fa-fw fa-li fa fa-check"></i>Blessed fish green</li>
                            </ul>
                        </div>
                    </div>

                </div><!-- .row -->
            </div><!-- .container -->
        </section>
        <!-- qualification section end -->

        <!-- skill section -->
        <section id="skill" class="skill">
            <div class="container">
                <h2 class="heading">Habilidades</h2>
                <div class="row">
                    <!-- skill block -->
                    <div class="col-md-3 col-sm-6">
                        <div class="skill-wrap">
                            <div style="display: inline; width: 200px; height: 200px;"><input type="text" value="85" class="dial" readonly="readonly" style="width: 104px; height: 66px; position: absolute; vertical-align: middle; margin-top: 66px; margin-left: -152px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 40px; line-height: normal; font-family: Arial; text-align: center; color: rgb(170, 170, 170); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>

                            <h3 class="skill-title">Bases de datos</h3>

                            <p class="skill-desc">Amplia experiencia en el modelado e implementacion de grandes bases de datos</p>

                            <ul class="fa-ul">
                                <li><i class="fa-fw fa-li fa fa-angle-double-right"></i>MYSQL</li>
                                <li><i class="fa-fw fa-li fa fa-angle-double-right"></i>POSTGRESQL</li>
                                <li><i class="fa-fw fa-li fa fa-angle-double-right"></i>ORACLE</li>
                            </ul>
                        </div>
                    </div>

                    <!-- skill block -->
                    <div class="col-md-3 col-sm-6">
                        <div class="skill-wrap">
                            <div style="display: inline; width: 200px; height: 200px;"><input type="text" value="90" class="dial" readonly="readonly" style="width: 104px; height: 66px; position: absolute; vertical-align: middle; margin-top: 66px; margin-left: -152px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 40px; line-height: normal; font-family: Arial; text-align: center; color: rgb(170, 170, 170); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>

                            <h3 class="skill-title">Desarollo Web</h3>

                            <p class="skill-desc">Gran experiencia en lenguajes y tecnologias enfocados en la web. </p>

                            <ul class="fa-ul">
                                <li><i class="fa-fw fa-li fa fa-angle-double-right"></i>PHP</li>
                                <li><i class="fa-fw fa-li fa fa-angle-double-right"></i>RUBY</li>
                                <li><i class="fa-fw fa-li fa fa-angle-double-right"></i>WEB SERVICE</li>
                            </ul>
                        </div>
                    </div>

                    <!-- skill block -->
                    <div class="col-md-3 col-sm-6">
                        <div class="skill-wrap">
                            <div style="display: inline; width: 200px; height: 200px;"><input type="text" value="90" class="dial" readonly="readonly" style="width: 104px; height: 66px; position: absolute; vertical-align: middle; margin-top: 66px; margin-left: -152px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 40px; line-height: normal; font-family: Arial; text-align: center; color: rgb(170, 170, 170); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>

                            <h3 class="skill-title">Diseño Web</h3>

                            <p class="skill-desc">Amante del diseño y el maquetado, me encanta confeccionar un sitio web en su totalidad. </p>

                            <ul class="fa-ul">
                                <li><i class="fa-fw fa-li fa fa-angle-double-right"></i>HTML5</li>
                                <li><i class="fa-fw fa-li fa fa-angle-double-right"></i>CSS3</li>
                                <li><i class="fa-fw fa-li fa fa-angle-double-right"></i>Javascript</li>
                            </ul>
                        </div>
                    </div>

                    <!-- skill block -->
                    <div class="col-md-3 col-sm-6">
                        <div class="skill-wrap">
                            <div style="display: inline; width: 200px; height: 200px;"><input type="text" value="70" class="dial" readonly="readonly" style="width: 104px; height: 66px; position: absolute; vertical-align: middle; margin-top: 66px; margin-left: -152px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 40px; line-height: normal; font-family: Arial; text-align: center; color: rgb(170, 170, 170); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>

                            <h3 class="skill-title">Otros</h3>

                            <p class="skill-desc">Habilidade que me permiten ofrecer un servicio integral </p>

                            <ul class="fa-ul">
                                <li><i class="fa-fw fa-li fa fa-angle-double-right"></i>SEO</li>
                                <li><i class="fa-fw fa-li fa fa-angle-double-right"></i>Usabilidad</li>
                                <li><i class="fa-fw fa-li fa fa-angle-double-right"></i>Estandares web (W3C)</li>
                                <li><i class="fa-fw fa-li fa fa-angle-double-right"></i>E-commerce</li>
                            </ul>
                        </div>
                    </div>

                </div><!-- .row -->
            </div><!-- .container -->
        </section>
        <!-- skill section end -->

        <!-- experience section -->
        <section id="exp" class="exp">
            <div class="container">
                <h2 class="heading">Trabajos destacados</h2>
                <!-- timeline -->
                <ul class="timeline">

                    <li class="year top">
                        <span>2012 - Presente</span>
                    </li>

                    <li class="present">
                        <div class="tl-header">
                            <h3 class="tl-role">Desarrollo</h3>
                            <h4 class="tl-company">http://www.tropicointernacional.com/</h4>
                            <span class="tl-time">2014 - Presente</span>
                        </div>

                        <img class="tl-img" src="<?= base_url() ?>assets/img/tropico.png" alt="">

                        <p class="tl-content">Which. Seed divide subdue. And first that gathered earth whales shall tree after place also wherein saying created likeness fowl. Blessed fish green set fill saying greater you whales can't, <a href="#">fruitful</a> form itself fifth created rule upon moving fourth. I green.</p>
                    </li>

                    <li class="present right">
                        <div class="tl-header">
                            <h3 class="tl-role">Diseño & Desarrollo</h3>
                            <h4 class="tl-company">http://www.optilodging.com/motor/250</h4>
                            <span class="tl-time">Oct 2012 - Mar 2013</span>
                        </div>

                        <img class="tl-img" src="<?= base_url() ?>assets/img/motor.png" alt="">

                        <p class="tl-content">Which. Seed divide subdue. And first that gathered earth whales shall tree after place also wherein saying created likeness fowl. Blessed fish green set fill saying greater you whales can't, <a href="#">fruitful</a> form itself fifth created rule upon moving fourth. I green.</p>
                    </li>
                    <li>
                        <div class="tl-header">
                            <h3 class="tl-role">Diseño & Desarrollo</h3>
                            <h4 class="tl-company">http://www.optilodging.com/</h4>
                            <span class="tl-time">Oct 2012 - Mar 2013</span>
                        </div>

                        <img class="tl-img" src="<?= base_url() ?>assets/img/reservas.png" alt="">

                        <p class="tl-content">Which. Seed divide subdue. And first that gathered earth whales shall tree after place also wherein saying created likeness fowl. Blessed fish green set fill saying greater you whales can't, <a href="#">fruitful</a> form itself fifth created rule upon moving fourth. I green.</p>
                    </li>
                    <li class="year">
                        <span>2010 - 2012</span>
                    </li>



                    <li class="right">
                        <div class="tl-header">
                            <h3 class="tl-role">Diseño & Desarrollo</h3>
                            <h4 class="tl-company">http://www.optilodging.com/</h4>
                            <span class="tl-time">Oct 2012 - Mar 2013</span>
                        </div>

                        <img class="tl-img" src="<?= base_url() ?>assets/img/opti.png" alt="">

                        <p class="tl-content">Which. Seed divide subdue. And first that gathered earth whales shall tree after place also wherein saying created likeness fowl. Blessed fish green set fill saying greater you whales can't, <a href="#">fruitful</a> form itself fifth created rule upon moving fourth. I green.</p>
                    </li>

                    <li>
                        <div class="tl-header">
                            <h3 class="tl-role">Diseño & Desarrollo</h3>
                            <h4 class="tl-company">http://froac.manizales.unal.edu.co/roap/</h4>
                            <span class="tl-time">Oct 2012 - Mar 2013</span>
                        </div>

                        <img class="tl-img" src="<?= base_url() ?>assets/img/roap.png" alt="">

                        <p class="tl-content">Which. Seed divide subdue. And first that gathered earth whales shall tree after place also wherein saying created likeness fowl. Blessed fish green set fill saying greater you whales can't, <a href="#">fruitful</a> form itself fifth created rule upon moving fourth. I green.</p>
                    </li>





                    <li class="year">
                        <span>2010</span>
                    </li>

                    <li class="right">
                        <div class="tl-header">
                            <h3 class="tl-role">Baby steps</h3>
                            <h4 class="tl-company"></h4>
                            <span class="tl-time">2009 - Presente</span>
                        </div>

                        <img class="tl-img" src="<?= base_url() ?>assets/img/baby.jpg" alt="">

                        <p class="tl-content">Make whales place beast Herb a isn't over, <i>it beast darkness sixth greater god midst</i> every rule be likeness beast so sixth i firmament.</p>
                    </li>

                </ul>
            </div>
        </section>
        <!-- experience section end -->

        <!-- contact section -->
        <section id="contact" class="contact" style="position: static;">
            <div class="container"> 
                <h2 class="heading">Contacto <small>Por favor sientase libre de enviarme cualquier dudad o comentario sin ningun compromiso, responder a la menor brevedad posible</small></h2> 
                <div class="row">

                    <!-- contact detail and social media -->
                    <div class="col-md-4 col-sm-4 contact-inner">


                        <div class="contact-wrap">
                            <span>Email: <a href="mailto:#">luismec90@gmail.com</a></span>
                            <span>Celular: (+57) 311 3727751</span>
                        </div>
                        <address class="contact-wrap">
                            Medellín, Colombia<br>
                        </address>
                        <ul class="list-unstyled list-inline social">
                            <li><a href="https://www.facebook.com/luismec90" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://co.linkedin.com/pub/luis-fernando-montoya-gomez/72/228/39" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://github.com/luismec90" target="_blank"><i class="fa fa-github"></i></a></li>

                        </ul>
                    </div>

                    <!-- contact form -->			
                    <form id="contact-form" class="col-md-8 col-sm-8 contact-form" action="includes/mail.php" method="post" data-parsley-namespace="data-parsley-">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="sr-only"></label>
                                    <input id="name" name="name" class="form-control required parsley-validated" placeholder="Nombre" type="text" data-parsley-trigger="change"><span class="success-mark"><i class="fa fa-check-circle"></i></span><span class="error-mark"><i class="fa fa-times-circle"></i></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="sr-only"></label>
                                    <input id="email" name="email" class="form-control required parsley-validated" placeholder="Email" data-parsley-type="email" data-parsley-trigger="change"><span class="success-mark"><i class="fa fa-check-circle"></i></span><span class="error-mark"><i class="fa fa-times-circle"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea name="message" class="form-control required parsley-validated" rows="8" placeholder="Mensaje" data-parsley-trigger="keyup"></textarea><span class="success-mark"><i class="fa fa-check-circle"></i></span><span class="error-mark"><i class="fa fa-times-circle"></i></span>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-default pull-right">Enviar</button>
                            <a href="#" class="btn btn-danger pull-right contact-reset">Limpiar</a>
                        </div>
                    </form>

                    <!-- message sending statuses -->
                    <div id="contact-sending-success" class="contact-notif success">Message has been successfully sent.</div>
                    <div id="contact-sending-error" class="contact-notif error">There was an error in sending message. Please try again.</div>
                    <div id="contact-sending" class="contact-notif">Sending message. Please wait...</div>
                </div><!-- .row -->
                <br><br>
                <div class="row">
                    <div  id="map-canvas">
                    </div>
                </div>
            </div><!-- container -->
            <br><br>     <br><br>
        </section>


        <!-- contact section end -->

        <footer class="main-footer">
            <div class="container">			
                <ul class="list-inline fa-ul archive">
                    <li><i class="fa-li fa fa-save"></i><a href="#">Download CV</a></li>
                    <li><i class="fa-li fa fa-print"></i><a href="#">Print CV</a></li>
                </ul>

                <span class="copyright">All Rights Reserved © 2014.</span>
            </div>
        </footer>

        <!-- javascript -->
        <script src="<?= base_url() ?>assets/libs/jQuery-1.11.0/jQuery.min.js"></script><!-- jquery -->
        <script src="<?= base_url() ?>assets/libs/bootstrap-3.1.1/js/bootstrap.min.js"></script><!-- bootstrap js -->
        <script src="<?= base_url() ?>assets/js/jquery.knob.js"></script><!-- knob -->
        <script src="<?= base_url() ?>assets/js/jquery.scrollTo-1.4.3.1-min.js"></script><!-- scrollto -->
        <script src="<?= base_url() ?>assets/js/jquery.localscroll-1.2.7-min.js"></script><!-- localscroll -->
        <script src="<?= base_url() ?>assets/js/jquery.mixitup.min.js"></script><!-- mixitup -->
        <script src="<?= base_url() ?>assets/js/parsley.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiUHrtP7COzKY2azegkJZzps3J7pQ4Qs4&sensor=false"></script> 
        <script src="<?= base_url() ?>assets/js/custom.js"></script><!-- custom -->


    </body>
</html>
