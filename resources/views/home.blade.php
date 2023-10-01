@extends('layouts.layout')

@section('content')
<!-- mobile menu icon -->
    

    <!-- Start Hero Section -->
    <section class="hero_area_9">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="hero_content_wrapper">
                        <div class="hero_content">
                            <h2 style="font-size:40px;"><img style="margin-bottom:10px;" src="/assets/img/sheleftme3.png" width="250px"> Store</h2>
                            <p>Solusi Produk Digitalmu - Dengan koleksi produk digital premium kami, Anda dapat mengakses berbagai macam layanan dan produk digital. Kami hanya menyediakan produk-produk terbaik untuk Anda.</p>
                            <p>AMAN & HARGA TERJANGKAU | PEDULI KONSUMEN | TERPERCAYA</p>
                            <a href="{{ route('product.index') }}" class="boxed_btn"><span>Ayo, Beli !</span></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 d-flex justify-content-end align-items-center ">
                    <div class="right_content  d-none d-md-block">
                        <div class="hero_img">

                            <img src="/assets/img/hero_area/cloud-002.svg" alt="server_img">
                            <!-- <img src="/assets/img/hero_area/cloud-hosting.jpg" alt="server_img"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start Feature Section -->
    <section class="feature_area_13 section_padding_2">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-8">
                    <div class="section_title_main_6">
                        <h2>Awesome Services</h2>
                        <p>Sheleft.me menyediakan beragam layanan untuk memenuhi berbagai kebutuhan Anda. Kami dapat diandalkan dalam menghadirkan solusi yang efektif dan berkualitas tinggi, siap membantu Anda.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="single_feature_item_13">
                        <div class="feature_img">
                            <img src="/assets/img/feature/feature-0002.png" alt="Support">
                        </div>
                        <h3>99% Uptime</h3>
                        <p>Sheleft.me menjamin layanan yang anda gunakan tetap berfungsi 99% dalam setahun penuh.</p>
                    </div>
                </div>

                <!-- <div class="col-md-6">
                    <div class="single_feature_item_13">
                        <div class="feature_img">
                            <img src="/assets/img/feature/feature-0003.png" alt="Functionality">
                        </div>
                        <h3>Advanced Functionality</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetng industry lorem Ipsum has been
                            the standard.</p>
                    </div>
                </div> -->

                <div class="col-md-6">
                    <div class="single_feature_item_13">
                        <div class="feature_img">
                            <img src="/assets/img/feature/feature-0004.png" alt="Secured">
                        </div>
                        <h3>Trusted</h3>
                        <p>Jika anda tidak puas dengan layanan kami dalam 7 hari terhitung proses order anda, maka anda berhak mendapatkan jaminan uang kembali.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="single_feature_item_13">
                        <div class="feature_img">
                            <img src="/assets/img/feature/feature-0005.png" alt="Customer Support">
                        </div>
                        <h3>24/07 Customer Support</h3>
                        <p>Support kami siap membantu segala permasalahan Anda dalam 24/7</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="single_feature_item_13">
                        <div class="feature_img">
                            <img src="/assets/img/feature/feature-0006.png" alt="Backup">
                        </div>
                        <h3>Low Cost Products</h3>
                        <p>Biaya dan harga murah + bisa negotiable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature Section -->

    <!-- Start Hosting-Brand Section -->
    <div class="hosting_brand_9">
        <div class="container">
        </div>
    </div>
    <!-- End Hosting-Brand Section -->

    <!-- Start Counter Section -->
    <div class="counter_section_4 section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="single_counter_4 ">
                        <div class="counter_img d-flex justify-content-center align-items-center">
                            <img src="/assets/img/counter/shield-003.png" alt="shield">
                        </div>
                        <p>Security</p>
                        <h4><span class="counter">100</span>% Safety</h4>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="single_counter_4">
                        <div class="counter_img d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-tag" style="font-size:50px;color:#E44F6C;"></i>
                        </div>
                        <p>Cheap</p>
                        <h4>Low cost, good quality</h4>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="single_counter_4">
                        <div class="counter_img d-flex justify-content-center align-items-center">
                            <img src="/assets/img/counter/support-003.png" alt="support">
                        </div>
                        <p>24/7 Support</p>
                        <h4><span class="counter">98</span>% Satisfied</h4>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="single_counter_4">
                        <div class="counter_img d-flex justify-content-center align-items-center">
                            <img src="/assets/img/counter/server-003.png" alt="uptime">
                        </div>
                        <p>Server Uptime</p>
                        <h4>Allmost <span class="counter">100</span>%</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Counter Section -->
@endsection