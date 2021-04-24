<!DOCTYPE html>
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
</head>


<?php include('./commonFiles/header.php') ?>


<!-- ========================
       page title 
    =========================== -->
<section class="page-title page-title-layout5 pb-100">
    <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pagetitle__heading">Get Help To Your Doorstep</h1>
                <?php include('./commonFiles/covid.php') ?>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ==========================
        contact layout 1
    =========================== -->
<section class="contact-layout1 pt-0 mt-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-panel d-flex flex-wrap">
                    <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="contact-panel__title">How Can We Help? </h4>
                                <p class="contact-panel__desc mb-30">Please feel welcome to contact our friendly
                                    reception staff
                                    with any general or medical enquiry. Our doctors will receive or return any urgent
                                    calls.
                                </p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-user form-group-icon"></i>
                                    <input type="text" class="form-control" placeholder="Name" id="home-service-name"
                                        name="contact-name" required>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-email form-group-icon"></i>
                                    <input type="email" class="form-control" placeholder="Email" id="home-service-email"
                                        name="contact-email" required>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-phone form-group-icon"></i>
                                    <input type="text" class="form-control" placeholder="Phone" id="home-service-Phone"
                                        name="contact-phone" required>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-news form-group-icon"></i>
                                    <input type="text" class="form-control" placeholder="Address"
                                        id="home-service-address" name="contact-phone" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <i class="icon-alert form-group-icon"></i>
                                    <textarea class="form-control" placeholder="Message" id="home-service-message"
                                        name="contact-message"></textarea>
                                </div>
                                <button type="submit"
                                    class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                    <span>Submit Request</span> <i class="icon-arrow-right"></i>
                                </button>
                                <div class="contact-result"></div>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                    <div
                        class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                        <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
                        <div>
                            <h4 class="contact-panel__title color-white">Quick Contacts</h4>
                            <p class="contact-panel__desc font-weight-bold color-white mb-30">Please feel free to
                                contact our
                                friendly staff with any medical enquiry.
                            </p>
                        </div>
                        <div>
                            <ul class="contact__list list-unstyled mb-30">
                                <li>
                                    <i class="icon-phone"></i><a href="tel:+18001022716">Tollfree
                                        Helpline:18001022716</a>
                                </li>
                                <li>
                                    <i class="icon-location"></i><a href="#">Location: Belgaum/Karnataka</a>
                                </li>
                                <li>
                                    <i class="icon-clock"></i><a href="contact.php">Mon - Fri: 8:00 am - 7:00 pm</a>
                                </li>
                            </ul>
                            <a href="contact.php" class="btn btn__white btn__rounded btn__outlined">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact layout 1 -->


<?php include('./commonFiles/footer.php') ?>