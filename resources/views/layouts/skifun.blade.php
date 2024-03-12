<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Skifun Training Center Ltd</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo2.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">  
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<style>
    .active {
    font-weight: bold; /* For example, making the font bold */
    color: #007bff; /* For example, changing the text color to blue */
    border-bottom: 2px solid #fff; /* White underline */
    /* Add any other styles you want for the active state */
}
</style>
<body>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                    <li class="nav-item {{ request()->routeIs('index') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('index')}}">Home</a>
					</li>                                        
					<li class="nav-item {{ request()->routeIs('services') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('services')}}">Services</a>
					</li>                                        
					<li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('about')}}">About</a>
					</li> 
					<li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('contact')}}">Contact</a>
					</li>
                
                </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="img/logo2.png" alt="" style="height:120px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="#test-form">Book reservation</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')


<!-- //footer section -->
        <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                address
                            </h3>
                            <p class="footer_text">Konza Town, a 45 minutes drive from the CBD, 2.5 KM to Mombasa road and 25 minutes drive from JKIA.</p>
                            <a href="{{ route('contact')}}"class="line-button">Get Direction</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Reservation
                            </h3>
                            <p class="footer_text">+254 710 605 439 </p>
                            <p class="footer_text">info@skifuntrainingcenter.com </p>
                               <p class="footer_text">Monday - Thursday:- 9:00 am to 10:00pm <br>
                               Friday - Sunday:- 8:00am to 11:00pm </p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Navigation
                            </h3>
                            <ul>
                                <li><a href="{{ route('index')}}">Home</a></li>
                                <li><a href="{{ route('services')}}">Services</a></li>
                                <li><a href="{{ route('about')}}">About</a></li>
                                <li><a href="{{ route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                    <a href="{{ route('index')}}">
                                    <img src="img/logo2.png" alt="" style="height:225px; margin-left:30px;">
                                </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-8 col-md-7 col-lg-9">
                        <p class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <style>
  p {
    font-family: Arial, sans-serif;
  }
  .contact-info {
    margin: 20px auto;
    max-width: 400px;
  }
  .contact-info i {
    margin-right: 10px;
  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <form id="test-form" class="white-popup-block mfp-hide">
                <div class="popup_box ">
                <h2>Contact Information</h2>
  <div class="contact-info">
    <p><i class="fas fa-phone"></i> Phone: <a href="tel:+254710605439">+254 710 605 439</a></p>
    <p><i class="fab fa-whatsapp"></i> WhatsApp: <a href="https://wa.me/+254710605439">+254 710 605 439</a></p>
    <p><i class="far fa-envelope"></i> Email: <a href="mailto:info@skifuntrainingcenter.com">info@skifuntrainingcenter.com</a></p>
  </div>    
                    </div>
            </form>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>
</body>
