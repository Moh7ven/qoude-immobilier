@extends('layout.master')


@section('content')

<section id="featured">

    <!-- Slider -->
    <div id="main-slider" class="flexslider">

        <div class="flex-caption">

        </div>
        <ul class="slides">

            <li>
                <img src="img/slides/1.jpg" alt="" />

            </li>
            <li>
                <img src="img/slides/2.jpg" alt="" />

            </li>
            <li>
                <img src="img/slides/3.jpg" alt="" />
            </li>
            <li>
                <img src="img/slides/4.jpg" alt="" />
            </li>
            <li>
                <img src="img/slides/5.jpg" alt="" />
            </li>
            <li>
                <img src="img/slides/6.jpg" alt="" />
            </li>
        </ul>
    </div>
    <!-- end slider -->

</section>
<section class="search-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">

                <div class="col-lg-12">
                    <div class="aligncenter">
                        <h1 class="aligncenter" style="color:white;">Bienvenue sur le site de l'agence Qoude immobilier</h1>
                        <h3>
                            <p style="color:black; font-weight: bold;">Quel type de bien recherchez-vous ?</p>
                        </h3>
                    </div>
                    <!-- start Recherche de biens -->
                    <div class="quick-search">
                        <form role="form">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="location">Ville</label>
                                    <select class="form-control">
                                        <option>Abidjan</option>
                                        <option>Yamoussoukro</option>
                                        <option>Assinie</option>
                                        <option>Grand-bassam</option>
                                        <option>Bouake</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="bedroom">Nombre de pièce</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <!-- break -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="type">Commune</label>
                                    <select class="form-control">
                                        <option>Yopougon</option>
                                        <option>Plateau</option>
                                        <option>Cocody</option>
                                        <option>Port-bouet</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status">Quartier</label>
                                    <select class="form-control">
                                        <option>Pour achat</option>
                                        <option>Pour location</option>
                                    </select>
                                </div>

                            </div>
                            <!-- break -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <select class="form-control">
                                        <option>Villa</option>
                                        <option>Residence</option>
                                        <option>Appartement</option>
                                        <option>Terrain</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control">
                                        <option>Pour achat</option>
                                        <option>Pour location</option>
                                    </select>
                                </div>
                            </div>
                            <!-- break -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="minprice">Prix minimum</label>
                                    <select class="form-control">
                                        <option>60.000 fcfa</option>
                                        <option>80.000 fcfa</option>
                                        <option>100.000 fcfa</option>
                                        <option>150.000 fcfa</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="maxprice">Prix maximun</label>
                                    <select class="form-control">
                                        <option>250.000 fcfa</option>
                                        <option>300.000 fcfa</option>
                                        <option>350.000 fcfa</option>
                                        <option>400.000 fcfa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input name="submit" value="Search" class="btn btn-success btn-lg btn-block" type="submit">
                            </div>
                        </form>

                    </div>
                    <!-- end Recherche de biens -->
                </div>
            </div>
        </div>

</section>
<section class="hero-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="aligncenter">

                </div>
            </div>
        </div>
    </div>
</section>

<section id="content">

    <div class="container">
        <!-- start Nos biens -->
        <h1 class="section-title">Nos biens</h1>
        <div class="container">
            <div class="col-lg-12 col-sm-7">
                <ul class="portfolio-categ filter">
                    <li><a href="groupe_biens.html">Tous (250)</a></li>
                    <li><a href="groupe_biens.html">Appartements (100)</a></li>
                    <li><a href="groupe_biens.html" title="">Villas (50)</a></li>
                    <li><a href="groupe_biens.html" title="">Terrains (30)</a></li>
                    <li><a href="groupe_biens.html" title="">Residences (70)</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="project custom-card">
                    <a href=" {{ url('detail_biens') }}">
                        <img src="img/pimg1.jpg" class="img-responsive card-top" alt="">
                    </a>

                    <div class="project-details card-bottom">
                        <ul>
                            <li>
                                <h3 style="color:white">
                                    <strong>
                                        <div style="contain: content;">Terrain en vente</div>
                                    </strong>
                                </h3>
                            </li>
                            <li><strong style="font-size: 15px;">Superficie: 500m²</strong></li>
                            <li class="style-prix custom-card"><strong>Prix: 30.000.000 fcfa </strong></li>
                            <li>
                                <strong>
                                    <a style="color:#E21818" href="https://www.google.com/maps/place/Abidjan/@5.3484281,-4.1444809,11z/data=!3m1!4b1!4m6!3m5!1s0xfc1ea5311959121:0x3fe70ddce19221a6!8m2!3d5.3599517!4d-4.0082563!16zL20vMGZteWQ?entry=ttu" target="_blank">
                                        <i class="fa fa-map-marker"></i>&nbsp;&nbsp; &nbsp;Abidjan, Côte d'Ivoire
                                    </a>
                                </strong>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="project custom-card">
                    <img src="img/pimg2.jpg" class="img-responsive card-top" alt="">
                    <div class="project-details card-bottom">
                        <ul>
                            <li>
                                <H3 style="color:white">
                                    <strong>
                                        <div style="contain: content;">Terrain en vente</div>
                                    </strong>
                                </H3>
                            </li>
                            <li><strong style="font-size: 15px;">Superficie: 500m²</strong></li>
                            <li class="style-prix custom-card"><strong>Prix: 30.000.000 fcfa </strong></li>
                            <li>
                                <strong>
                                    <a style="color:#E21818" href="https://www.google.com/maps/place/Abidjan/@5.3484281,-4.1444809,11z/data=!3m1!4b1!4m6!3m5!1s0xfc1ea5311959121:0x3fe70ddce19221a6!8m2!3d5.3599517!4d-4.0082563!16zL20vMGZteWQ?entry=ttu" target="_blank">
                                        <i class="fa fa-map-marker"></i>&nbsp;&nbsp; &nbsp;Abidjan, Côte d'Ivoire
                                    </a>
                                </strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="project custom-card">
                    <img src="img/pimg3.jpg" class="img-responsive card-top" alt="">
                    <div class="project-details card-bottom">
                        <ul>
                            <li>
                                <H3 style="color:white">
                                    <strong>
                                        <div style="contain: content;">Terrain en vente</div>
                                    </strong>
                                </H3>
                            </li>
                            <li><strong style="font-size: 15px;">Superficie: 500m²</strong></li>
                            <li class="style-prix custom-card"><strong>Prix: 30.000.000 fcfa </strong></li>
                            <li>
                                <strong>
                                    <a style="color:#E21818" href="https://www.google.com/maps/place/Abidjan/@5.3484281,-4.1444809,11z/data=!3m1!4b1!4m6!3m5!1s0xfc1ea5311959121:0x3fe70ddce19221a6!8m2!3d5.3599517!4d-4.0082563!16zL20vMGZteWQ?entry=ttu" target="_blank">
                                        <i class="fa fa-map-marker"></i>&nbsp;&nbsp; &nbsp;Abidjan, Côte d'Ivoire
                                    </a>
                                </strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="project custom-card">
                    <img src="img/pimg4.jpg" class="img-responsive card-top" alt="">
                    <div class="project-details card-bottom">
                        <ul>
                            <li>
                                <H3 style="color:white">
                                    <strong>
                                        <div style="contain: content;">Terrain en vente</div>
                                    </strong>
                                </H3>
                            </li>
                            <li><strong style="font-size: 15px;">Superficie: 500m²</strong></li>
                            <li class="style-prix custom-card"><strong>Prix: 30.000.000 fcfa </strong></li>
                            <li>
                                <strong>
                                    <a style="color:#E21818" href="https://www.google.com/maps/place/Abidjan/@5.3484281,-4.1444809,11z/data=!3m1!4b1!4m6!3m5!1s0xfc1ea5311959121:0x3fe70ddce19221a6!8m2!3d5.3599517!4d-4.0082563!16zL20vMGZteWQ?entry=ttu" target="_blank">
                                        <i class="fa fa-map-marker"></i>&nbsp;&nbsp; &nbsp;Abidjan, Côte d'Ivoire
                                    </a>
                                </strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="project custom-card">
                    <img src="img/pimg1.jpg" class="img-responsive card-top" alt="">
                    <div class="project-details card-bottom">
                        <ul>
                            <li>
                                <H3 style="color:white">
                                    <strong>
                                        <div style="contain: content;">Terrain en vente</div>
                                    </strong>
                                </H3>
                            </li>
                            <li><strong style="font-size: 15px;">Superficie: 500m²</strong></li>
                            <li class="style-prix custom-card"><strong>Prix: 30.000.000 fcfa </strong></li>
                            <li>
                                <strong>
                                    <a style="color:#E21818" href="https://www.google.com/maps/place/Abidjan/@5.3484281,-4.1444809,11z/data=!3m1!4b1!4m6!3m5!1s0xfc1ea5311959121:0x3fe70ddce19221a6!8m2!3d5.3599517!4d-4.0082563!16zL20vMGZteWQ?entry=ttu" target="_blank">
                                        <i class="fa fa-map-marker"></i>&nbsp;&nbsp; &nbsp;Abidjan, Côte d'Ivoire
                                    </a>
                                </strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Nos biens -->
        <!-- start A propos de nous -->
        <div class="row">
            <div class="col-md-12">
                <div class="about-logo">
                    <h1>A propos de nous</h1>
                    <p>
                        une agence immobilière virtuelle spécialisée dans La vente et la location des biens immobiliers.Nous sommes dotés d’une connaissance parfaite et d’une maitrise du système
                        De gestion des patrimoines immobiliers depuis plus de 10 ans.
                    </p>
                    <p>
                        Aussi, dans notre intention manifeste de nous lancer dans l’entreprenariat privé, nous avons retenu cette activité dont le Eu égard aux différentes formes d’arnaques ou
                        d’escroqueries auxquelles nous sommes confrontés pour avoir une maison ou un terrain, il est important
                    </p>
                    <a href=" {{ url('about') }}" class="btnlink">lire plus...</a>
                </div>
            </div>
        </div>
        <!-- end A propos de nous -->
    </div>
</section>

@endsection