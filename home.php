<?php 

if(!isset($_SERVER [ 'PHP_AUTH_USER' ])){
  header ("WWW-Authenticate: Basic realm=\"Secured\"");
  header ("HTTP/1.0 401 Unauthprized");
  echo "enter credential";
  exit;
}
else{
  if(($_SERVER['PHP_AUTH_USER']) == 'camelot' && ($_SERVER['PHP_AUTH_PW'])== 'camelotadmin'){
    
    ?>
    <!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Camelot System Partners Ltd. - For Realizes Digital Innovations</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Sail&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet"> 
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon2.png">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand d-flex align-items-center" href="home.php">
                        <span class="icon-camelot_font"></span></a>
                </h1>
                <!-- if logo is image enable this
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recruitment.html">Recruitment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        <!-- search button -->
                        <!-- 
                        <div class="search-right ml-lg-3">
                            <form action="#search" method="GET" class="search-box position-relative">
                                <div class="input-search">
                                    <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                        autofocus="" class="search-popup">
                                </div>
                                <button type="submit" class="btn search-btn"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                            </form>
                        </div> -->
                        <!-- //search button -->
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->

    <!-- banner section -->
    <section class="w3l-main-slider" id="home">
        <div class="banner-content">
            <div id="demo-1"
                data-zs-src='["assets/images/banner1.jpg", "assets/images/banner2.jpg","assets/images/banner3.jpg"]'
                data-zs-overlay="dots">
                <div class="demo-inner-content">
                    <div class="container">
                        <div class="banner-infhny">
                            
                            <!-- first text effect -->
                            <section>
                                <div id="Text8">
                                    <h1>
                                        <span>f</span>
                                        <span>o</span>
                                        <span>r</span>
                                        <span> </span>
                                        <span>R</span>
                                        <span>e</span>
                                        <span>a</span>
                                        <span>l</span>
                                        <span>i</span>
                                        <span>z</span>
                                        <span>e</span>
                                        <span>s</span>
                                        <span> </span>
                                        <span>I</span>
                                        <span>n</span>
                                        <span>n</span>
                                        <span>o</span>
                                        <span>v</span>
                                        <span>a</span>
                                        <span>t</span>
                                        <span>i</span>
                                        <span>o</span>
                                        <span>n</span>
                                        
                                    </h1>
                                </div>
                            </section>
                            <!-- top effect -->
                            <div id="new-year">
                            <h1>デジタルイノベーション<br />を実現する</h1>
                            <p class="top">株式会社キャメロットシステムパートナーズ</p>
                            </div>
                            <div class="covers15-text text-center mx-auto py-lg-5" style="max-width:780px">
                        <p class="mt-3 sub-title column">
                          クライアントやユーザーらとアイデアを出し合いながら、新しいビジネスやサービスを生み出すデジタルイノベーター。デジタルビジネスのアイデアを創出し、ビジネスモデルを設計、必要な技術を選定してアイデアの迅速な実現を目指します。</p>
                      </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->


    <section class="w3l-feature-8">
        <div class="features-main py-5">
            <div class="container py-md-5 py-4">
                <div class="row features text-center py-xl-2">
                    <div class="col-lg-3 col-sm-6 feature-1">
                        <div class="feature-body">
                            <div class="feature-images pb-sm-3 pb-1">
                                <img src="assets/images/s3.png" alt="" class="img-fluid">
                            </div>
                            <div class="feature-info mt-4">
                                <a href="#">
                                    <h3 class="feature-titel">サービス</h3>
                                </a>
                                <p class="feature-text column">システム開発・運用<br>システム部門代行（担当役員・部門長・社員）</p>
                                <a href="services.html" class="btn btn-style btn-style-normal mt-4">詳しく見る</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 feature-2 mt-sm-0 mt-5">
                        <div class="feature-body">
                            <div class="feature-images pb-sm-3 pb-1">
                                <img src="assets/images/icon2.png" alt="" class="img-fluid">
                            </div>
                            <div class="feature-info mt-4">
                                <a href="#">
                                    <h3 class="feature-titel">チームについて</h3>
                                </a>
                                <p class="feature-text column">我々はエキスパート集団である以上に、情熱とスキルを持って力を発揮する、同じ志を持つ同士といえます。</p>
                                <a href="about.html#team" class="btn btn-style btn-style-normal mt-4">詳しく見る</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 feature-3 mt-lg-0 mt-5">
                        <div class="feature-body">
                            <div class="feature-images pb-sm-3 pb-1">
                                <img src="assets/images/icon3.png" alt="" class="img-fluid">
                            </div>
                            <div class="feature-info mt-4">
                                <a href="#">
                                    <h3 class="feature-titel">企業理念</h3>
                                </a>
                                <p class="feature-text column">偉業を達成するには、揺るがぬ信念が必要です。それが、我々が成果を出せる理由です。</p>
                                <a href="about.html#mission" class="btn btn-style btn-style-normal mt-4">詳しく見る</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 feature-3 mt-lg-0 mt-5">
                        <div class="feature-body">
                            <div class="feature-images pb-sm-3 pb-1">
                                <img src="assets/images/icon4.png" alt="" class="img-fluid">
                            </div>
                            <div class="feature-info mt-4">
                                <a href="services.html#cases">
                                    <h3 class="feature-titel">ピックアップ</h3>
                                </a>
                                <p class="feature-text column">これまで培ってきた私たちの経験や実績をもとに、数々の素晴らしいお客様にご愛顧いただいております。</p>
                                <a href="services.html#cases" class="btn btn-style btn-style-normal mt-4">詳しく見る</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //feature section -->


    <!-- bg with text section -->
    <section class="w3l-covers-14 position-relative">
        <div class="covers14-block py-5">
            <div class="container py-md-5 py-4">
                <div class="covers14-text text-center mx-auto py-lg-5" style="max-width:780px">
                    <h4>業務依頼について</h4>
                    <p class="mt-3 sub-title column">
                    業務内容についてのご質問、依頼のご相談など、お気軽にお問い合わせください。我々はエキスパート集団である以上に、情熱とスキルを持って力を発揮する、同じ志を持つ同士といえます。</p>
                    <a href="contact.html" class="btn btn-style mt-5">依頼する</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //bg with text section -->

    <!-- services section -->
    <section class="w3l-content-11-main position-relative">
        <div class="content-design-11 py-5">
            <div class="container py-md-5 py-4">
                <h3 class="title-style text-center mb-md-5 mb-4">サービス</h3>
                <div class="content-sec-11">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="services-single d-flex p-sm-5 p-4">
                                <div class="service-icon mr-sm-4 mr-3">
                                    <img src="assets/images/s3.png" alt="" class="img-fluid">
                                </div>
                                <div class="services-content">
                                    <h5><a href="services.html">システム開発・運用<br />その他</a></h5>
                                    <p>オーソドックスなウォーターフォールからエンタープライズアジャイルまで、対応いたします。<br /> 
                                      
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wrap">
                            <div class="services-single d-flex p-sm-5 p-4">
                                <div class="service-icon mr-sm-4 mr-3">
                                    <img src="assets/images/s1.png" alt="" class="img-fluid">
                                </div>
                                <div class="services-content">
                                    <h5><a href="services.html">システム部門代行<br/>
（担当役員・部門長・社員）</a></h5>
                                    <p>なかなか適任者の見つからないシステム部門の社員代行の対応をいたします。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 wrap">
                            <div class="services-single d-flex p-sm-5 p-4 mb-lg-0">
                                <div class="service-icon mr-sm-4 mr-3">
                                    <img src="assets/images/s2.png" alt="" class="img-fluid">
                                </div>
                                <div class="services-content">
                                    <h5><a href="services.html">コーチング・アドバイザリ</a></h5>
                                    <p>システムに関する業務改善および効率化の推進　　　　　　</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wrap">
                            
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <a class="btn btn-style" href="services.html">詳しく見る</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- //services section -->

    

    <!-- testimonials -->
    <section class="w3l-clients-1" id="testimonials">
        <div class="cusrtomer-layout py-5">
            <div class="container py-md-5 py-4">
                
                <div class="testimonial-row">
                    <div id="owl-demo2" class="owl-two owl-carousel owl-theme mb-md-3 mb-sm-5 mb-4">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                  <div class="testi-des">
                                        
                                        <div class="peopl align-self">
                                            <h3>Solutions</h3>
                                           
                                        </div>
                                    </div>
                                    <blockquote>
                                        私たちは最大限のアウトプットを追求します。ご要望に合わせて私たちが寄与できる付加価値を常に提供します。
                                    </blockquote>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                              <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>取り組み</h3>
                                        </div>
                                    </div>
                                <div class="testimonial">
                                    <blockquote>
                                        新たなチャレンジは私たちの原動力です。より良いサービス提供を行うことが喜びであり、楽しくも真剣に取り組んでいます。
                                    </blockquote>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                              <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>沿革</h3>
                                        </div>
                                    </div>
                                <div class="testimonial">
                                    <blockquote>
                                         千里の道も一歩から ‐ いま、我々は小さなスタートを切りました。そして同じ夢を目指す同士が集まり大きな成果をめざします
                                    </blockquote>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //testimonials -->


   
    <!-- copyright -->
    <section class="w3l-copyright" style="background-color: #313331" class="w3l-copyright">
        <div class="container">
            <div class="row bottom-copies">
                <p style = "color:white" >© 2021 Camelot System Partners Ltd. All rights reserved. <a href="privacy.html">Pricacy Policy</a></p>
                <!-- //footer -->
                <!-- <div class="col-lg-4 text-right">
                    <div class="main-social-footer-29">
                        <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                        <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                        <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- //copyright -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- slider-js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/modernizr-2.6.2.min.js"></script>
    <script src="assets/js/jquery.zoomslider.min.js"></script>
    <!-- //slider-js -->

    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function () {
            $("#owl-demo2").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false,
                        loop: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the
            // class of outer div
            // The second paramter is the speed between each letter is typed.
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>
    <?php
  }
    else{
        echo "You are not authorized";
    }
}
?>
