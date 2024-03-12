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
                                <span>Contact Us
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
@endsection