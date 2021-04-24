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
<section class="page-title page-title-layout5">
    <div class="bg-img"><img src="assets/images/sliders/mainBanner.png" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pagetitle__heading">Registerd NGOs and Individuals socialists in Belgaum</h1>
                <?php include('./commonFiles/covid.php') ?>
                <!-- <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    </ol>
                </nav> -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ========================
       Doctors Timetable
    ========================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="doctors-timetable w-100">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Name</th>
                                <th>About</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Available</th>
                                <th>Service</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td class="event">
                                    <a class="event__header" href="#">KLE Hospital</a>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">Dr. P. KORE</div>
                                </td>
                                <td class="event">
                                    <a class="event__header" href="#">MR Nara</a>
                                    <div class="event__type">KLE's institute</div>
                                    <div class="doctor__name">MBBS</div>
                                </td>
                                <td class="event">
                                    <a class="event__header" href="#">Phone No</a>
                                    <div class="event__type">+91 8945672130</div>
                                    <div class="doctor__name">Reception</div>
                                </td>
                                <td class="event">
                                    <a class="event__header" href="#">Ramdev hotel</a>
                                    <div class="event__type">Analysis</div>
                                    <div class="doctor__name">This that</div>
                                    <hr>
                                </td>
                                <td class="event">
                                    <a class="event__header" href="#">No of Beds</a>
                                    <div class="event__type">50</div>
                                    <div class="doctor__name">Whole Hospital</div>
                                </td>
                                <td class="event">
                                    <a class="event__header" href="#"></a>
                                    <div class="event__type">Free</div>
                                    <div class="doctor__name"></div>
                                </td>
                                <td class="event">
                                    <a class="event__header" href="#"></a>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name"></div>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Doctors Timetable  -->
<!-- ======================
    Features Layout 2
    ========================= -->


<?php include('./commonFiles/footer.php') ?>