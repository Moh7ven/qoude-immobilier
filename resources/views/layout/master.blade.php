<!DOCTYPE html>
<html lang="fr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <title>Hi-Tech Multi-purpose Free Bootstrap Responsive Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/jcarousel.html" rel="stylesheet" />
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="js/owl-carousel/owl.carousel.html" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo" /></a>
                    </div>
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li id="accueil"><a href="{{ url('/') }}">Acceuil</a></li>
                            <li id="apropos"><a href="{{ url('detail_biens') }}">A propos de nous</a></li>
                            <li id="biens"><a href="{{ url('biens') }}">Nos biens</a></li>
                            <li id="agent"><a href="portfolio.html">Agent immobilier</a></li>
                            <li id="suggestion"><a href="pricing.html">Suggestion de biens</a></li>
                            <li id="compte"><a href="contact.html">Avoir un compte</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        @yield('content')


        <!-- start footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5 class="widgetheading">&nbsp; &nbsp; &nbsp;Notre adresse</h5>
                            <address>
                                <strong>&nbsp; &nbsp; &nbsp; Agence immobilere</strong><br>
                                <a href="https://www.google.com/maps/place/Abidjan/@5.3484281,-4.1444809,11z/data=!3m1!4b1!4m6!3m5!1s0xfc1ea5311959121:0x3fe70ddce19221a6!8m2!3d5.3599517!4d-4.0082563!16zL20vMGZteWQ?entry=ttu" target="_blank">
                                    <i class="fa fa-map-marker"></i>&nbsp;&nbsp; &nbsp;Abidjan, Côte d'Ivoire
                                </a>
                            </address>

                            <p>
                                <a href="tel:+225 05 77 77 77 77"><i class="fa fa-phone"></i>&nbsp; &nbsp;(+225) 05 77 77 77 77</a><br>
                                <a href="mailto:immobilier@gmail.com"><i class="fa fa-envelope"></i>&nbsp; &nbsp;immobilier@gmail.com </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5 class="widgetheading">Clients</h5>
                            <ul class="link-list">
                                <li><a href="#" class="hover">Se connecter</a></li>
                                <li><a href="#" class="hover">Créer un compte</a></li>
                                <li><a href="#" class="hover">Contactez-nous</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5 class="widgetheading">Agent immobilier</h5>
                            <ul class="link-list">
                                <li><a href="#">Se connecter</a></li>
                                <li><a href="#">Créer un compte</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5 class="widgetheading">Annonce recentes</h5>
                            <ul class="link-list">
                                <li><a href="#">Appartement en vente, 200m²,Riviera m'badon.</a></li>
                                <li><a href="#">Terrain en vente, 1000m²,Songon.</a></li>
                                <li><a href="#">villa en vente, 500m², Marcory zone 4.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright">
                                <p>
                                    <span>&copy; Agent immobilier. All right reserved. <!--By </span><a href="http://webthemez.com/" target="_blank">WebThemez--></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="social-network">
                                <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/portfolio/jquery.quicksand.js"></script>
    <script src="js/portfolio/setting.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/owl-carousel/owl.carousel-2.html"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Récupérer l'URL actuelle
            var currentUrl = window.location.href;

            // Sélectionner tous les éléments de la liste
            var navItems = document.querySelectorAll(".navbar-nav li");

            // Variable pour garder une trace de l'élément actif
            var activeItem = null;

            // Fonction de gestion de l'événement de clic
            function handleClick(event) {
                var clickedItem = event.currentTarget;

                // Vérifier si l'élément cliqué est le même que l'élément actif
                if (clickedItem === activeItem) {
                    return;
                }

                // Désactiver l'élément actif précédent
                if (activeItem) {
                    activeItem.classList.remove("active");
                }

                // Activer l'élément cliqué
                clickedItem.classList.add("active");

                // Mettre à jour l'élément actif
                activeItem = clickedItem;
            }

            // Attacher la fonction de gestion de l'événement de clic à chaque élément de la liste
            navItems.forEach(function(item) {
                item.addEventListener("click", handleClick);
            });

            // Initialiser l'élément actif en fonction de l'URL actuelle
            navItems.forEach(function(item) {
                var link = item.querySelector("a");
                var href = link.getAttribute("href");

                if (currentUrl.indexOf(href) !== -1) {
                    item.classList.add("active");
                    activeItem = item;
                }
            });
        });
    </script>

</body>

<!-- Mirrored from webthemez.com/demo/hi-tech-real-estate-free-bootstrap-website-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2023 15:26:44 GMT -->

</html>