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
    <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <h1 class="pagetitle__heading">About Us<br />Covid Support Belgaum Group:</h1>
                <p class="pagetitle__desc">We are a group of highly trained doctors from UK (expatriate), NGO’s &
                    Civil Society members of
                    Belgaum with a mission to save Human lives & provide emergency services like Doctors assistant
                    for
                    minor & mild Covid symptoms (24/7), Oxygen Supply, medicines, diagnostics, Plasma therapy,
                    Ambulance & Burial to belgaumites.</p>
                <div class="d-flex flex-wrap align-items-center">
                    <a href="doctor.php" class="btn btn__primary btn__rounded mr-30">
                        <span>Find A Doctor</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <a href="services.php" class="btn btn__white btn__rounded">
                        <span>Our Services</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div>
            </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<?php include('./commonFiles/contact-info.php') ?>


<?php include('./commonFiles/imageGallery.php') ?>

<?php include('./commonFiles/videoGallery.php') ?>


<?php include('./commonFiles/footer.php') ?>