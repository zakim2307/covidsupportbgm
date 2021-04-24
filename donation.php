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
<section class="page-title page-title-layout5 bg-overlay">
    <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pagetitle__heading">Covid Donations and Payment Details</h1>
                <?php //include('./commonFiles/covid.php') ?>
                
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<section>
    <div class="container">
        <div class="row">
            <h3>Donations Received for COVID-19 Poor Patients Fund</h3>
            <div class="col-12 mb-50">
                <div class="table-responsive">
                    <table class="doctors-timetable w-100">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>city</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td class="event">
                                    <a class="event__header">23/04/2021</a>
                                    
                                </td>
                                <td class="event">
                                    <a class="event__header">MR Narayan Krishna</a>
                                </td>
                                <td class="event">
                                <a class="event__header">Belgaum</a>
                                </td>
                                
                                <td class="event">
                                    <a class="event__header">5000</a>
                                </td>
                            </tr>
                            <tr ><td class="event" colspan="4">Total</td ><td class="event" >5000</td></tr>
                            


                        </tbody>
                    </table>
                </div>
            </div><!-- /.col-12 -->
            <h3>Beneficieries of COVID-19 Poor & Needy Patients Fund</h3>

            <div class="col-12">
                <div class="table-responsive">
                    <table class="doctors-timetable w-100">
                        <thead>
                            <tr>
                                <th>Sl.no</th>
                                <th>Date</th>
                                <th>Patient Name</th>
                                <th>Payment Towards</th>
                                <th>Paid To</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td class="event">
                                    <a class="event__header">23/4/2021</a>
                                </td>
                                <td class="event">
                                    <a class="event__header">MR Narayan Krishna</a>
                                </td>
                                <td class="event">
                                    <a class="event__header">Oxygen</a>
                                </td>
                                <td class="event">
                                    <a class="event__header">Al Iqra</a>

                                </td>
                                <td class="event">
                                    <a class="event__header">10000</a>
                                </td>
                            </tr>
                            <tr ><td class="event" colspan="5">Total</td ><td class="event" >5000</td></tr>
                            <tr ><td class="event" colspan="5">Spent / Balance Amount</td ><td class="event" >5000</td></tr>



                        </tbody>
                    </table>
                </div>
            </div><!-- /.col-12 -->
        </div>
    </div>
</section>

<section class="contact-layout3 bg-overlay bg-overlay-primary-gradient pb-60">
        <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="contact-panel mb-50">
                        <form class="contact-panel__form" method="post" action="assets/php/contact.php"
                            id="contactForm">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Drop us a note to donate</h4>
                                    <p class="contact-panel__desc mb-30">Please feel welcome to contact our
                                        friendly
                                        reception staff
                                        with any enquiry pertaining to donations.
                                    </p>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-news form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Name" id="query-name"
                                            name="contact-name" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-phone form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Phone" id="query-Phone"
                                            name="contact-phone" required>
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                        <i class="icon-email form-group-icon"></i>
                                        <input type="email" class="form-control" placeholder="Email" id="query-email"
                                            name="contact-email" required>
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group form-group-date">
                                        <!-- <i class="fas form-group-icon"></i> -->
                                        <input type="textarea" rows="3" class="form-control" placeholder="Message" id="query-message" name="contact-message"
                                            required>
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-12">
                                    <button type="submit"
                                        class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                        <span>Request Callback</span> <i class="icon-arrow-right"></i>
                                    </button>
                                    <div class="contact-result"></div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div>
                </div><!-- /.col-lg-7 -->
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="heading heading-light mb-30">
                        <h3 class="heading__title mb-30">Helping Poor Patients !!!</h3>
                        <p class="heading__desc">Our staff strives to make each interaction with patients and Donor
                            clear,
                            concise, and
                            inviting. Support the important work of Medicsh Hospital by making a much-needed
                            donation
                            today.
                        </p>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="donation.php" class="btn btn__white btn__rounded mr-30">
                            <i class="fas fa-heart"></i> <span>Help the Needy</span>
                        </a>
                        <a class="video__btn video__btn-white popup-video" href="aboutCovid.php">
                            <div class="video__player">
                                <i class="fa fa-play"></i>
                            </div>
                            <span class="video__btn-title color-white">Our Work</span>
                        </a>
                    </div>
                    <!-- <div class="text__block">
                        <p class="text__block-desc color-white font-weight-bold">We provide a comprehensive
                            range of
                            plans for
                            families and individuals at every stage of life, with annual limits ranging from
                            £1.5m to
                            unlimited.</p>
                        <div class="sinature color-white">
                            <span class="font-weight-bold">Martin Qube</span><span>, Medcity Manager</span>
                        </div>
                    </div>/.text__block -->
                    
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 3 -->

<?php include('./commonFiles/footer.php') ?>