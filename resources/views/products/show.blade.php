@extends('layouts.layout2')
@section('title', $prod->title)

@section('content')
<!-- Start Hero Section -->
<section class="hero_light_in d-flex justify-content-center align-items-center flex-column" id="particles-js1">
    <div class="particle_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center ">
                    <!-- Start breadcrumb -->
                    <div class="page_title d-flex justify-content-center align-items-center flex-column">
                        <h2>{{ $prod->title }}</h2>
                        <!-- <h5 class="bread_crumb">Home/Blog/Full Width</h5> -->
                    </div>
                    <!-- End breadcrumb-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<!-- Start Blog Section -->
<section class="full_content_blog">
    <div class="container">
        <!-- <div class="details_section"> -->
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="single_blog_item_5">
                    <div class="blog_img">
                        <img src="{{ $prod->image }}" alt="blog img">
                    </div>
                    <div class="blog_content">
                        <div class="blog_content_bottom d-flex justify-content-between align-items-center">
                            <a href="https://wa.me/6289674012988?text=*{{ $prod->title }}*, lagi available kah gan?" class="btn btn btn-primary" target="_blank">BELI <i class="ti-tag"></i></a>
                        </div>
                        <!-- <div class="blog_meta_list d-flex">
                                <p>By Anderson in <a href="#">Photography</a> Posted 19 Aug 2021</p>
                            </div> -->
                        <!-- <h2>Styles come and go. Design is a language, not a style.</h2> -->
                        <div class="d-flex justify-content-center">
                            <pre class="pre-style">
                                {!! nl2br(e($prod->desc)) !!}
                            </pre>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
</section>
<!-- End Blog Section -->
@endsection