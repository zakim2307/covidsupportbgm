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
    <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pagetitle__heading">Hospital's Bed Availability</h1>
                <?php //include('./commonFiles/covid.php') ?>

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
                                <th>Sl.no</th>
                                <th>Name</th>
                                <th>Incharge</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Beds</th>
                                <th>Charged</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td class="event">
                                    <a class="event__header">KLE Hospital</a>
                                    <a class="event__header">Belgaum</a>
                                </td>
                                <td class="event">
                                    <a class="event__header">MR Narayan Krishna</a>
                                </td>
                                <td class="event">
                                    <a class="event__header">+91 8945672130</a>
                                </td>
                                <td class="event">
                                    <a class="event__header">Shivbasav Nagar</a>
                                    <a class="event__header">Belgaum</a>

                                </td>
                                <td class="event">
                                    <a class="event__header">5</a>
                                </td>
                                <td class="event">
                                    <a class="event__header">Free</a>
                                </td>
                                <td class="event">
                                    <a class="event__header">Availabile</a>
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