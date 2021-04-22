<?php include('./commonFiles/header.php') ?>

<!-- ========================
   page title 
=========================== -->
<section class="page-title page-title-layout1 bg-overlay">
    <div class="bg-img"><img src="assets/images/page-titles/1.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <h1 class="pagetitle__heading">FAQs About COVID<br />Covid Support Belgaum Group:</h1>
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

<!-- ======================
Features Layout 1
========================= -->
<section class="features-layout1 pt-130 pb-50 mt--90">
    <div class="bg-img"><img src="assets/images/backgrounds/1.jpg" alt="background"></div>
    <div class="container">
        <div class="row mb-40">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h4 class="">Frequently Asked Questions:
                </h4>
                <!-- <div class="d-flex flex-wrap align-items-center mt-40 mb-30">
          <a href="appointment.html" class="btn btn__primary btn__rounded mr-30">
            <span>Make Appointment</span>
            <i class="icon-arrow-right"></i>
          </a>
          <a href="#" class="btn btn__secondary btn__link">
            <i class="icon-arrow-right icon-filled"></i>
            <span>Our Core Values</span>
          </a>
        </div> -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row" id="accordianFAQ">
            <!-- Feature item #1 -->
            <!-- <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="feature-item">
                    <div class="feature__content">
                        <div class="feature__icon">
                            <i class="icon-heart"></i>
                            <i class="icon-heart feature__overlay-icon"></i>
                        </div>
                        <h4 class="feature__title">What is COvid-19</h4>
                        <p>COVID-19 is a new disease, caused by a novel (or new) coronavirus that has not previously
                            been seen in humans. Because it is a new virus, scientists are learning more each day.
                            Although most people who have COVID-19 have mild symptoms, COVID-19 can also cause severe
                            illness and even death. Some groups, including older adults and people who have certain
                            underlying medical conditions, are at increased risk of severe illness.</p>
                    </div> -->
            <!-- </div>/.feature-item -->
            <!-- </div>/.col-lg-3 -->
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn__primary" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is COVID-19?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                COVID-19 is a new disease, caused by a novel (or new) coronavirus that has not
                                previously been seen in humans. Because it is a new virus, scientists are learning more
                                each day. Although most people who have COVID-19 have mild symptoms, COVID-19 can also
                                cause severe illness and even death. Some groups, including older adults and people who
                                have certain underlying medical conditions, are at increased risk of severe illness.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn__primary collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Why its called COVID-19?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                On February 11, 2020 the World Health Organization announced an official name for the
                                disease that is causing the 2019 novel coronavirus outbreak, first identified in Wuhan
                                China. The new name of this disease is coronavirus disease 2019, abbreviated as
                                COVID-19. In COVID-19, “CO” stands for corona, “VI” for virus, and ”D” for disease.
                                Formerly, this disease was referred to as “2019 novel coronavirus” or “2019-nCoV.”
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn__primary collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
                                    Does mask use help determine if someone is considered a close contact?
                                </button>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                A person is still considered a close contact even if one or both people wore a mask when
                                they were together.

                                Masks work best when everyone wears one. However, masks are not 100% effective at
                                preventing spread of COVID-19, and the type of masks used and whether or not they are
                                used consistently and correctly varies throughout the general population. Therefore,
                                mask use is not considered when determining whether someone is a close contact during
                                case investigation and contact tracing.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn__primary collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse5" aria-expanded="false" aria-controls="collapseTwo">
                                    what is the Difference between cleaning and disinfecting?
                                </button>
                            </h2>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Cleaning with soap and water or a detergent removes germs, dirt, and impurities from
                                surfaces. It lowers the risk of spreading infection. Disinfecting with a household
                                disinfectant on List N: Disinfectants for Coronavirus (COVID-19)external icon kills
                                germs on the surface. By disinfecting or killing germs on a surface after cleaning the
                                surface, it can further lower the risk of spreading infection. For more information
                                review cleaning and disinfection recommendations for facilities and homes.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn__primary collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    who is COnsidered a close contact of someone with COVID-19?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                For COVID-19, a close contact is anyone who was within 6 feet of an infected person for
                                a total of 15 minutes or more over a 24-hour period (for example, three individual
                                5-minute exposures for a total of 15 minutes). An infected person can spread COVID-19
                                starting from 2 days before they have any symptoms (or, if they are asymptomatic, 2 days
                                before their specimen that tested positive was collected), until they meet the criteria
                                for discontinuing home isolation.
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div><!-- /.row -->

    </div><!-- /.container -->
</section><!-- /.Features Layout 1 -->
<?php include('./commonFiles/footer.php') ?>