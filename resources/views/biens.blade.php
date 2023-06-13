@extends('layout.master')

@section('content')



<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle" style="font-size: 30px;">Nos Biens</h2>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="portfolio-categ filter">
                    <li class="all active"><a href="#">Tous (250)</a></li>
                    <li class="web"><a href="#" title="">Appartements (100)</a></li>
                    <li class="icon"><a href="#" title="">Villas (50)</a></li>
                    <li class="graphic"><a href="#" title="">Terrains (30)</a></li>
                    <li class="graphic"><a href="#" title="">Residences (70)</a></li>
                </ul>
                <div class="clearfix">
                </div>
                <div class="row ">
                    <section id="projects" ">
					<ul id=" thumbs" class="portfolio">
                        <!-- Item Project and Filter Name -->
                        <li class="item-thumbs col-lg-3 design " data-id="id-0" data-type="web">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Appartement, 3 pièces / Prix: 250.000 fcfa" href="img/works/1.jpg">
                                <span class="overlay-img">
                                    <div class="container">
                                        <h4 style="color:white;">Appartement à louer
                                            <br>Abidjan, Côte d'ivoire
                                        </h4>
                                    </div>
                                </span>
                                <span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-home"></i></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img src="img/works/1.jpg" alt="">
                        </li>
                        <!-- End Item Project -->

                        <!-- Item Project and Filter Name -->
                        <li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/2.jpg">
                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-code"></i></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img src="img/works/2.jpg" alt="">
                        </li>
                        <!-- End Item Project -->

                        <!-- Item Project and Filter Name -->
                        <li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="graphic">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/3.jpg">
                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-code"></i></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img src="img/works/3.jpg" alt="">
                        </li>
                        <!-- End Item Project -->

                        <!-- Item Project and Filter Name -->
                        <li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/4.jpg">
                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-code"></i></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img src="img/works/4.jpg" alt="">
                        </li>
                        <!-- End Item Project -->
                        <div class="clearfix"></div>
                        <!-- Item Project and Filter Name -->
                        <li class="item-thumbs col-lg-3 photography" data-id="id-4" data-type="web">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/5.jpg">
                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-code"></i></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img src="img/works/5.jpg" alt="">
                        </li>
                        <!-- End Item Project -->


                        <!-- Item Project and Filter Name -->
                        <li class="item-thumbs col-lg-3 photography" data-id="id-5" data-type="icon">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/6.jpg">
                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-code"></i></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img src="img/works/6.jpg" alt="">
                        </li>
                        <!-- End Item Project -->

                        <li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/7.jpg">
                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-code"></i></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img src="img/works/7.jpg" alt="">
                        </li>
                        <!-- End Item Project -->

                        <!-- Item Project and Filter Name -->
                        <li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="graphic">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/8.jpg">
                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-code"></i></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img src="img/works/8.jpg" alt="">
                        </li>
                        <!-- End Item Project -->

                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>

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
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            afterShow: function() {
                $(".fancybox-image").click(function() {
                    var redirectionUrl = $(this).closest('.fancybox').data('redirection-url');
                    if (redirectionUrl) {
                        window.location.href = redirectionUrl;
                    }
                });
            }
        });
    });
</script> -->

@endsection