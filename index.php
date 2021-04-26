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

    <script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    document.getElementById("livesearch").innerHTML="";
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border=" 1px solid #21cdc0f2;";
    }
  }
  xmlhttp.open("GET","./commonFiles/livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>

   
    <?php include('./commonFiles/header.php') ?>

    <!-- ============================
        Slider
    ============================== -->
    <section class="slider">
        <div class="slick-carousel m-slides-0"
            data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
            <div class="slide-item align-v-h">
                <div class="bg-img"><img src="assets/images/sliders/mainBanner.png" alt="slide img"></div>
                <div class="container">
                    <div class="row align-items-right">
                        <div class="col-sm-4 col-md-6 col-lg-12">
                            <div class="slide__content">
                                <h2 class="slide__title">Rise Against<br />COVID</h2>
                                <p  class="slide__title2"><span class="show-only-in-mob">Lets fight the pandemic together</span>
                                <span class="show-only-in-web">Lets fight the <br />pandemic together</span>
                                </p>
                                <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
                                    <!-- feature item #1 -->
                                    <li class="feature-item">
                                        <div class="feature__icon">
                                            <a href="#">
                                                <i class="fas fa-virus"></i>
                                                <h2 class="feature__title text-white">12000</h2>
                                            </a>
                                        </div>
                                        <h2 class="feature__title">Confirmed</h2>
                                    </li><!-- /.feature-item-->
                                    <!-- feature item #2 -->
                                    <li class="feature-item">
                                        <div class="feature__icon">
                                            <a href="#">
                                                <i class="fas fa-head-side-virus"></i>
                                                <h2 class="feature__title text-white">1000</h2>
                                            </a>

                                        </div>
                                        <h2 class="feature__title">Active</h2>
                                    </li><!-- /.feature-item-->
                                     <!-- feature item #4 -->
                                     <span class="show-only-in-web"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                                     <li class="feature-item">
                                        <div class="feature__icon">
                                            <a href="#">
                                                <i class="fas fa-virus-slash"></i>
                                                <h2 class="feature__title text-white">10500</h2>
                                            </a>
                                        </div>
                                        <h2 class="feature__title">Cured</h2>
                                    </li><!-- /.feature-item-->
                                    <!-- feature item #3 -->
                                    <span class="show-only-in-web"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                     
                                    <li class="feature-item">
                                        <div class="feature__icon">
                                            <a href="#">
                                                <i class="fas fa-viruses"></i>
                                                <h2 class="feature__title text-white">500</h2>
                                            </a>
                                        </div>
                                        <h1 class="feature__title">Deceased</h1>
                                        
                                    </li><!-- /.feature-item-->
                                   
                                </ul><!-- /.features-list -->
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-xl-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->

        </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <?php // include('./commonFiles/contact-info.php') ?>


    <div class='show-only-in-web'>
        <?php //include('./commonFiles/contact-info.php') ?>
    </div>

    <!-- ======================
     Work Process 
    ========================= -->
    <section class="work-process work-process-carousel pt-130 pb-0 bg-overlay bg-overlay-secondary">
        <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">  
                      <form class="header-topbar__search">
                                <div>
                                    <form>
                                        <input type="text" onkeyup="showResult(this.value)" class="form-control" placeholder="Search for Oxygen Cylinders, Testing Centers, Bed Availability...">
                                        <div class="livesearch" id="livesearch"></div>
                                    </form>
                                </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="container mt-50" id="services">
            <div class="row heading-layout2">
                <div class="col-12">
                    <h2 class="heading__subtitle color-primary">Caring for humanity. 
                    </h2>
                </div><!-- /.col-12 -->
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
                    <h3 class="heading__title color-white">PREPARE, DO NOT PANIC! 
                    </h3>
                </div><!-- /.col-xl-5 -->
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-1">
                    <p class="heading__desc font-weight-bold color-gray mb-40">
                    COVID Support Belgaum, has curated all the important information along with the services being offered by various NGOs in Belgaum.
                    </p>
                </div>
                <!-- /.col-xl-6 -->
            </div>
            <!-- /.row -->
        </div>

        
        
        <?php include('./commonFiles/services.php') ?>
        <div class="cta bg-light-blue">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <img src="assets/images/icons/alert2.png" alt="alert">
                    </div><!-- /.col-lg-2 -->
                    <div class="col-sm-12 col-md-7 col-lg-7">
                        <h4 class="cta__title">True COVIDcare For Your Family!</h4>
                        <p class="cta__desc">Serve the community by improving the quality of life through better
                            health.
                            We have
                            put protocols to protect our patients and staff while continuing to provide
                            medically
                            necessary care.
                        </p>
                    </div><!-- /.col-lg-7 -->
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <a href="aboutCovid" class="btn btn__primary btn__secondary-style2 btn__rounded">
                            <span>Know More About COVID-19</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.cta -->
    </section><!-- /.Work Process -->

    <?php include('./commonFiles/ngoList.php') ?>


    <?php include('./commonFiles/aboutus.php') ?>

    <!-- ======================
      NGO's
    ========================= -->
    
    <?php include('./commonFiles/ngoCarousel.php') ?>

    <!-- ======================
      Team
    ========================= -->

    <?php include('./commonFiles/team2.php') ?>
    <div class="mt-50"></div>
    <?php include('./commonFiles/vacAwareDrive.php') ?>

    <!-- ==========================
        contact layout 3
    =========================== -->
    <section class="contact-layout3 bg-overlay bg-overlay-primary-gradient pb-60">
        <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="contact-panel mb-50">
                        <form class="contact-panel__form" method="post" action="assets/php/contact"
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
                        <a href="donation" class="btn btn__white btn__rounded mr-30">
                            <i class="fas fa-heart"></i> <span>Help the Needy</span>
                        </a>
                        <a class="video__btn video__btn-white popup-video" href="aboutCovid">
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

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid pb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-40">
                        <h2 class="heading__subtitle">Latest COVID-19 news</h2>
                        <h3 class="heading__title">Recent News</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <!-- Post Item #1 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="post__img">
                            <a href="news1">
                                <img src="assets/images/blog/grid/1.jpg" alt="post image" loading="lazy">
                            </a>
                        </div><!-- /.post__img -->
                        <div class="post__body">
                            <div class="post__meta-cat">
                                <a href="#">Mental Health</a>
                            </div><!-- /.blog-meta-cat -->
                            <div class="post__meta d-flex">
                                <span class="post__meta-date">Jan 30, 2022</span>
                                <a class="post__meta-author" href="news1">Martin King</a>
                            </div>
                            <h4 class="post__title"><a href="news1">6 Tips to Protect Your Mental Health When You’re
                                    Sick</a></h4>

                            <p class="post__desc">It’s normal to feel anxiety, worry and grief any time you’re
                                diagnosed
                                with a
                                condition that’s certainly true if you test positive for COVID-19, or are
                                presumed to be
                                positive...
                            </p>
                            <a href="news1" class="btn btn__secondary btn__link btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.post__body -->
                    </div><!-- /.post-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Post Item #2 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="post__img">
                            <a href="news1">
                                <img src="assets/images/blog/grid/2.jpg" alt="post image" loading="lazy">
                            </a>
                        </div><!-- /.post__img -->
                        <div class="post__body">
                            <div class="post__meta-cat">
                                <a href="#">Infectious</a><a href="#">Tips</a>
                            </div><!-- /.blog-meta-cat -->
                            <div class="post__meta d-flex">
                                <span class="post__meta-date">Jan 30, 2022</span>
                                <a class="post__meta-author" href="#">John Ezak</a>
                            </div>
                            <h4 class="post__title"><a href="news1">Unsure About Wearing a Face Mask? Here’s How and
                                    Why</a>
                            </h4>
                            <p class="post__desc">That means that you should still be following any
                                shelter-in-place
                                orders in your
                                community. But when you’re venturing out to the grocery store, pharmacy or
                                hospital..
                            </p>
                            <a href="news1" class="btn btn__secondary btn__link btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.post__body -->
                    </div><!-- /.post-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Post Item #3 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="post__img">
                            <a href="news1">
                                <img src="assets/images/blog/grid/3.jpg" alt="post image" loading="lazy">
                            </a>
                        </div><!-- /.post__img -->
                        <div class="post__body">
                            <div class="post__meta-cat">
                                <a href="#">Life Style</a><a href="#">Nutrition</a>
                            </div><!-- /.blog-meta-cat -->
                            <div class="post__meta d-flex">
                                <span class="post__meta-date">Jan 28, 2022</span>
                                <a class="post__meta-author" href="#">Saul Wade</a>
                            </div>
                            <h4 class="post__title"><a href="news1">Tips for Eating Healthy When You’re Working From
                                    Home
                                </a></h4>

                            <p class="post__desc">It’s normal to feel anxiety, worry and grief any time you’re
                                diagnosed
                                with a
                                condition that’s certainly true if you test positive for COVID-19, or are
                                presumed to be
                                positive...
                            </p>
                            <a href="news1" class="btn btn__secondary btn__link btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.post__body -->
                    </div><!-- /.post-item -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog Grid -->

    <?php include('./commonFiles/footer.php') ?>