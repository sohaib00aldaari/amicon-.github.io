<?php

$db = mysql_connect("localhost","admin","admin");
if (!$db) {
    die("Database connection failed miserably: " . mysql_error());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>amicon.com/home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Telivigala&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+SC&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arbutus+Slab">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"> 

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css?h=3166695f5111bb49984dab9ce0b4fc77">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=86a48fbcebe1af407b0f227719b239de">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets\css\styles.min.css">
    <link rel="stylesheet" href="assets\fonts\fontawesome5-overrides.min.css"/>
    <link rel=""/>
    <script src="stylesheet" href="assets\js\script.min.js"></script>
</head>
<body style="text-align: center;" data-bs-spy="scroll"><!-- Start: Landing Page - Parallax Background - Logo Heading -->
<div><!-- Start: Image Box -->
    <div id="img-2" class="img-2" src=url(/assets/img/bg1.jpg?h=c2d84f7eb5a670df9e223926fc168a79)>
        <!-- Start: #mainNav -->
        <nav class="navbar navbar-light navbar-expand-lg sticky-top" id="mainNav"
             style="width: auto;background: rgba(0,0,0,0.2);transform-style: preserve-3d;transform-origin: center;filter: brightness(100%);margin: auto;">
            <div class="container-fluid"><a class="navbar-brand"
                                            href="/assets/img/logoimage1.png?h=c3458b978be4f9f439f945b6b29248e5"><img
                    id="logoimage" src="/assets/img/logoimage1.png?h=c3458b978be4f9f439f945b6b29248e5"
                    style="margin-left: 25px;margin-right: 25px;"></a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarResponsive"
                        style="border-color: var(--bs-white);"><i class="fa fa-chevron-down"
                                                                  style="color: #ffffffbb;"></i></button>
                <div class="collapse navbar-collapse"
                     style="margin: auto;margin-left: auto;margin-right: auto;width: auto;text-align: center;"
                     id="navbarResponsive">
                    <ul class="navbar-nav"
                        style="margin: auto;margin-left: auto;margin-right: auto;width: auto;text-align: center;background: rgba(255,255,255,0);">
                        <li class="nav-item navitems"
                            style="width: auto;margin: auto;margin-right: 30px;margin-left: 30px;font-weight: bold;color: #000000;font-size: 22.4px;">
                            <a class="nav-link active nav-link" href="/amicon.html/index.html"
                               style="color: var(--bs-light);">HOME</a></li>
                        <li class="nav-item text-nowrap navitems"
                            style="width: auto;margin: auto;margin-right: 30px;margin-left: 30px;font-weight: bold;"><a
                                class="nav-link nav-link" href="/amicon.html/about.html" style="color: rgba(255,255,255,0.9);">ABOUT
                            US</a></li>
                        <li class="nav-item text-nowrap text-center navitems"
                            style="margin: auto;margin-right: 30px;margin-left: 30px;font-weight: bold;"><a
                                class="nav-link active" href="/amicon.html/project.html"
                                style="color: var(--bs-body-bg);">PROJECT</a></li>
                        <li class="nav-item text-nowrap text-center navitems"
                            style="margin: auto;margin-right: 30px;margin-left: 30px;font-weight: bold;"><a
                                class="nav-link active" href="/amicon.html/service.html"
                                style="color: var(--bs-body-bg);">SERVICE</a></li>
                        <li class="nav-item text-nowrap text-center navitems"
                            style="margin: auto;margin-right: 30px;margin-left: 30px;font-weight: bold;"><a
                                class="nav-link active" href="#contact " style="color: var(--bs-body-bg);">CONTACT
                            US</a></li>
                    </ul>
                </div>
            </div>
        </nav><!-- End: #mainNav --><img data-aos="fade" data-aos-duration="2500" data-aos-delay="700" id="logoimage1"
                                         class="img-2"
                                         src="/assets/img/logoimage1.png?h=c3458b978be4f9f439f945b6b29248e5"></div>
    <!-- End: Image Box --></div><!-- End: Landing Page - Parallax Background - Logo Heading -->
<!-- Start: Section Title -->
<div class="text-center text-sm-start text-md-start text-lg-center text-xl-start text-xxl-center d-flex align-items-center title-div"
     data-bss-hover-animate="pulse"
     style="margin: auto;margin-top: 15px;width: auto;background: rgba(255,255,255,0);font-weight: bold;margin-right: auto;margin-bottom: 15px;padding-right: 10px;padding-left: 10px;max-width: 500px;margin-left: auto;min-width: 200px;">
    <h1 style="color: rgb(0,0,0);margin-right: 0px;text-align: center;">AMICON'S STORY</h1></div>
<!-- End: Section Title --><!-- Start: responsive-blog-card-slider -->
<div class="blog-slider">
    <div class="blog-slider__wrp swiper-wrapper">
        <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img"><img
                    src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759872/kuldar-kalvik-799168-unsplash.jpg">
            </div>
            <div class="blog-slider__content"><span class="blog-slider__code">10-2-2022</span>
                <div class="blog-slider__title"><p>amicon it's one of legend consultincey&nbsp;</p></div>
                <div class="blog-slider__text"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae
                    voluptate repellendus magni illo ea animi?</p></div>
                <a class="blog-slider__button" href="/about.html">READ MORE</a></div>
        </div>
        <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img"><img
                    src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759872/kuldar-kalvik-799168-unsplash.jpg">
            </div>
            <div class="blog-slider__content"><span class="blog-slider__code">26 December 2019</span>
                <div class="blog-slider__title"><p>Lorem Ipsum Dolor</p></div>
                <div class="blog-slider__text"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae
                    voluptate repellendus magni illo ea animi?</p></div>
                <a class="blog-slider__button" href="/about.html">READ MORE</a></div>
        </div>
        <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img"><img
                    src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759872/kuldar-kalvik-799168-unsplash.jpg">
            </div>
            <div class="blog-slider__content"><span class="blog-slider__code">26 December 2019</span>
                <div class="blog-slider__title"><p>Lorem Ipsum Dolor</p></div>
                <div class="blog-slider__text"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae
                    voluptate repellendus magni illo ea animi?</p></div>
                <a class="blog-slider__button" href="/about.html">READ MORE</a></div>
        </div>
    </div>
    <div class="blog-slider__pagination"></div>
</div><!-- End: responsive-blog-card-slider --><!-- Start: divider-text-middle -->
<div style="margin-top: -20px;text-align: center;font-family: Aclonica, sans-serif;font-size: 18px;"><h2
        class="divider-style"><span>Our service's</span></h2></div><!-- End: divider-text-middle -->
<!-- Start: animated-services -->
<section id="services" class="services" style="width: auto;">
    <div class="container-fluid section-title" style="padding-left: 0px;padding-right: 0px;width: auto;">
        <div class="text-center"><p class="d-inline-block" style="width: 50%;"><strong>Ut possimus qui ut temporibus
            culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</strong><br>&nbsp;
            &nbsp;&nbsp;</p></div>
        <div class="row d-inline-flex flex-row" style="margin: auto;width: auto;">
            <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
                 style="padding: 0px 0px;">
                <div class="font-monospace text-center border rounded-0 icon-box"
                     style="padding: 60px 0px;padding-right: 0px;padding-left: 0px;">
                    <div class="icon"><i class="fas fa-chart-line" style="margin-bottom: 15px;"></i><h4 class="title">
                        Monitoring &amp; Evaluation<br></h4>
                        <p class="description"
                           style="padding-right: 1px;padding-left: 1px;margin-right: 1px;margin-left: 1px;">Voluptatum
                            deleniti atque corrupti quos dolores et quas molestias excepturi<br>&nbsp; &nbsp; &nbsp;&nbsp;
                        </p></div>
                </div>
            </div>
            <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
                 style="padding-right: 0px;padding-left: 0px;">
                <div class="font-monospace text-center border rounded-0 icon-box"
                     style="padding-right: 0px;padding-left: 0px;">
                    <div class="icon"><i class="fas fa-search" style="margin-bottom: 15px;"></i><h4 class="title">Needs
                        Assessment</h4>
                        <p class="description"
                           style="padding-right: 1px;padding-left: 1px;margin-right: 1px;margin-left: 1px;">Voluptatum
                            deleniti atque corrupti quos dolores et quas molestias excepturi<br>&nbsp; &nbsp; &nbsp;&nbsp;
                        </p></div>
                </div>
            </div>
            <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
                 style="padding-right: 0px;padding-left: 0px;">
                <div class="font-monospace text-center border rounded-0 icon-box"
                     style="padding-right: 0px;padding-left: 0px;">
                    <div class="icon"><i class="fas fa-chart-pie" style="margin-bottom: 15px;"></i><h4 class="title">
                        Data Collection<br></h4>
                        <p class="description"
                           style="padding-right: 1px;padding-left: 1px;margin-right: 1px;margin-left: 1px;">Voluptatum
                            deleniti atque corrupti quos dolores et quas molestias excepturi<br>&nbsp; &nbsp; &nbsp;&nbsp;
                        </p></div>
                </div>
            </div>
            <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="font-monospace text-center border rounded-0 icon-box"
                     style="padding-right: 0px;padding-left: 0px;">
                    <div class="icon"><i class="fab fa-connectdevelop" style="margin-bottom: 15px;"></i><h4
                            class="title">Services and Departments<br></h4>
                        <p class="description"
                           style="padding-right: 1px;padding-left: 1px;margin-right: 1px;margin-left: 1px;">Voluptatum
                            deleniti atque corrupti quos dolores et quas molestias excepturi<br>&nbsp; &nbsp; &nbsp;&nbsp;
                        </p></div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End: animated-services --><!-- Start: Button - GIF Click - Black & White --><a
        class="btn btn-primary btn-lg border rounded-0" role="button" data-bss-hover-animate="pulse" id="button-1"
        style="background: var(--bs-gray-900);width: 400px;height: 50px;margin-bottom: 15px;" href="/service.html"><img
        style="width: 20px;height: 20px;transform: rotate(270deg) translateX(2px);"
        src="/assets/img/arrowwhite.gif?h=36f76d8c68d77c25e12911c846ae1819"><span><strong>DISCOVER MORE SERVICES</strong></span><img
        style="width: 20px;height: 20px;transform: rotate(90deg) translateX(-2px);"
        src="/assets/img/arrowwhite.gif?h=36f76d8c68d77c25e12911c846ae1819"></a>
<!-- End: Button - GIF Click - Black & White --><!-- Start: Section Title -->
<div class="title-div" style="margin-top: 10px;width: 320PX;"><h1 style="color: #111111;font-weight: bold;"><strong>Our
    Values</strong><br></h1></div><!-- End: Section Title --><!-- Start: Side By Side Section -->
<section class="index-howto-alt py-3">
    <div class="container-fluid"><h2 class="text-center mb-3">At Amicon , we prioritize???<br></h2>
        <div class="psd-line pos-rel" style="position: relative;">
            <div class="row" style="background: #000000;">
                <div class="col d-flex justify-content-center intro-card-2 p-5"
                     style="background: #fbfbfb;height: 231px;"><h2 class="grey-text d-none">??yelik Tipini Se??erek
                    Kay??????t Olun</h2><img
                        src="/assets/img/3d6b6e108350115.5fbbfc650c12d.gif?h=31360699751afd4d5c1ef94184be0e0e"
                        style="width: 250px;" width="250px" height="135px"></div>
                <div class="col-12 col-sm-6 d-flex flex-column justify-content-center p-5 psd-left1"
                     style="background: rgba(68,88,144,0.12);"><p class="font-monospace m-0 text-center text-sm-start"
                                                                  style="color: rgb(255,255,255);font-weight: bold;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mi nibh, tristique et sagittis in,
                    aliquet id metus. In eleifend et dolor eget tincidunt.<br></p></div>
            </div>
            <div class="row" style="background: #000000;">
                <div class="col-12 col-sm-6 d-flex flex-column justify-content-center p-5 psd-right1"><p
                        class="font-monospace m-0 text-center text-sm-end" style="color: #eaeaea;font-weight: bold;">
                    Etiam eget nulla ut elit placerat commodo. Etiam vestibulum consectetur quam eget pretium. Sed in
                    suscipit augue. Nunc venenatis porttitor enim a hendrerit.&nbsp;<br></p></div>
                <div class="col-12 col-sm-6 d-flex flex-row justify-content-center align-items-center intro-card-2 p-5"
                     style="background: #fbfbfb;"><img class="howto-img"
                                                       src="/assets/img/3d6b6e108350115.5fbbfc650c12d.gif?h=31360699751afd4d5c1ef94184be0e0e"
                                                       style="width: 250px;height: 135px;">
                    <h2 class="grey-text d-none">Neye ??htiyac??n??z Varsa Belirtin</h2></div>
            </div>
            <div class="row" style="background: #000000;">
                <div class="col-12 col-sm-6 d-flex flex-row justify-content-center align-items-center intro-card-3 p-5"
                     style="background: #fbfbfb;"><img class="howto-img"
                                                       src="/assets/img/3d6b6e108350115.5fbbfc650c12d.gif?h=31360699751afd4d5c1ef94184be0e0e"
                                                       style="width: 250px;height: 135px;">
                    <h2 class="grey-text d-none">Size Uygun Teklifi Se??in</h2></div>
                <div class="col-12 col-sm-6 d-flex flex-column justify-content-center p-5 psd-left2"><p
                        class="font-monospace m-0 text-center text-sm-start" style="color: #ffffff;font-weight: bold;">
                    Integer cursus tincidunt mauris, imperdiet bibendum augue dapibus tempor. Pellentesque rhoncus neque
                    erat. Nam at metus urna. Nullam rhoncus odio eu sem fermentum dictum.<br></p></div>
            </div>
            <div class="row" style="background: #000000;">
                <div class="col d-flex p-5 psd-right2"><p class="font-monospace m-0 text-center text-sm-end"
                                                          style="color: #ffffff;font-weight: bold;">Cras iaculis, eros
                    sit amet congue tincidunt, justo magna iaculis urna, quis aliquet tortor ipsum et purus. Vivamus
                    gravida tristique velit. Sed non mi at massa dignissim placerat.<br></p></div>
                <div class="col-12 col-sm-6 d-flex flex-row justify-content-center align-items-center intro-card-4 p-5"
                     style="background: #fbfbfb;"><img class="howto-img"
                                                       src="/assets/img/3d6b6e108350115.5fbbfc650c12d.gif?h=31360699751afd4d5c1ef94184be0e0e"
                                                       style="width: 250px;height: 135px;">
                    <h2 class="grey-text d-none">Piyasa Analizi Yapt??r??n</h2></div>
            </div>
        </div>
    </div><!-- Start: Animated numbers section -->
    <section id="contact" class="wrapper-numbers"
             style="height: 690px;background: #000000;margin-top: 0px;padding-top: 70px;" target="#contact">
        <div class="container-fluid">
            <div class="row countup text-center">
                <div class="col"><p style="font-size: 40PX;font-weight: bold;margin-top: -46px;">CONTACT US</p></div>
            </div>
        </div><!-- Start: number -->
        <div class="col column" style="padding: 20px 0px;margin-top: -15px;"><!-- Start: icon --><p><i
                class="fa fa-location-arrow" aria-hidden="true" style="font-size: 50px;"></i></p><!-- End: icon -->
            <!-- Start: Animated Number --><p><span class="font-monospace count"
                                                    style="font-size: 18px;padding-right: 1px;padding-left: 1px;">Address: Sofan St. Al Hasabah. Al Thawrah. Sana'a gov. YEMEN<br></span>
            </p><!-- End: Animated Number --></div><!-- End: number --><!-- Start: number -->
        <div class="col column" style="padding: 20px 0px;margin-top: -15px;"><!-- Start: icon --><p><i
                class="fa fa-mobile-phone" aria-hidden="true" style="font-size: 50px ;"></i></p><!-- End: icon -->
            <!-- Start: Animated Number --><p><span class="font-monospace count" style="font-size: 18px;"><br>Mobile: +967 (777) 767 981<br></span>
            </p><!-- End: Animated Number --></div><!-- End: number --><!-- Start: number -->
        <div class="col column" style="padding: 20px 0px;margin-top: -15px;"><!-- Start: icon --><p><i
                class="fa fa-phone" aria-hidden="true" style="font-size: 50px;"></i></p><!-- End: icon -->
            <!-- Start: Animated Number --><p><span class="font-monospace count replay" style="font-size: 18px;"><br>Phone: +967 01 326771<br></span>
            </p><!-- End: Animated Number --></div><!-- End: number --><!-- Start: number -->
        <div class="col column" style="padding: 20px 0px;margin-top: -15px;"><!-- Start: icon --><p><i
                class="fa fa-envelope-o" aria-hidden="true" style="font-size: 50px;"></i></p><!-- End: icon -->
            <!-- Start: Animated Number --><p></p><!-- End: Animated Number --><a class="font-monospace email"
                                                                                  id="email"
                                                                                  href="mailto:admin@amicon.com"
                                                                                  style="font-size: 18px;color: var(--bs-gray-100);">admin@amicon.com<br><br></a>
        </div><!-- End: number --></section><!-- End: Animated numbers section --><!-- Start: Section Title -->
    <div class="title-div"
         style="width: auto;color: rgb(255,255,255);background: rgb(0,0,0);height: 61px;margin-bottom: -17px;border-color: rgba(255,255,255,0);">
        <i class="fa fa-code" style="font-size: 34px;"></i>
        <h1>&nbsp;DONE BY TECH SOLVE&nbsp;</h1>
        <h1>&nbsp; <i class="fa fa-copyright" style="font-size: 25px;"></i>2022&nbsp;</h1></div>
    <!-- End: Section Title --></section><!-- End: Side By Side Section -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="/assets/js/script.min.js?h=4472c977900e3b64844befd949d8c4b5"></script>
</body>
</html>