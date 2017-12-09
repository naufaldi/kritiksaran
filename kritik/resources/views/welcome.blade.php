<!DOCTYPE html><!DOCTYPE html>
<!--[if IE 7]>    <html class="no-js oldie ie7 ie" lang="en-US" prefix="og: http://ogp.me/ns#" > <![endif]-->
<!--[if IE 8]>    <html class="no-js oldie ie8 ie" lang="en-US" prefix="og: http://ogp.me/ns#" > <![endif]-->
<!--[if IE 9 ]>   <html class="no-js       ie9 ie" lang="en-US" prefix="og: http://ogp.me/ns#" > <![endif]-->
<!--[if (gt IE 9)|!(IE)] -->
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIKRITIK</title>
    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ url('landing-page/css/bootstrap.min.css') }}" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ url('landing-page/css/font-awesome.min.css') }}" />
    <!-- animate -->
    <link  rel="stylesheet" type="text/css" href="{{ url('landing-page/css/animate.css') }}"/>
    <!-- owl-carousel -->
    <link rel="stylesheet" href="{{ url('landing-page/css/owl.carousel.css') }}" />
    <!-- slicknav -->
    <link rel="stylesheet" href="{{ url('landing-page/css/slicknav.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ url('landing-page/style.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ url('landing-page/css/responsive.css') }}"/>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ url('landing-page/images/icon.ico') }}" />

  </head>
  <body class="main_" data-spy="scroll" data-target="#navbar-example">
    <div id="home"></div>
    <!-- header-section-start -->
    <header>
        @if ($errors->has('number_id') or $errors->has('password'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <center>  ID LOGIN dan PASSWORD tidak tepat </center>
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="logo">
                    <a id="logo_1" href=""><img src="{{url('images/log.png')}}" alt="SIKRITIK" /></a>
                    <a id="logo_2" href=""><img src="{{url('images/log.png')}}" alt="SIKRITIK" /></a>
                </div>
                <nav class="mainmenu"  id="navbar-example">
                    <ul id="nav" class="nav nav-tabs" role="tablist">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#features">FEATURES</a></li>
                        <li><a href="#screenshot">SCREENSHOT</a></li>
                        <li><a href="#blog">Team</a></li>
                        <li><a href="#pricing">PRICING</a></li>
                        <li><a href="#download">DOWNLOAD</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                        <li><a href="" data-toggle="modal" data-target="#myModal">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- header-section-end -->
    <!-- slider-section-start -->
    <section class="slider_area">
        <div id="image_carousel_1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators slider_indicators">
                <li data-target="#image_carousel_1" data-slide-to="0" class="active"></li>
                <li data-target="#image_carousel_1" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="single_slide">
                        <div class="slider_bg slide-1"></div>
                        <div class="container">
                            <div class="slide_text">
                                <div class="table">
                                    <div class="table-cell">
                                        <h1>SIKRITIK <br /> Sistem Informasi Kritik dan Saran</h1>
                                        <p>Dapatkan dan berikan kritik dan saran untuk jurusan teknik Informatika <br /> UIN Maulana Malik Ibrahim Malang  </p>
                                        <a class="digital" href="#portfolio">App Mobile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single_slide">
                        <div class="slider_bg slide-3"></div>
                        <div class="container">
                            <div class="slide_text">
                                <div class="table">
                                    <div class="table-cell">
                                        <h1>SIKRITIK <br /> Sistem Informasi Kritik dan Saran</h1>
                                        <p>Dapatkan dan berikan kritik dan saran untuk jurusan teknik Informatika <br /> UIN Maulana Malik Ibrahim Malang  </p>
                                        <a class="digital" href="#portfolio">App Mobile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left fawesome-control" href="#image_carousel_1" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right fawesome-control" href="#image_carousel_1" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
    </section>
    <!-- slider-section-end -->
    <!-- about-section-start -->
    <section class="about section_padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="about_title section-title wow slideInLeft" data-wow-delay="0.3s">
                        <h1>Melayani dan Menampung Aspirasi Masyarakat Informatika</h1>
                        <p>Kami hadir untuk menjadi wadah atau media penyampaian informasi terkait saran, kritik atau masukkan untuk bersama membangun Jurusan Teknik Informatika lebih maju dan berkualitas.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="about_text wow flipInY" data-wow-delay="0.6s">
                                <div class="about_icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                                <a href="#"><h3>Rela Time Sistem</h3></a>
                                <p>Sistem cepat tanggap dalam menyalurkan informasi dan menampilkan informasi</p>
                            </div>
                            <div class="about_text wow flipInY" data-wow-delay="0.6s">
                                <div class="about_icon">
                                    <i class="fa fa-bar-chart"></i>
                                </div>
                                <a href="#"><h3>Good Quality</h3></a>
                                <p>Sistem yang kita bangun memiliki kapabilitas yang terjamin untuk skala besar</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about_text wow flipInY" data-wow-delay="0.6s">
                                <div class="about_icon">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <a href="#"><h3>Easy to Use</h3></a>
                                <p>Sistem yang kita buat memudahkan pengguna dalam menggunakannya </p>
                            </div>
                            <div class="about_text wow flipInY" data-wow-delay="0.6s">
                                <div class="about_icon">
                                    <i class="fa fa-dot-circle-o"></i>
                                </div>
                                <a href="#"><h3>Friendly System</h3></a>
                                <p>Sistem kritik saran memiliki tampilan yang baik dan bagus dengan desain yang elegan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="about_right wow slideInRight" data-wow-delay="0.3s">
                        <img id="right_img_1" src="{{url('landing-page/images/about/about-image.png')}}" alt="" />
                        <img id="right_img_2" src="{{url('landing-page/images/about/about-image-2.png')}}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section-end -->
    <!-- video-section-start -->
    <section class="video section_padding">
        <video id="bgvid" loop>
            <source src="video/demo-video.mp4" type="video/mp4">
        </video>
        <div class="video_text">
            <div class="amazing_title col-text-center text-center section-title  wow flipInX" data-wow-delay="0.3s">
                <h1>Demo Video</h1>
            </div>
            <div id="polina">
                <button><i class="fa fa-play"></i></button>
            </div>
        </div>
    </section>
    <!-- video-section-end -->
    <!-- features-section-start -->
    <section class="features section_padding" id="features">
        <div class="container">
            <div class="row">
                <div class="amazing_title col-text-center text-center section-title  wow flipInX" data-wow-delay="0.3s">
                    <h1>Amazing Features</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="about_text amazing_text wow slideInLeft" data-wow-delay="0.3s">
                        <div class="about_icon">
                            <i class="fa fa-cog"></i>
                        </div>
                        <a href="#"><h3>Powerfull Theme</h3></a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="about_text amazing_text wow slideInLeft" data-wow-delay="0.3s">
                        <div class="about_icon">
                            <i class="fa fa-camera"></i>
                        </div>
                        <a href="#"><h3>Unlimited Features</h3></a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="about_text amazing_text wow slideInLeft" data-wow-delay="0.3s">
                        <div class="about_icon">
                            <i class="fa fa-bug"></i>
                        </div>
                        <a href="#"><h3>High Resolution & Retina Ready</h3></a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="about_right amazing_text wow fadeInUp animated text-center">
                        <img src="{{URL('landing-page/images/amazing.png')}}" alt="" />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="about_text amazing_text wow slideInRight" data-wow-delay="0.3s">
                        <div class="about_icon">
                            <i class="fa fa-code"></i>
                        </div>
                        <a href="#"><h3>Easy to customize</h3></a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="about_text amazing_text wow slideInRight" data-wow-delay="0.3s">
                        <div class="about_icon">
                            <i class="fa fa-pagelines"></i>
                        </div>
                        <a href="#"><h3>Different Colors</h3></a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="about_text amazing_text wow slideInRight" data-wow-delay="0.3s">
                        <div class="about_icon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <a href="#"><h3>52/4 Support</h3></a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-section-end -->
    <!-- testimonials-we-do-section-start -->
    <section class="testimonials text-center">
        <div id="fawesome_carousel_3" class="carousel slide" data-ride="carousel">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 col-text-center text-center">
                        <ol class="carousel-indicators testimonials_indicators">
                            <li data-target="#fawesome_carousel_3" data-slide-to="0" class="active"><img src="{{url('landing-page/images/client/client-1.png')}}" alt="" /></li>
                            <li data-target="#fawesome_carousel_3" data-slide-to="1"><img src="{{url('landing-page/images/client/client-2.png')}}" alt="" /></li>
                            <li data-target="#fawesome_carousel_3" data-slide-to="2"><img src="{{url('landing-page/images/client/client-3.png')}}" alt="" /></li>
                            <li data-target="#fawesome_carousel_3" data-slide-to="3"><img src="{{url('landing-page/images/client/client-4.png')}}" alt="" /></li>
                            <li data-target="#fawesome_carousel_3" data-slide-to="4"><img src="{{url('landing-page/images/client/client-5.png')}}" alt="" /></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="single_testimonials">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <h4>Margaret Thatcher - Marketplaces</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single_testimonials">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <h4>CALVIN COOLIDGE - THEMEFOREST</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single_testimonials">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <h4>MARGARET THATCHER - MARKETPLACES</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single_testimonials">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <h4>POPE PAUL - APPSTORM</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single_testimonials">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <h4>POPE PAUL - APPSTORM</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left fawesome-control" href="#fawesome_carousel_3" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="right fawesome-control" href="#fawesome_carousel_3" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials-section-end -->
    <!-- screenshot-section-start -->
    <section class="service section_padding" id="screenshot">
        <div class="container">
            <div class="row">
                <div class="amazing_title screenshot_title col-text-center text-center section-title wow flipInX" data-wow-delay="0.3s">
                    <h1>Screenshot Aplikasi</h1>
                </div>
            </div>
            <div class="row">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{url('landing-page/images/screenshot/screenshot-4.png')}}" alt="Screenshot Image">
                    </div>
                    <div class="item">
                        <img src="{{url('landing-page/images/screenshot/screenshot-6.png')}}" alt="Screenshot Image">
                    </div>
                    <div class="item">
                        <img src="{{url('landing-page/images/screenshot/screenshot-5.png')}}" alt="Screenshot Image">
                    </div>
                    <div class="item">
                        <img src="{{url('landing-page/images/screenshot/screenshot-1.png')}}" alt="Screenshot Image">
                    </div>
                    <div class="item">
                        <img src="{{url('landing-page/images/screenshot/screenshot-2.png')}}" alt="Screenshot Image">
                    </div>
                    <div class="item">
                        <img src="{{url('landing-page/images/screenshot/screenshot-3.png')}}" alt="Screenshot Image">
                    </div>
                </div>
                <div class="customNavigation">
                  <a class="btn prev"><i class="fa fa-angle-left"></i></a>
                  <a class="btn next"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- screenshot-section-end -->
    <!-- blog-section-start -->
    <section class="blog section_padding text-center" id="blog">
        <div class="container">
            <div class="row">
                <div class="amazing_title col-text-center text-center section-title wow flipInX" data-wow-delay="0.3s">
                    <h1>Team</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="single_blog wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="blog_img">
                            <a href="#"><img src="{{url('landing-page/images/developer/roihan.jpg')}}" alt="" /></a>
                        </div>
                        <div class="blog_text">
                            <h4>Ahmad Roihan</h4>
                            <span>Developer Android</span>
                            <p>Seorang pelajar di Teknik Informatia UIN Malang yang menekuni bidang Android dan merupakan pencetus komunitas android.</p>
                        </div>
                    </div>
                    <div class="single_blog wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="blog_img">
                            <a href="#"><img src="{{url('landing-page/images/blog/blog-post2.png')}}" alt="" /></a>
                        </div>
                        <div class="blog_text">
                            <h4>Single Image Post</h4>
                            <span>by admin . in logo . 1 comment</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single_blog wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog_img">
                            <a href="#"><img src="{{url('landing-page/images/blog/blog-post3.png')}}" alt="" /></a>
                        </div>
                        <div class="blog_text">
                            <h4>Single Image Post</h4>
                            <span>by admin . in logo . 1 comment</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <a href="#">Read More</a></p>
                        </div>
                    </div>
                    <div class="single_blog wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog_img">
                            <a href="#"><img src="{{url('landing-page/images/blog/blog-post4.png')}}" alt="" /></a>
                        </div>
                        <div class="blog_text">
                            <h4>Single Image Post</h4>
                            <span>by admin . in logo . 1 comment</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single_blog wow fadeInRight" data-wow-delay="0.3s">
                        <div class="blog_img">
                            <a href="#"><img src="{{url('landing-page/images/blog/blog-post5.png')}}" alt="" /></a>
                        </div>
                        <div class="blog_text">
                            <h4>Single Image Post</h4>
                            <span>by admin . in logo . 1 comment</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <a href="#">Read More</a></p>
                        </div>
                    </div>
                    <div class="single_blog wow fadeInRight" data-wow-delay="0.3s">
                        <div class="blog_img">
                            <a href="#"><img src="{{url('landing-page/images/blog/blog-post6.png')}}" alt="" /></a>
                        </div>
                        <div class="blog_text">
                            <h4>Single Image Post</h4>
                            <span>by admin . in logo . 1 comment</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-section-end -->
    <!-- pricing-section-start -->
    <section class="pricing section_padding text-center" id="pricing">
        <div class="container">
            <div class="row">
                <div id="pricing-table" class="clear">
                    <div class="col-sm-6 col-md-3">
                        <div class="plan wow slideInLeft">
                            <h3>Enterprise<span>$59</span></h3>
                            <a class="signup" href="">Sign up</a>         
                            <ul>
                                <li><b>10GB</b> Disk Space</li>
                                <li><b>100GB</b> Monthly Bandwidth</li>
                                <li><b>20</b> Email Accounts</li>
                                <li><b>Unlimited</b> subdomains</li>            
                            </ul> 
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="plan wow fadeInUp">
                            <h3>Porfessional<span>$29</span></h3>
                            <a class="signup" href="">Sign up</a>         
                            <ul>
                                <li><b>5GB</b> Disk Space</li>
                                <li><b>50GB</b> Monthly Bandwidth</li>
                                <li><b>10</b> Email Accounts</li>
                                <li><b>Unlimited</b> subdomains</li>            
                            </ul> 
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="plan wow fadeInUp">
                            <h3>Standard<span>$17</span></h3>
                            <a class="signup" href="">Sign up</a>         
                            <ul>
                                <li><b>3GB</b> Disk Space</li>
                                <li><b>25GB</b> Monthly Bandwidth</li>
                                <li><b>5</b> Email Accounts</li>
                                <li><b>Unlimited</b> subdomains</li>            
                            </ul> 
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="plan wow slideInRight">
                            <h3>Basic<span>$9</span></h3>
                            <a class="signup" href="">Sign up</a>         
                            <ul>
                                <li><b>1GB</b> Disk Space</li>
                                <li><b>10GB</b> Monthly Bandwidth</li>
                                <li><b>2</b> Email Accounts</li>
                                <li><b>Unlimited</b> subdomains</li>            
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-section-end -->
    <!-- subcribe-clients-section-start -->
    <section class="subcribe section_padding">
        <div class="container">
            <div class="amazing_title subcribe_title col-text-center text-center section-title wow flipInX" data-wow-delay="0.3s">
                <h1>Subcribe</h1>
            </div>
            <div class="row wow fadeInDown text-center">
                <div class="col-sm-offset-2 col-sm-5">
                    <div class="subcribe_text">
                        <input type="text" placeholder="Your Email" name="email">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="subcribe_btn text-left">
                        <input type="button" class="btn-black " value="send message" name="subcribe" id="contact-button">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subcribe-section-end -->
    <!-- download-clients-section-start -->
    <section class="download section_padding" id="download">
        <div class="container">
            <div class="amazing_title subcribe_title col-text-center text-center section-title wow flipInX" data-wow-delay="0.3s">
                <h1>Dapatkan Aplikasi Kami</h1>
            </div>
            <div class="row wow fadeInDown text-center">
                <div class="col-sm-12 col-md-8 col-text-center">
                    <div class="download_text">
                        <a href="#"><i class="fa fa-android"></i>android User</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- download-section-end -->
    <!-- contact-section-start -->
    <section class="contact section_padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="about_hello wow fadeInLeft">
                        <h3>Tentang Aplikasi</h3>
                        <p id="about_p_text">Sikritik Merupakan aplikasi kritik saran jurusan teknik informatika UIN Maulana Malik Ibrahim Malang. Aplikasi ini berfungsi sebagai alternatif lain untuk memberikan kritik maupun saran kepada jurusan yang biasanya dilakukan dengan menulis pesan pada kertas dan kali ini bisa dilakukan dengan memanfaatkan teknologi yang ada sehingga lebih mudah dilakukan.</p>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInUp">
                    <div class="about_hello">
                        <h3>Hubungi Kami</h3>
                        <p><i class="fa fa-mobile"></i>Telp/WA 085607059697</p>
                        <p><i class="fa fa-envelope" id="envel"></i>sikritik@gmail.com</p>
                        <p><i class="fa fa-map-marker"></i>Kunjungi kami di kantor skretariat, jl gajayana no 50 dinoyo Malang</p>
                    </div>
                    <div class="social_icon">
                        <a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
                        <a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
                        <a href="www.google.com"><i class="fa fa-google-plus"></i></a>
                        <!-- <a href="www.dribbble.com"><i class="fa fa-dribbble"></i></a>
                        <a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a> -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="quick_contack about_hello subcribe_btn wow fadeInRight">
                        <h3>Alternatif kontak</h3>
                        <input type="text" placeholder="Nama Kamu" name="name">
                        <div class="message_text">
                            <textarea name="message" placeholder="Pesan" required="required"></textarea>
                        </div>
                        <input type="button" class="btn-black " value="Kirim Pesan" name="send message" id="contact-button">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section-end -->
    <!-- footer-section-start -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="footer_copyright">
                    <p>&copy;2015 BY <a href="#">Sikritik</a>.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-section-end -->
    
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">LOGIN</h4>
          </div>
          <div class="modal-body">

            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('number_id') ? ' has-error' : '' }}">
                    <label for="number_id" class="col-md-4 control-label">Number ID</label>

                    <div class="col-md-6">
                        <input id="number_id" type="text" class="form-control" name="number_id" value="{{ old('number_id') }}" required autofocus>

                        @if ($errors->has('number_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('number_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
        

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
            </form>
          </div>
        </div>

      </div>
    </div>
    <!-- modal -->

    <!-- jquery-1.11.3 -->
    <script src="{{ url('landing-page/js/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ url('landing-page/js/bootstrap.min.js') }}"></script>
    <!-- slicknav js -->
    <script src="{{ url('landing-page/js/jquery.slicknav.min.js') }}"></script>
    <!-- sticky -->
    <script src="{{ url('landing-page/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp -->
    <script src="{{ url('landing-page/js/jquery.scrollUp.js') }}"></script>
    <!-- wow -->
    <script src="{{ url('landing-page/js/wow.min.js') }}"></script>
    <!-- owl-carousel -->
    <script src="{{ url('landing-page/js/jquery.nicescroll.min.js') }}"></script>
    <!-- owl-carousel -->
    <script src="{{ url('landing-page/js/owl.carousel.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ url('landing-page/js/main.js') }}"></script>
  </body>
</html>
