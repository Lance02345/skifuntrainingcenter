@extends('layouts.skifun')
@section('content')
<body>
    
<style>
        .single_slider.slider_bg_1 {
    background-image: url(../img/banner/001.jpg);
    background-size: cover;
    background-position: center center;
}

.single_slider.slider_bg_2 {
    background-image: url(../img/banner/001.jpg);
    background-size: cover;
    background-position: center center;
}


/********** Template CSS **********/
:root {
    --primary: #FEA116;
    --light: #F1F8FF;
    --dark: #0F172B;
}

.ff-secondary {
    font-family: 'Pacifico', cursive;
}

.fw-medium {
    font-weight: 600 !important;
}

.fw-semi-bold {
    font-weight: 700 !important;
}

.back-to-top {
    position: fixed;
    display: none;
    right: 45px;
    bottom: 45px;
    z-index: 99;
}


/*** Spinner ***/
#spinner {
    opacity: 0;
    visibility: hidden;
    transition: opacity .5s ease-out, visibility 0s linear .5s;
    z-index: 99999;
}

#spinner.show {
    transition: opacity .5s ease-out, visibility 0s linear 0s;
    visibility: visible;
    opacity: 1;
}


/*** Button ***/
.btn {
    font-family: 'Nunito', sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: .5s;
}

.btn.btn-primary,
.btn.btn-secondary {
    color: #FFFFFF;
}

.btn-square {
    width: 38px;
    height: 38px;
}

.btn-sm-square {
    width: 32px;
    height: 32px;
}

.btn-lg-square {
    width: 48px;
    height: 48px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: normal;
    border-radius: 2px;
}


/*** Navbar ***/
.navbar-dark .navbar-nav .nav-link {
    position: relative;
    margin-left: 25px;
    padding: 35px 0;
    font-size: 15px;
    color: var(--light) !important;
    text-transform: uppercase;
    font-weight: 500;
    outline: none;
    transition: .5s;
}

.sticky-top.navbar-dark .navbar-nav .nav-link {
    padding: 20px 0;
}

.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link.active {
    color: var(--primary) !important;
}

.navbar-dark .navbar-brand img {
    max-height: 60px;
    transition: .5s;
}

.sticky-top.navbar-dark .navbar-brand img {
    max-height: 45px;
}

@media (max-width: 991.98px) {
    .sticky-top.navbar-dark {
        position: relative;
    }

    .navbar-dark .navbar-collapse {
        margin-top: 15px;
        border-top: 1px solid rgba(255, 255, 255, .1)
    }

    .navbar-dark .navbar-nav .nav-link,
    .sticky-top.navbar-dark .navbar-nav .nav-link {
        padding: 10px 0;
        margin-left: 0;
    }

    .navbar-dark .navbar-brand img {
        max-height: 45px;
    }
}

@media (min-width: 992px) {
    .navbar-dark {
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 999;
        background: transparent !important;
    }
    
    .sticky-top.navbar-dark {
        position: fixed;
        background: var(--dark) !important;
    }
}


/*** Hero Header ***/
.hero-header {
    background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(../img/bg-hero.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.hero-header img {
    animation: imgRotate 50s linear infinite;
}

@keyframes imgRotate { 
    100% { 
        transform: rotate(360deg); 
    } 
}

.breadcrumb-item + .breadcrumb-item::before {
    color: rgba(255, 255, 255, .5);
}


/*** Section Title ***/
.section-title {
    position: relative;
    display: inline-block;
}

.section-title::before {
    position: absolute;
    content: "";
    width: 45px;
    height: 2px;
    top: 50%;
    left: -55px;
    margin-top: -1px;
    background: var(--primary);
}

.section-title::after {
    position: absolute;
    content: "";
    width: 45px;
    height: 2px;
    top: 50%;
    right: -55px;
    margin-top: -1px;
    background: var(--primary);
}

.section-title.text-start::before,
.section-title.text-end::after {
    display: none;
}


/*** Service ***/
.service-item {
    box-shadow: 0 0 45px rgba(0, 0, 0, .08);
    transition: .5s;
}

.service-item:hover {
    background: var(--primary);
}

.service-item * {
    transition: .5s;
}

.service-item:hover * {
    color: var(--light) !important;
}


/*** Food Menu ***/
.nav-pills .nav-item .active {
    border-bottom: 2px solid var(--primary);
}


/*** Youtube Video ***/
.video {
    position: relative;
    height: 100%;
    min-height: 500px;
    background: linear-gradient(rgba(15, 23, 43, .1), rgba(15, 23, 43, .1)), url(../img/video.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.video .btn-play {
    position: absolute;
    z-index: 3;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    box-sizing: content-box;
    display: block;
    width: 32px;
    height: 44px;
    border-radius: 50%;
    border: none;
    outline: none;
    padding: 18px 20px 18px 28px;
}

.video .btn-play:before {
    content: "";
    position: absolute;
    z-index: 0;
    left: 50%;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    display: block;
    width: 100px;
    height: 100px;
    background: var(--primary);
    border-radius: 50%;
    animation: pulse-border 1500ms ease-out infinite;
}

.video .btn-play:after {
    content: "";
    position: absolute;
    z-index: 1;
    left: 50%;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    display: block;
    width: 100px;
    height: 100px;
    background: var(--primary);
    border-radius: 50%;
    transition: all 200ms;
}

.video .btn-play img {
    position: relative;
    z-index: 3;
    max-width: 100%;
    width: auto;
    height: auto;
}

.video .btn-play span {
    display: block;
    position: relative;
    z-index: 3;
    width: 0;
    height: 0;
    border-left: 32px solid var(--dark);
    border-top: 22px solid transparent;
    border-bottom: 22px solid transparent;
}

@keyframes pulse-border {
    0% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
        opacity: 1;
    }

    100% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
        opacity: 0;
    }
}

#videoModal {
    z-index: 99999;
}

#videoModal .modal-dialog {
    position: relative;
    max-width: 800px;
    margin: 60px auto 0 auto;
}

#videoModal .modal-body {
    position: relative;
    padding: 0px;
}

#videoModal .close {
    position: absolute;
    width: 30px;
    height: 30px;
    right: 0px;
    top: -30px;
    z-index: 999;
    font-size: 30px;
    font-weight: normal;
    color: #FFFFFF;
    background: #000000;
    opacity: 1;
}


/*** Team ***/
.team-item {
    box-shadow: 0 0 45px rgba(0, 0, 0, .08);
    height: calc(100% - 38px);
    transition: .5s;
}

.team-item img {
    transition: .5s;
}

.team-item:hover img {
    transform: scale(1.1);
}

.team-item:hover {
    height: 100%;
}

.team-item .btn {
    border-radius: 38px 38px 0 0;
}



    </style>
   <!-- bradcam_area_start -->
   <div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3 style="color:#009DFF; font-size: 56px; font-weight: bold; font-family: Arial, sans-serif;">
                                <span>About Us
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start" style = "margin-bottom:20px;">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about/about3.webp">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about/about9.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about/about9.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about/about3.webp">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">Welcome to Skifun</h1>
                <p class="mb-4">Plan your next vacation with us and experience the largest indoor winter facility. We specialized in indoor volant powder skis where we use modern technology to maximize your enjoyment on the deep, untracked snow.</p>
                <h1 class="mb-4">The Gap & Solution </i></h1>
                <p class="mb-4">Our past production is that we did try to provide our own snow in Limuru road but it lasted for 15 minutes due to our climate and it was visited by 200 clients in 5 months whom were both adult & children. The architectural designs was not fully supporting our services and its not our motive to harm the clients but wanting them to experience fun and enjoyment, that's why were opted to build our own using the right designs, we relocated to Konza Town area.</p> <br>
                <p class="mb-4">There is a gap in the Sports and Entertainment industry in our country, where it is not taken with the seriousness  that it requires and also local tourists are looking for new ways of entertainment this making them to go outside the country to access them this lowering jobs opportunities.</p> <br>
                <p class="mb-4">With the introduction of this facility we will be able to close this gap and take sports and recreation to another level especially the winter sport. By bring the mountain to where people are we will be able to make the activity easy to access and convenient to the market, this boosting local tourism and increasing job opportunities.</p> <br>
            </div>
        </div>
    </div>
</div>
        <!-- About End -->
        <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
        <div class="col-lg-6">
        <h5 class="section-title ff-secondary text-start text-primary fw-normal" style="padding-bottom:15px;">Why us</h5>
                <p class="mb-4">Kids will have the opportunity to move the competitive track, if in time they decide to.</p>
                <p class="mb-4">Experience the benefits of being part of a team, making friends while playing the coolest game on the continents.</p>
                <p class="mb-4">To enjoy the sport and have the opportunity to learn the basic skills of the game</p>
                <p class="mb-4">As an organization we believe in building long lasting clients partnerships which help us all grow. To learn more about how to ski and snowboard putting a smile on a customer’s face and this is everything to us</p>

            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about/about9.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about/about3.webp">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our People</h5>
                    <h1 class="mb-5">Meet The Team</h1>
                </div>
                <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="team-item text-center rounded overflow-hidden">
        <div class="rounded-circle overflow-hidden m-4">
            <img class="img-fluid" src="img/cbc.jpg" alt="" style="height:240px;">
        </div>
        <h5 class="mb-0">
            <a href="https://www.linkedin.com/in/dominic-g-66748123b" target="_blank">
                Dominic Kagecha
                <i class="fab fa-linkedin" style="color: #0077B5; padding-left:20px;"></i>
            </a>
        </h5>
        <small>CEO</small>
    </div>
</div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/ic.png" alt=""  style="height:240px;">
                            </div>
                            <h5 class="mb-0">Christopher Njigi</h5>
                            <small>Head of accounting</small>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/cb.jpg" alt=""  style="height:240px;">
                            </div>
                            <h5 class="mb-0">Caleb Bwire</h5>
                            <small>Head of Marketing. </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
@endsection