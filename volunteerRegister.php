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
    <div class="bg-img"><img src="assets/images/sliders/11.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pagetitle__heading">Volunteer Registration</h1>
                <?php include('./commonFiles/covid.php') ?>
                
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<section class="blog-grid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-11 col-sm-10">
            <?php include('./commonFiles/plasmaDonate.php') ?>
                <div class="table-responsive">
                    <table id="tablepress-1" class="doctors-timetable doctors-padding w-100">
                        <tbody class="row-hover">
                            <tr class="row-1 odd">
                                <td colspan="6" class="column-1">
                                    <h3>List of volunteers in Belgaum</h3>
                                </td>
                            </tr>
                            <tr class="row-2 even">
                                <td class="column-1"><strong>Sl. No</strong></td>
                                <td class="column-2"><strong>Date</strong></td>
                                <td class="column-3"><strong>Name</strong></td>
                                <td class="column-4"><strong>City</strong></td>
                                <td class="column-5"><strong>Amount Donated</strong></td>
                                <td class="column-6"></td>
                            </tr>
                            <tr class="row-3 odd">
                                <td class="column-1">1</td>
                                <td class="column-2">30.07.2020</td>
                                <td class="column-3">Mohan</td>
                                <td class="column-4">Bangalore</td>
                                <td class="column-5">Rs.10000/-</td>
                                <td class="column-6"></td>
                            </tr>
                            <tr class="row-4 even">
                                <td class="column-1">2</td>
                                <td class="column-2">02.08.2020</td>
                                <td class="column-3">Binu Mathews</td>
                                <td class="column-4">Bangalore</td>
                                <td class="column-5">Rs.2500/-</td>
                                <td class="column-6"></td>
                            </tr>
                            <tr class="row-5 odd">
                                <td class="column-1">3</td>
                                <td class="column-2">09.08.2020</td>
                                <td class="column-3">Mohammed Iqbal</td>
                                <td class="column-4">Bangalore</td>
                                <td class="column-5">Rs.25000/-</td>
                                <td class="column-6"></td>
                            </tr>
                            <tr class="row-6 even">
                                <td class="column-1">4</td>
                                <td class="column-2">10.10.2020</td>
                                <td class="column-3">Naveen Mahadevaiah</td>
                                <td class="column-4">Bangalore</td>
                                <td class="column-5">Rs.5000/-</td>
                                <td class="column-6"></td>
                            </tr>
                            <tr class="row-7 odd">
                                <td class="column-1">5</td>
                                <td class="column-2">12.10.2020</td>
                                <td class="column-3">Dipak Dhal</td>
                                <td class="column-4">Bangalore</td>
                                <td class="column-5">Rs.5000/-</td>
                                <td class="column-6"></td>
                            </tr>
                            <tr class="row-8 even">
                                <td class="column-1">6</td>
                                <td class="column-2">26.10.2020</td>
                                <td class="column-3">Reshma Sultana</td>
                                <td class="column-4">Bangalore</td>
                                <td class="column-5">Rs.20,000/-</td>
                                <td class="column-6"></td>
                            </tr>
                            <tr class="row-9 odd">
                                <td class="column-1"></td>
                                <td class="column-2"></td>
                                <td class="column-3"></td>
                                <td class="column-4">Total Received</td>
                                <td class="column-5">Rs.67500/-</td>
                                <td class="column-6"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('./commonFiles/footer.php') ?>