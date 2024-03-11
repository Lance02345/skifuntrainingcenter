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
                                <span>Our Services
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- offers_area_start -->
<style>

.about_thumb img {
    height: 300px; /* Adjust the height as needed */
    width: 100%; /* Maintain aspect ratio */
    object-fit: cover; /* Ensure the image covers the entire container */
}

.single_offers {
        height: 500px; /* Adjust the height as needed */
    }

    .offers_area {
    background-color: #f9f9f9;
    padding: 100px 0;
}

.single_offers {
    background-color: #fff;
    border-radius: 10px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.single_offers .about_thumb img {
    max-width: 100%;
    border-radius: 10px;
    margin-bottom: 20px;
}

.single_offers h3 {
    text-align: center;
    font-family: 'Montserrat', sans-serif; /* Align the text to the left */
}

.single_offers h3 i {
    margin-right: 10px; /* Add spacing between the icon and text */
}
.offer_price {
    font-size: 20px;
    text-align: center; /* Center-align the prices */
    font-weight: 500;
    color: #007bff; /* Blue color */
    margin-bottom: 20px;
}

.offer_price:before {
    font-weight: normal;
}

.single_offers:hover {
    background-color: #f0f8ff; /* Light blue color on hover */
}


</style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-..." crossorigin="anonymous">

  <div class="offers_area padding_top">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <strong><h3 style="padding-bottom:10px;">Packages Available :</h3></strong>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <div class="single_offers text-center">
                    <div class="about_thumb">
                        <img src="img/rooms/indoor5.png" alt="">
                    </div>
                    <i class="fa-solid fa-person-skiing-nordic fa-3x"></i>
                    <h3 style="font-size:15px;">Per child<br> 
                       <span>up to 14 years.</span></h3>
                </div>
                <p class="offer_price"><a href="#" class="book_now">Ksh 1,200</a></p>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_offers text-center">
                    <div class="about_thumb">
                        <img src="img/rooms/hero21.jpg" alt="">
                    </div>
                    <i class="fa-solid fa-person-skiing-nordic fa-3x"></i>
                    <h3 style="font-size:15px;">For all age groups <br>
                        <span>15 years and older</span><br> 
                        for an hour inclusive of skating boots.</h3>
                </div>
                <p class="offer_price"><a href="#" class="book_now">Ksh 1,500</a></p>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_offers text-center">
                    <div class="about_thumb">
                        <img src="img/rooms/02.webp" alt="">
                    </div>
                    <i class="fa-solid fa-person-skiing-nordic fa-3x"></i>
                    <h3 style="font-size:15px;">Monthly rates<br> 
                        <span>per child/adult</span></h3>
                </div>
                <p class="offer_price"><a href="#" class="book_now">Ksh 23,000</a></p>
            </div>
        </div>
    </div>
</div>


    <!-- offers_area_end -->

    <!-- features_room_startt -->
    <style>
    .single_rooms .room_thumb img {
    height: 400px; /* Adjust the height as needed */
    width: 100%; /* Maintain aspect ratio */
    object-fit: cover; /* Ensure the image covers the entire container */
}
</style>
    <!-- features_room_startt -->
    <div class="features_room">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Featured</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/hero21.jpg" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                    <div class="room_heading_inner">
                            <span>For all ages group 15 years and older <br> for an hour inclusive of the skating boots. </span>
                            <h3 style="color:#89CFF0">Ksh 1,500</h3>
                        </div>    
                        <a href="#" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/02.webp" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                        <span>Monthly rates per child/adult </span>
                            <h3 style="color:#89CFF0">Ksh 23,000</h3>
                        </div>
                        <a href="#" class="line-button">book now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                    <p>For Reservation 0r Query?</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="phone_num">
                                    <a href="#" class="mobile_no">+254 710 605 439</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- forQuery_end-->
    
</body>

@endsection