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
                                <h2 class="slide__title">Oops 404 error page<br />You can go to home page <a href="index">Here</a><br />Or search below</h2>
                                <!-- <p  class="slide__title2"><span class="show-only-in-mob">Lets fight the pandemic together</span> -->
                                <!-- <span class="show-only-in-web">Lets fight the <br />pandemic together</span> -->
                                </p>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-xl-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->

        </div><!-- /.carousel -->
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
        
    </section>
    </section><!-- /.slider -->



    <?php include('./commonFiles/footer.php') ?>