
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sheleft.me Store - Solusi Produk Digitalmu">
    <meta name="keywords" content="Produk digital, youtube premium, netflix premium, hosting murah bulanan, hosting murah tahunan, vps murah bulanan, vps murah tahunan">
    <meta name="author" content="Aaron Wang">
    <meta property="og:url"                content="https://store.sheleft.me" />
    <meta property="og:type"               content="e-commerce" />
    <meta property="og:title"              content="Sheleft.me Store" />
    <meta property="og:description"        content="Sheleft.me Store - Solusi Produk Digitalmu" />
    <meta property="og:image"              content="/assets/img/sheleftme2.png" />
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link href="/assets/img/sheleftme-favicon.png" rel="shortcut icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="/assets/css/themify-icons.css">
    <!-- colorbox popup -->
    <link rel="stylesheet" type="text/css" href="/assets/css/colorbox.css">
    <!-- swiper slider -->
    <link rel="stylesheet" type="text/css" href="/assets/css/swiper.min.css">
    <!-- Animate Css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
    <!-- Google Font- Rubik -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
    <!-- Google Font- Fira sans -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,400i,500,700" rel="stylesheet">
    <!-- CSS -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Pre-loader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader_inner"></div>
            <div class="loader_inner"></div>
        </div>
    </div>

    <!-- mobile menu icon -->
    <a class="burger_icon d-md-flex d-lg-none navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mega_menu">
        <div class="stick stick_1"></div>
        <div class="stick stick_2"></div>
        <div class="stick stick_3"></div>
    </a>

    <!-- offcanvas overlay -->
    <div class="offcanvas_overlay"></div>

    <!-- offcanvas menu -->
    <div class="offcanvas_menu">
        <a href="/" class="logo"><img src="/assets/img/sheleftme3.png" alt="logo"></a>
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium veritatis voluptatem illum ipsum odit! -->
        </p>
        <ul class="social_link">
            <li><a href="#"><i class="ti-facebook"></i></a></li>
            <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
            <li><a href="#"><i class="ti-pinterest"></i></a></li>
        </ul>
        <h5>Get In Tuch:</h5>
        <div class="contact_form">
            <form>
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="inputfirstname3" placeholder="Name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <textarea rows="3" class="form-control" id="inputmessage" placeholder="Message"
                            required></textarea>
                    </div>
                </div>
                <button type="submit" class="boxed_btn">Submit</button>
            </form>
        </div>
        <img src="img/mobileno.png" alt="call" class="mobileno">
    </div>

    <!--Modal For Search -->
    <div class="search_bar">
        <div class="search_body">
            <form action="#">
                <input type="text" placeholder="Enter your text"> <button><i class="ti-search"></i></button>
            </form>
        </div>
    </div>

    <!-- Start Header Section -->
    <header class="header_wrap_light_in">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="mega_nav navbar navbar-expand-lg d-flex justify-content-between p-0">
                        <a class="navbar-brand" href="/"><img src="/assets/img/sheleftme3.png" width="130px" alt="Ahope logo_4"></a>
                        <div class="p-lg-0 nav_wrapper">
                        <ul class="navbar-nav m-auto collapse navbar-collapse" id="mega_menu">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('product.index') }}">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('payment-delivery') }}">Payment & Delivery</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="about_us.html">Payment Confirmation</a>
                            </li> -->
                        </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->

    @yield('content')

    <!-- Start Footer Section -->
    <footer class="footer_light_in">
        <div class="container">
            <div class="footer_top">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="f_widget_1">
                            <h2><a href="#" class="footer_logo"><img src="/assets/img/sheleftme3.png" width="130px" alt="Logo"></a></h2>
                            <p class="footer_text">We design and develop user-friendly and highly responsive web
                                templates to help business owners to grow their businesses.</p>
                            <ul class="social_link">
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <a class="scrolltop"> <i class="ti-angle-up"></i></a>
            <div class="row">
                <div class="col-md-4">
                    <div class="copy_right_text">
                        <p>&copy;
                            <script>document.write(new Date().getFullYear())</script> Sheleft.me. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->


    <!--jQuery JS-->
    <script src="/assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- isotope -->
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <!-- colorbox popup -->
    <script src="/assets/js/jquery.colorbox-min.js"></script>
    <!-- Swiper Slider -->
    <script src="/assets/js/swiper.min.js"></script>
    <!-- waypoints  -->
    <script src="/assets/js/jquery.waypoints.min.js"></script>
    <!-- Counterup  -->
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <!-- particles -->
    <script src="/assets/js/particles.min.js"></script>
    <script src="/assets/js/app.js"></script>
    <!-- Custom js -->
    <script src="/assets/js/main.js"></script>
    <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
        <script>
          var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"WhatsApp Us","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":"6289674012988","welcomeMessage":"Gan mau tanya-tanya tentang productnya bisa?","zIndex":999999,"btnColorScheme":"light"};
          window.onload = () => {
            _waEmbed(wa_btnSetting);
          };
        </script>
      
</body>

</html>