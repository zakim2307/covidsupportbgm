<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
    <link href="assets/images/favicon/favicon.png" rel="icon">
    <title>Medcity - Medical Healthcare HTML5 Template</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="assets/css/libraries.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head> -->

<body>
    <div class="wrapper">
        <div class="preloader">
            <div class="loading"><span></span><span></span><span></span><span></span></div>
        </div><!-- /.preloader -->

        <!-- =========================
        Header
    =========================== -->
        <header class="header header-layout1">
            <div class="header-topbar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                                    <li>
                                        <button class="miniPopup-emergency-trigger" type="button">18001022716</button>
                                        <div id="miniPopup-emergency" class="miniPopup miniPopup-emergency text-center">
                                            <div class="emergency__icon">
                                                <i class="icon-call3"></i>
                                            </div>
                                            <a href="tel:+18001022716" class="phone__number">
                                                <i class="icon-phone"></i> <span>18001022716</span>
                                            </a>
                                            <p>Please feel free to contact our friendly reception staff with any general
                                                or medical enquiry.
                                            </p>
                                            <a href="contact" class="btn btn__secondary btn__link btn__block">
                                                <span>Contact Us</span> <i class="icon-arrow-right"></i>
                                            </a>
                                        </div><!-- /.miniPopup-emergency -->
                                    </li>
                                    <li>
                                    <a href="#">
                                        <i class="icon-phone"></i>&nbsp;&nbsp;&nbsp;ERT<span> – Emergency Response Team</span></a>
                                    </li>
                                </ul><!-- /.contact__list -->
                                <div class="d-flex d-flex-hidden-small">
                                <!-- <div class="d-flex"> -->
                                    <ul class="social-icons list-unstyled mb-0 mr-30">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    </ul><!-- /.social-icons -->
                                    <!-- <form class="header-topbar__search">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                                    </form> -->
                                </div>
                                <!-- <div class="d-flex d-flex-hidden-big"> -->
                                <!-- <div class="d-flex"> -->
                                    <!-- <ul class="social-icons list-unstyled mb-0 mr-30">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li> -->
                                    <!-- </ul> -->
                                    <!-- /.social-icons -->
                                    <!-- <form class="header-topbar__search">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                                    </form> -->
                                <!-- </div> -->
                            </div>
                        </div><!-- /.col-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.header-top -->
            <nav class="navbar navbar-expand-lg sticky-navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index">
                        <img src="assets/images/logo/logo-light1.png" class="logo-light" alt="logo">
                        <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button">
                        <span class="menu-lines"><span></span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNavigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav__item">
                                <a href="index" class="nav__item-link">Home</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="about" class="nav__item-link">About Us</a>
                            </li><!-- /.nav-item -->

                            <!-- <li class="nav__item">
                                <a href="doctor" class="nav__item-link">Doctors</a> -->
                            <!-- </li>/.nav-item -->
                            <li class="nav__item">
                                <a href="NGO" class="nav__item-link">NGO's</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="donation" class="nav__item-link">Donations</a>
                            </li><!-- /.nav-item -->
                            
                            <li class="nav__item has-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Media</a>
                                <ul class="dropdown-menu">
                                    <li class="nav__item">
                                        <a href="aboutCovid" class="nav__item-link">About Covid</a>
                                    </li><!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="gallary" class="nav__item-link">Media Gallery</a>
                                    </li><!-- /.nav-item -->
                                    <li class="nav__item">
                                <a href="newsPages" class="nav__item-link">News</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="disclaimer" class="nav__item-link">Disclaimer</a>
                            </li><!-- /.nav-item -->
                                </ul><!-- /.dropdown-menu -->
                            </li><!-- /.nav-item -->
                            
                            <div class="d-sm-flex d-lg-flex d-xl-none">
                                <li class="nav__item">
                                    <a href="services" class="nav__item-link">Services</a>
                                </li>
                                <li class="nav__item">
                                    <a href="contact" class="nav__item-link">
                                        <!-- <i class="icon-calendar"></i> -->
                                        <span>Contact ERT</span>
                                    </a>
                                </li><!-- /.nav-item -->
                            </div>
                        </ul><!-- /.navbar-nav -->
                        <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
                    </div><!-- /.navbar-collapse -->
                    <div class="d-none d-xl-flex align-items-center position-relative ml-30">
                        <div class="miniPopup-departments-trigger">
                            <span class="menu-lines" id="miniPopup-departments-trigger-icon">
                                <span>
                                </span>
                            </span>
                                    <a href="services">Services</a>
                        </div>
                        <ul id="miniPopup-departments" class="miniPopup miniPopup-departments dropdown-menu">
                            <li class="nav__item">
                                <a href="bedAvailability" class="nav__item-link">Bed Availability</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="medicine" class="nav__item-link">Medicine Remedesvir</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="oxygen" class="nav__item-link">Oxygen Cylinders</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="ambulance" class="nav__item-link">Ambulance Services</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="burials" class="nav__item-link">Burials and Cremations</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="plasma" class="nav__item-link">Plasma Therapy</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="doctor" class="nav__item-link">Doctors Assistance</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="testingCenter" class="nav__item-link">Covid-19 Free Testing Center</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="diagnostic" class="nav__item-link">Diagnostics</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="vaccineAwareness" class="nav__item-link">Vaccine Awareness</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="homeService" class="nav__item-link">Home Service</a>
                            </li><!-- /.nav-item -->
                        </ul> <!-- /.miniPopup-departments -->
                        <a href="contact" class="btn btn__primary btn__rounded ml-30">
                            <!-- <i class="icon-calendar"></i> -->
                            <span>Contact ERT</span>
                        </a>
                    </div>
                </div>
            </nav>
        </header>