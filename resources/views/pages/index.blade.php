@extends('layouts.skifun')
@section('content')


<body>
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="slider_text text-center">
                <h3 style="font-size: 56px; font-weight: bold; font-family: Arial, sans-serif;">
    <span  style="color: #9FE2BF;">Ski</span>fun Training Center
</h3>                    <p style = "font-size:20px; font-weight: bold;">Experience the largest indoor <br> winter facility in Kenya.</p>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>About Us</span>
                            <h3>Welcome to <br> Skifun training <br> center Kenya. <br>
                                </h3>
                        </div>
                        <p>Plan your next vacation with us and experience the largest indoor winter facility. We specialized in indoor volant powder skis where we use modern technology to maximize your enjoyment on the deep, untracked snow.</p>
                        <a href="{{ route('services')}}" class="line-button">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb d-flex">
                        <div class="img_1">
                            <img src="img/about/about3.webp" alt="">
                        </div>
                        <div class="img_2">
                            <img src="img/about/about9.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb2 d-flex">
                        <div class="img_1">
                            <img src="img/about/1.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="img/about/2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>Delicious Food</span>
                            <h3>We Serve Fresh and <br>
                                Delicious Food</h3>
                        </div>
                        <p style="font-family: 'Roboto', sans-serif;">Indulge in a culinary journey like no other as we proudly serve a fusion of Kenyan, American, and French dishes. Savor the vibrant flavors of Kenya, experience the comfort of American classics, and delight in the sophistication of French cuisine—all under one roof. Our diverse menu offers something for every palate, ensuring a memorable dining experience for you and your companions. Join us and embark on a gastronomic adventure filled with exquisite tastes and delightful surprises. Bon appétit! 🥂</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->



    <!-- features_room_end -->

    <!-- forQuery_start -->
    <div class="forQuery">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-md-12">
                    <div class="Query_border">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="Query_text">
                                    <p>For Reservation or Query?</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="phone_num">
                                    <a href="tel:+254710605439" class="mobile_no">+254 710 605 439</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- forQuery_end-->


     <style>
        .single_instagram img {
    width: 300px;
    height: 300px;
    object-fit: cover; /* Ensure the image covers the entire container */
}
     </style>
    <!-- instragram_area_start -->
    <div class="instragram_area">
        <div class="single_instagram">
            <img src="img/instragram/ih.webp" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/igskii.jpg" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/igggg.webp" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/ig09.jpg" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/ig003.jpg" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- instragram_area_end -->


</body>

@endsection