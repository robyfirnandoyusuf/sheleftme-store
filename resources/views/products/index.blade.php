@extends('layouts.layout2')
@section('title', 'Product')
@section('content')
    <!-- Start Hero Section -->
    <section class="hero_light_in d-flex justify-content-center align-items-center flex-column" id="particles-js1">
        <div class="particle_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1 text-center ">
                        <!-- Start breadcrumb -->
                        <div class="page_title d-flex justify-content-center align-items-center flex-column">
                            <h2>Product</h2>
                            <!-- <h5 class="bread_crumb">Home/Page/Product</h5> -->
                        </div>
                        <!-- End breadcrumb-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start product Section -->
    <section class="product_area">
        <div class="container">
            <div class="row">
                @foreach ($prods as $prod)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card ">
                        <span class="batch">Sale</span>
                        <div class="img_wrapper">
                            <img class="card-img-top" src="{{ $prod->image }}" alt="product image">
                            <a href="https://wa.me/6289674012988?text=*{{ $prod->title }}*, lagi available kah gan?" target="_blank" class="boxed_btn">YOK BELI!</a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">{{ $prod->title }}</a></h5>
                            <p class="card-text">
                                <a href="{{ route('product.show', $prod->id) }}" class="btn btn-sm btn-primary">Lihat Produk</a>
                                <!-- <span>$15.00</span> $20.00 -->
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End product Section -->
@endsection