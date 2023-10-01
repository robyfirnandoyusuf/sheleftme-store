@extends('layouts.layout2')
@section('title', 'About')

@section('content')
<!-- Start Hero Section -->
<section class="hero_light_in about d-flex justify-content-center align-items-center flex-column" id="particles-js1">
    <div class="particle_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center ">
                    <!-- Start breadcrumb -->
                    <div class="page_title d-flex justify-content-center align-items-center flex-column">
                        <h2>About Us</h2>
                        <!-- <h5 class="bread_crumb">Home/Page/About</h5> -->
                    </div>
                    <!-- End breadcrumb-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<!-- Start Promo Content Area  -->
<section class="promo_content_area_5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="left_side">
                    <div class="promo_content_5">
                        <div class="box_wrapper">
                            <div class="box"></div>
                            <div class="box"></div>
                            <div class="box"></div>
                            <!-- promo video area -->
                            <div class="overlay1">
                                <video id="video1" controls autoplay>
                                    <source src="http://themevaly.com/video/001.mp4" type="video/mp4">
                                    Your browser does not support HTML5 video.
                                </video>
                            </div>
                            <div class="button-container d-flex justify-content-center align-items-center">
                                <button class="play_btn_pluse video_button ">
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 d-flex  justify-content-center align-items-center">
                <div class="right_side">
                    <h2>Something About Us</h2>
                    <p>Ownernya tampan dan rupawan minus ga ber-uang, makanya nyoba jualan H3h3</p>
                    <!-- <a href="about_us.html" class="boxed_btn"><span>Learn more</span></a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Promo Content Area  -->
@endsection