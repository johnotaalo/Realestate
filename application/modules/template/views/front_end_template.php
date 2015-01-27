<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from mariusn.com/themes/reales/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jan 2015 15:06:27 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>Real Estate| real estate web application</title>

        <link href="<?php echo base_url(); ?>assets/frontend/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/css/simple-line-icons.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/css/fullscreen-slider.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/css/app.css" rel="stylesheet" id="app">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="notransition no-hidden">

        <!-- Hero -->

        <div id="hero-container">
            <ul class="cb-slideshow">
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
            </ul>
            <div class="home-header">
                <div class="home-logo osLight"><span class="fa fa-home"></span> Real Estate</div>
                <a href="#" class="home-navHandler visible-xs"><span class="fa fa-bars"></span></a>
                <div class="home-nav">
                    <ul>
                        <li><a href="<?php base_url(); ?>auth">Sign Up</a></li>
                        <li><a href="<?php base_url(); ?>auth">Sign In</a></li>
                        <li><a href="add.html" class="btn btn-green isThemeBtn">List A Property</a></li>
                    </ul>
                </div>
            </div>
            <div class="home-caption">
                <div class="home-title">Now it's easy to find your future home</div>
                <div class="home-subtitle">With Rreal Estate Company</div>
                <a href="#" class="btn btn-lg btn-black">Learn More</a>
            </div>
            <div class="search-panel">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="city" placeholder="City" autocomplete="off">
                    </div>
                    <div class="form-group hidden-xs adv">
                        <a href="#" data-toggle="dropdown" class="btn btn-white dropdown-toggle">
                            <span class="dropdown-label">Bedrooms</span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-select">
                            <li class="active"><input type="radio" name="bedno" checked="checked"><a href="#">Bedrooms</a></li>
                            <li><input type="radio" name="bedno"><a href="#">1</a></li>
                            <li><input type="radio" name="bedno"><a href="#">2</a></li>
                            <li><input type="radio" name="bedno"><a href="#">3</a></li>
                            <li><input type="radio" name="bedno"><a href="#">4</a></li>
                        </ul>
                    </div>
                    <div class="form-group hidden-xs adv">
                        <a href="#" data-toggle="dropdown" class="btn btn-white dropdown-toggle">
                            <span class="dropdown-label">Bathrooms</span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-select">
                            <li class="active"><input type="radio" name="bathno" checked="checked"><a href="#">Bathrooms</a></li>
                            <li><input type="radio" name="bathno"><a href="#">1</a></li>
                            <li><input type="radio" name="bathno"><a href="#">2</a></li>
                            <li><input type="radio" name="bathno"><a href="#">3</a></li>
                            <li><input type="radio" name="bathno"><a href="#">4</a></li>
                        </ul>
                    </div>
                    <div class="form-group hidden-xs adv">
                        <div class="input-group">
                            <div class="input-group-addon">KSH.</div>
                            <input class="form-control price" type="text" placeholder="From">
                        </div>
                    </div>
                    <div class="form-group hidden-xs adv">
                        <div class="input-group">
                            <div class="input-group-addon">KSH.</div>
                            <input class="form-control price" type="text" placeholder="To">
                        </div>
                    </div>
                    <div class="form-group hidden-xs adv">
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> For Rent</label></div>
                    </div>
                    <div class="form-group hidden-xs adv">
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> For Sale</label></div>
                    </div>
                    <div class="form-group">
                        <a href="explore.html" class="btn btn-green isThemeBtn">Search</a>
                        <a href="#" class="btn btn-o btn-white pull-right visible-xs" id="advanced">Advanced Search <span class="fa fa-angle-up"></span></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="highlight">
            <div class="h-title osLight">Find your new place with Real Estate Company</div>
            <div class="h-text osLight">With us, you can find the place of your choice with hundreds of houses for sale and for rent. Search above with your best parameters</div>
        </div>

        <!-- Content -->

        <div class="home-wrapper">
            <div class="home-content">
                <h2 class="osLight">Our Services</h2>
                <div class="row pb40">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
                        <a href="#">
                            <span class="icon-pointer s-icon"></span>
                            <div class="s-content">
                                <h2 class="s-main osLight">Find places anywhere in Kenya</h2>
                                <h3 class="s-sub osLight">Choose your favourite locations across the country</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
                        <a href="#">
                            <span class="icon-users s-icon"></span>
                            <div class="s-content">
                                <h2 class="s-main osLight">We have agents with experience</h2>
                                <h3 class="s-sub osLight">Get help from our agents with vast knowledge in the field</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
                        <a href="#">
                            <span class="icon-home s-icon"></span>
                            <div class="s-content">
                                <h2 class="s-main osLight">Buy or rent beautiful properties</h2>
                                <h3 class="s-sub osLight">Get the best property appealing to your eye and those of your neighbour</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
                        <a href="#">
                            <span class="icon-cloud-upload s-icon"></span>
                            <div class="s-content">
                                <h2 class="s-main osLight">With agent account you can list properties</h2>
                                <h3 class="s-sub osLight">List property for sale or rent on acquisition of this account</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <h2 class="osLight">Recently Listed Properties</h2>
                <div class="row pb40">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <a href="single.html" class="propWidget-2">
                            <div class="fig">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/prop/1-1.png" alt="Modern Residence in New York">
                                <img class="blur" src="<?php echo base_url(); ?>assets/frontend/images/prop/1-1.png" alt="Modern Residence in New York">
                                <div class="opac"></div>
                                <div class="priceCap osLight"><span>KSH.17,750,000</span></div>
                                <div class="figType">FOR SALE</div>
                                <h3 class="osLight">Modern Residence in Nairobi</h3>
                                <div class="address">Uhuru Gardens Estate Lang'ata</div>
                                <ul class="rating">
                                    <li><span class="fa fa-star star-1"></span></li>
                                    <li><span class="fa fa-star star-2"></span></li>
                                    <li><span class="fa fa-star star-3"></span></li>
                                    <li><span class="fa fa-star star-4"></span></li>
                                    <li><span class="fa fa-star-o star-5"></span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <a href="single.html" class="propWidget-2">
                            <div class="fig">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/prop/2-1.png" alt="Hauntingly Beautiful Estate">
                                <img class="blur" src="<?php echo base_url(); ?>assets/frontend/images/prop/2-1.png" alt="Hauntingly Beautiful Estate">
                                <div class="opac"></div>
                                <div class="priceCap osLight"><span>KSH.35,000 p.m</span></div>
                                <div class="figType">FOR RENT</div>
                                <h3 class="osLight">Beautiful Estate</h3>
                                <div class="address">Phenom Estate Lang'ata</div>
                                <ul class="rating">
                                    <li><span class="fa fa-star star-1"></span></li>
                                    <li><span class="fa fa-star star-2"></span></li>
                                    <li><span class="fa fa-star star-3"></span></li>
                                    <li><span class="fa fa-star star-4"></span></li>
                                    <li><span class="fa fa-star star-5"></span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <a href="single.html" class="propWidget-2">
                            <div class="fig">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/prop/3-1.png" alt="Luxury Mansion">
                                <img class="blur" src="<?php echo base_url(); ?>assets/frontend/images/prop/3-1.png" alt="Luxury Mansion">
                                <div class="opac"></div>
                                <div class="priceCap osLight"><span>KSH.26,350,000</span></div>
                                <div class="figType">FOR SALE</div>
                                <h3 class="osLight">Luxury Mansion</h3>
                                <div class="address">Mtupweni Mombasa</div>
                                <ul class="rating">
                                    <li><span class="fa fa-star star-1"></span></li>
                                    <li><span class="fa fa-star star-2"></span></li>
                                    <li><span class="fa fa-star star-3"></span></li>
                                    <li><span class="fa fa-star star-4"></span></li>
                                    <li><span class="fa fa-star star-5"></span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <a href="single.html" class="propWidget-2">
                            <div class="fig">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/prop/4-1.png" alt="Sophisticated Residence">
                                <img class="blur" src="<?php echo base_url(); ?>assets/frontend/images/prop/4-1.png" alt="Sophisticated Residence">
                                <div class="opac"></div>
                                <div class="priceCap osLight"><span>KSH.22,000 P.M</span></div>
                                <div class="figType">FOR RENT</div>
                                <h3 class="osLight">Sophisticated Residence</h3>
                                <div class="address">Milimani Estate Kisumu</div>
                                <ul class="rating">
                                    <li><span class="fa fa-star star-1"></span></li>
                                    <li><span class="fa fa-star star-2"></span></li>
                                    <li><span class="fa fa-star star-3"></span></li>
                                    <li><span class="fa fa-star star-4"></span></li>
                                    <li><span class="fa fa-star star-5"></span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <a href="single.html" class="propWidget-2">
                            <div class="fig">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/prop/5-1.png" alt="House With a Lovely Glass">
                                <img class="blur" src="<?php echo base_url(); ?>assets/frontend/images/prop/5-1.png" alt="House With a Lovely Glass">
                                <div class="opac"></div>
                                <div class="priceCap osLight"><span>KSH.30,930,000</span></div>
                                <div class="figType">FOR SALE</div>
                                <h3 class="osLight">House With a Lovely Glass</h3>
                                <div class="address">Mashimoni Estate Mombasa Island</div>
                                <ul class="rating">
                                    <li><span class="fa fa-star star-1"></span></li>
                                    <li><span class="fa fa-star star-2"></span></li>
                                    <li><span class="fa fa-star star-3"></span></li>
                                    <li><span class="fa fa-star star-4"></span></li>
                                    <li><span class="fa fa-star star-5"></span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <a href="single.html" class="propWidget-2">
                            <div class="fig">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/prop/1-1.png" alt="Modern Residence in New York">
                                <img class="blur" src="<?php echo base_url(); ?>assets/frontend/images/prop/1-1.png" alt="Modern Residence in New York">
                                <div class="opac"></div>
                                <div class="priceCap osLight"><span>KSH.11,750,000</span></div>
                                <div class="figType">FOR SALE</div>
                                <h3 class="osLight">Modern Residence in Kakamega</h3>
                                <div class="address">Maraba Kakamega</div>
                                <ul class="rating">
                                    <li><span class="fa fa-star star-1"></span></li>
                                    <li><span class="fa fa-star star-2"></span></li>
                                    <li><span class="fa fa-star star-3"></span></li>
                                    <li><span class="fa fa-star star-4"></span></li>
                                    <li><span class="fa fa-star-o star-5"></span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
                <h2 class="osLight">Our Agents</h2>
                <div class="row pb40">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="agent">
                            <a href="profile.html" class="agent-avatar">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/avatar-1.png" alt="John Smith">
                                <div class="ring"></div>
                            </a>
                            <div class="agent-name osLight">Joshua Bakasa</div>
                            <div class="agent-rating">
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                            </div>
                            <div class="agent-contact">
                                <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-green"><span class="fa fa-envelope-o"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-facebook"><span class="fa fa-facebook"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-twitter"><span class="fa fa-twitter"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-google"><span class="fa fa-google-plus"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="agent">
                            <a href="profile.html" class="agent-avatar">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/avatar-2.png" alt="Jane Smith">
                                <div class="ring"></div>
                            </a>
                            <div class="agent-name osLight">Adima Mesa</div>
                            <div class="agent-rating">
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                            </div>
                            <div class="agent-contact">
                                <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-green"><span class="fa fa-envelope-o"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-facebook"><span class="fa fa-facebook"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-twitter"><span class="fa fa-twitter"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-google"><span class="fa fa-google-plus"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="agent">
                            <a href="profile.html" class="agent-avatar">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/avatar-3.png" alt="Rust Cohle">
                                <div class="ring"></div>
                            </a>
                            <div class="agent-name osLight">Willy Mareka</div>
                            <div class="agent-rating">
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                            </div>
                            <div class="agent-contact">
                                <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-green"><span class="fa fa-envelope-o"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-facebook"><span class="fa fa-facebook"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-twitter"><span class="fa fa-twitter"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-google"><span class="fa fa-google-plus"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="agent">
                            <a href="profile.html" class="agent-avatar">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/avatar-4.png" alt="Antony Iglesias">
                                <div class="ring"></div>
                            </a>
                            <div class="agent-name osLight">Richard Karsan</div>
                            <div class="agent-rating">
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                            </div>
                            <div class="agent-contact">
                                <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-green"><span class="fa fa-envelope-o"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-facebook"><span class="fa fa-facebook"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-twitter"><span class="fa fa-twitter"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-google"><span class="fa fa-google-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="osLight">Testimonials</h2>
                <div id="home-testimonials" class="carousel slide carousel-wb mb20" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#home-testimonials" data-slide-to="0" class="active"></li>
                        <li data-target="#home-testimonials" data-slide-to="1" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/avatar-2.png" class="home-testim-avatar" alt="Jane Smith">
                            <div class="home-testim">
                                <div class="home-testim-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</div>
                                <div class="home-testim-name">Adima Mesa</div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/avatar-3.png" class="home-testim-avatar" alt="Rust Cohle">
                            <div class="home-testim">
                                <div class="home-testim-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</div>
                                <div class="home-testim-name">Willy Mareka</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <div class="home-footer">
            <div class="home-wrapper">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="osLight footer-header">Company</div>
                        <ul class="footer-nav pb20">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Policies</a></li>
                            <li><a href="#">Terms & Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="osLight footer-header">Discover</div>
                        <ul class="footer-nav pb20">
                            <li><a href="#">Become a Member</a></li>
                            <li><a href="#">Properties List</a></li>
                            <li><a href="#">Sign In</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="osLight footer-header">Get in Touch</div>
                        <ul class="footer-nav pb20">
                            <li class="footer-phone"><span class="fa fa-phone"></span> +254723151502</li>
                            <li class="footer-address osLight">
                                <p>Lang'ata Road</p>
                                <p>Lang'ata</p>
                                <p>Kenya</p>
                            </li>
                            <li><a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-white"><span class="fa fa-facebook"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-white"><span class="fa fa-twitter"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-white"><span class="fa fa-google-plus"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-white"><span class="fa fa-linkedin"></span></a> </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="osLight footer-header">Subscribe to Our Newsletter</div>
                        <form role="form">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-green btn-block isThemeBtn">Subscribe</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="copyright">Real estate web application<br> &copy; 2014</div>
            </div>
        </div>


        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery-2.1.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery-ui-touch-punch.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.cookie.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.placeholder.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.touchSwipe.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=true&amp;libraries=geometry&amp;libraries=places" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/infobox.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.visible.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/home.js" type="text/javascript"></script>
    </body>

<!-- Mirrored from mariusn.com/themes/reales/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jan 2015 15:09:08 GMT -->
</html>