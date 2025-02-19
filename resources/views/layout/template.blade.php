<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Notesa</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>

<body>

<!-- Sub Header -->
<div class="sub-header">
    <div class="container">
    <div class="row">
        <div class="col-lg-8 col-sm-8">
        <div class="left-content">
            <p>Notaris dan PPAT <em>Kota Manado</em></p>
        </div>
        </div>
    </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/notesa.png" style="width: auto; height:80px;" alt="">
                        NOTESA
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/" class="nav-item nav-link">Beranda</a></li>
                        <li><a href="notaris" class="nav-item nav-link">List Notaris</a></li>
                        <li><a href="kontak" class="nav-item nav-link">Hubungi Kami</a></li>
                        <li class="has-sub" style="padding-top:8px">
                            <a href="javascript:void(0)">Masuk</a>
                            <ul class="sub-menu">
                                <li><a href="login">Customer</a></li>
                                <li><a href="login-notaris">Notaris & PPAT</a></li>
                                <li><a href="login-admin">Admin</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

@yield('content')

<section class="contact-us" id="contact">
    <div class="container">
    <div class="row">
        <div class="col-lg-9 align-self-center">
        <div class="row">
            <div class="col-lg-12">
            <form id="contact" action="" method="post">
                <div class="row">
                <div class="col-lg-12">
                    <h2>Let's get in touch</h2>
                </div>
                <div class="col-lg-4">
                    <fieldset>
                    <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                </div>
                <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                </fieldset>
                </div>
                <div class="col-lg-4">
                    <fieldset>
                    <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                    <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                    <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                    </fieldset>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
        <div class="col-lg-3">
        <div class="right-info">
            <ul>
            <li>
                <h6>Phone Number</h6>
                <span>010-020-0340</span>
            </li>
            <li>
                <h6>Email Address</h6>
                <span>info@meeting.edu</span>
            </li>
            <li>
                <h6>Street Address</h6>
                <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
            </li>
            <li>
                <h6>Website URL</h6>
                <span>www.meeting.edu</span>
            </li>
            </ul>
        </div>
        </div>
    </div>
    </div>
    <div class="footer" style="background-color: white;">
    <p>NOTESA
        <br>

        <img src="assets/images/notesa.png" style="width: auto; height:10vw;" alt="">
        </p>
    </div>
</section>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
        var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            $('body, html').animate({
            scrollTop: reqSectionPos },
            800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

        };

        var checkSection = function checkSection() {
        $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
            var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
            reqLink.closest('li').addClass('active').
            siblings().removeClass('active');
            }
        });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
        e.preventDefault();
        showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
        checkSection();
        });
    </script>
</body>

</body>
</html>
