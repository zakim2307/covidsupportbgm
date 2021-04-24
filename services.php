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
<section class="page-title page-title-layout1 bg-overlay">
    <div class="bg-img"><img src="assets/images/sliders/11.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                <span class="pagetitle__subheading">Caring for humanity.</span>
                <h1 class="pagetitle__heading">PREPARE, DO NOT PANIC</h1>
                <p class="pagetitle__desc">COVID Support Belgaum, has curated all the important information along with the services being offered by various NGOs in Belgaum. </p>
                <div class="d-flex flex-wrap align-items-center">
                    <!-- <a href="contact.php" class="btn btn__secondary btn__outlined btn__rounded">
                        <span>Contact Us</span>
                    </a> -->
                </div>
                <?php include('./commonFiles/covid.php') ?>

            </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ========================
        Services Layout 1
    =========================== -->
<section class="services-layout1 pt-130">
    <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-60">
                    <h2 class="heading__subtitle">The Best Medical And General Practice Care!</h2>
                    <h3 class="heading__title">Providing Medical Care For The Sickest In Our Community.</h3>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <!-- service item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service__icon">
                        <i class="fas fa-bed"></i>
                        <i class="fas fa-bed"></i>
                    </div><!-- /.service__icon -->
                    <div class="service__content">
                        <h4 class="service__title">Bed Availability</h4>
                        <p class="service__desc">
                        </p>
                        <ul class="list-items list-items-layout2 list-unstyled">
                            <li>Hospitals</li>
                            <li>Oxygen</li>
                            <li>Ventilator</li>
                        </ul>
                        <a href="bedAvailability.php" class="btn btn__secondary btn__outlined btn__rounded">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service__content -->
                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service__icon">
                        <i class="icon-heart"></i>
                        <i class="icon-heart"></i>
                    </div><!-- /.service__icon -->
                    <div class="service__content">
                        <h4 class="service__title">Oxygen Cylinder Availability</h4>
                        <p class="service__desc">
                        </p>
                        <ul class="list-items list-items-layout2 list-unstyled">
                            <li>NGO's </li>
                            <li>Individual's</li>
                        </ul>
                        <a href="oxygen.php" class="btn btn__secondary btn__outlined btn__rounded">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service__content -->
                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #3 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service__icon">
                        <!-- <i class="icon-microscope"></i>
                <i class="icon-microscope"></i> -->
                        <i class="fas fa-ambulance"></i>
                        <i class="fas fa-ambulance"></i>
                    </div><!-- /.service__icon -->
                    <div class="service__content">
                        <h4 class="service__title">Ambulance Services</h4>
                        <p class="service__desc">
                        </p>
                        <ul class="list-items list-items-layout2 list-unstyled">
                            <li>Pickup From Home</li>
                            <li>Emergency Availability</li>
                            <li>Available on Call</li>
                        </ul>
                        <a href="ambulance.php" class="btn btn__secondary btn__outlined btn__rounded">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service__content -->
                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #4 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service__icon">
                        <!-- <i class="icon-dropper"></i>
                <i class="icon-dropper"></i> -->
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-globe-asia"></i>
                    </div><!-- /.service__icon -->
                    <div class="service__content">
                        <h4 class="service__title">Burials and Ceramation</h4>
                        <p class="service__desc">
                        </p>
                        <ul class="list-items list-items-layout2 list-unstyled">
                            <li>Hospitals</li>
                            <li>Oxygen</li>
                            <li>Ventilator</li>
                        </ul>
                        <a href="burials.php" class="btn btn__secondary btn__outlined btn__rounded">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service__content -->
                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #5 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service__icon">
                        <i class="icon-heart3"></i>
                        <i class="icon-heart3"></i>
                    </div><!-- /.service__icon -->
                    <div class="service__content">
                        <h4 class="service__title">Plasma Therapy</h4>
                        <p class="service__desc">
                        </p>
                        <ul class="list-items list-items-layout2 list-unstyled">
                            <li>Donation</li>
                            <li>Plasma Request</li>
                            <li>Volunteers</li>
                        </ul>
                        <a href="plasma.php" class="btn btn__secondary btn__outlined btn__rounded">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service__content -->
                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #6 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service__icon">
                        <!-- <i class="icon-heart2"></i>
                        <i class="icon-heart2"></i> -->
                        <i class="icon-doctor"></i>
                        <i class="icon-doctor"></i>
                    </div><!-- /.service__icon -->
                    <div class="service__content">
                        <h4 class="service__title">Doctors Assistance</h4>
                        <p class="service__desc">
                        </p>
                        <ul class="list-items list-items-layout2 list-unstyled">
                            <li>Hospitals</li>
                            <li>Oxygen</li>
                            <li>Ventilator</li>
                        </ul>
                        <a href="doctor.php" class="btn btn__secondary btn__outlined btn__rounded">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service__content -->
                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #7 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service__icon">
                        <i class="icon-heart1"></i>
                        <i class="icon-heart1"></i>
                    </div><!-- /.service__icon -->
                    <div class="service__content">
                        <h4 class="service__title">COVID-19 Free Testing</h4>
                        <p class="service__desc">
                        </p>
                        <ul class="list-items list-items-layout2 list-unstyled">
                            <li>Hospitals</li>
                            <li>NGO's</li>
                            <li>Volunteers</li>
                        </ul>
                        <a href="testingCenter.php" class="btn btn__secondary btn__outlined btn__rounded">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service__content -->
                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #8 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service__icon">
                        <i class="icon-heart3"></i>
                        <i class="icon-heart3"></i>
                    </div><!-- /.service__icon -->
                    <div class="service__content">
                        <h4 class="service__title">Diagnostics</h4>
                        <p class="service__desc">
                        </p>
                        <ul class="list-items list-items-layout2 list-unstyled">
                            <li>Diagnostics</li>
                            <li>Plasma Diagnostics</li>
                            <li>Diagnostics</li>
                        </ul>
                        <a href="diagnostic.php" class="btn btn__secondary btn__outlined btn__rounded">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service__content -->
                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #9 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service__icon">
                        <!-- <i class="icon-heart3"></i>
                <i class="icon-heart3"></i> -->
                        <i class="fas fa-home"></i>
                        <i class="fas fa-home"></i>
                    </div><!-- /.service__icon -->
                    <div class="service__content">
                        <h4 class="service__title">Home Service</h4>
                        <p class="service__desc">
                        </p>
                        <ul class="list-items list-items-layout2 list-unstyled">
                            <li>Donation</li>
                            <li>Plasma Request</li>
                            <li>Volunteers</li>
                        </ul>
                        <a href="homeService.php" class="btn btn__secondary btn__outlined btn__rounded">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service__content -->
                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #10 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service__icon">
                        <!-- <i class="icon-heart3"></i>
                <i class="icon-heart3"></i> -->
                        <i class="fas fa-thermometer"></i>
                        <i class="fas fa-thermometer"></i>
                    </div><!-- /.service__icon -->
                    <div class="service__content">
                        <h4 class="service__title">Vaccine Awareness</h4>
                        <p class="service__desc">
                        </p>
                        <ul class="list-items list-items-layout2 list-unstyled">
                            <li>Vaccine Center</li>
                            <li>Second Dose</li>
                            <li>Faq's</li>
                        </ul>
                        <a href="vaccineAwareness.php" class="btn btn__secondary btn__outlined btn__rounded">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service__content -->
                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service__icon">
                        <!-- <i class="icon-heart3"></i>
                <i class="icon-heart3"></i> -->
                        <i class="fas fa-thermometer"></i>
                        <i class="fas fa-thermometer"></i>
                    </div><!-- /.service__icon -->
                    <div class="service__content">
                        <h4 class="service__title">Medicine Remedesvir</h4>
                        <p class="service__desc">
                        </p>
                        <ul class="list-items list-items-layout2 list-unstyled">
                            <li>Medicals</li>
                            <li>Locality</li>
                            <li>Faq's</li>
                        </ul>
                        <a href="medicine.php" class="btn btn__secondary btn__outlined btn__rounded">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service__content -->
                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->





            <!-- end of services -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Services Layout 1 -->

<!-- ==========================
        contact layout 3
    =========================== -->
<section class="contact-layout3 bg-overlay bg-overlay-primary-gradient pb-60">
    <div class="bg-img"><img src="assets/images/banners/3.jpg" alt="banner"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7">
                <div class="contact-panel mb-50">
                    <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="contact-panel__title">Do Donations</h4>
                                <p class="contact-panel__desc mb-30">Please feel welcome to contact our friendly
                                    reception staff
                                    with any general or medical enquiry. Our doctors will receive or return any urgent
                                    calls.
                                </p>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <i class="icon-widget form-group-icon"></i>
                                    <select class="form-control">
                                        <option value="0">Choose Clinic</option>
                                        <option value="1">Pathology Clinic</option>
                                        <option value="2">Pathology Clinic</option>
                                    </select>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-news form-group-icon"></i>
                                    <input type="text" class="form-control" placeholder="Name" id="contact-name"
                                        name="contact-name" required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-email form-group-icon"></i>
                                    <input type="email" class="form-control" placeholder="Email" id="contact-email"
                                        name="contact-email" required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <i class="icon-phone form-group-icon"></i>
                                    <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                                        name="contact-phone" required>
                                </div>
                            </div><!-- /.col-lg-4 -->
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group form-group-date">
                                    <i class="icon-calendar form-group-icon"></i>
                                    <input type="date" class="form-control" id="contact-date" name="contact-date"
                                        required>
                                </div>
                            </div><!-- /.col-lg-4 -->
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group form-group-date">
                                    <i class="icon-clock form-group-icon"></i>
                                    <input type="time" class="form-control" id="contact-time" name="contact-time"
                                        required>
                                </div>
                            </div><!-- /.col-lg-4 -->
                            <div class="col-12">
                                <button type="submit"
                                    class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                    <span>Contact For DOnations</span> <i class="icon-arrow-right"></i>
                                </button>
                                <div class="contact-result"></div>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                </div>
            </div><!-- /.col-lg-7 -->
            <div class="col-sm-12 col-md-12 col-lg-5">
                <div class="heading heading-light mb-30">
                    <h3 class="heading__title mb-30">Help Patients</h3>
                    <p class="heading__desc">Our staff strives to make each interaction with patients clear, concise,
                        and
                        inviting. Support the important work of Medicsh Hospital by making a much-needed donation today.
                    </p>
                </div>

                <div class="text__block">
                    <p class="text__block-desc color-white font-weight-bold">We Have comprehensive list of NGO's for
                        helpless families and individuals.</p>
                    <div class="sinature color-white">
                        <span class="font-weight-bold">Martin Qube</span><span>, Medcity Manager</span>
                    </div>
                </div><!-- /.text__block -->
                <div class="slick-carousel clients-light mt-20"
                    data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                    <div class="client">
                        <img src="assets/images/clients/1.png" alt="client">
                        <img src="assets/images/clients/1.png" alt="client">
                    </div><!-- /.client -->
                    <div class="client">
                        <img src="assets/images/clients/2.png" alt="client">
                        <img src="assets/images/clients/2.png" alt="client">
                    </div><!-- /.client -->
                    <div class="client">
                        <img src="assets/images/clients/3.png" alt="client">
                        <img src="assets/images/clients/3.png" alt="client">
                    </div><!-- /.client -->
                    <div class="client">
                        <img src="assets/images/clients/4.png" alt="client">
                        <img src="assets/images/clients/4.png" alt="client">
                    </div><!-- /.client -->
                    <div class="client">
                        <img src="assets/images/clients/5.png" alt="client">
                        <img src="assets/images/clients/5.png" alt="client">
                    </div><!-- /.client -->
                    <div class="client">
                        <img src="assets/images/clients/6.png" alt="client">
                        <img src="assets/images/clients/6.png" alt="client">
                    </div><!-- /.client -->
                    <div class="client">
                        <img src="assets/images/clients/7.png" alt="client">
                        <img src="assets/images/clients/7.png" alt="client">
                    </div><!-- /.client -->
                </div><!-- /.carousel -->
            </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact layout 3 -->
<!-- ========================
     gallery
    =========================== -->
<section class="gallery pt-100 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="slick-carousel"
                    data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                    <a class="popup-gallery-item" href="assets/images/gallery/1.jpg">
                        <img src="assets/images/gallery/1.jpg" alt="gallery img">
                    </a>
                    <a class="popup-gallery-item" href="assets/images/gallery/2.jpg">
                        <img src="assets/images/gallery/2.jpg" alt="gallery img">
                    </a>
                    <a class="popup-gallery-item" href="assets/images/gallery/3.jpg">
                        <img src="assets/images/gallery/3.jpg" alt="gallery img">
                    </a>
                    <a class="popup-gallery-item" href="assets/images/gallery/4.jpg">
                        <img src="assets/images/gallery/4.jpg" alt="gallery img">
                    </a>
                    <a class="popup-gallery-item" href="assets/images/gallery/5.jpg">
                        <img src="assets/images/gallery/5.jpg" alt="gallery img">
                    </a>
                    <a class="popup-gallery-item" href="assets/images/gallery/6.jpg">
                        <img src="assets/images/gallery/6.jpg" alt="gallery img">
                    </a>
                </div><!-- /.gallery-images-wrapper -->
            </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.gallery 2 -->
<?php include('./commonFiles/footer.php') ?>