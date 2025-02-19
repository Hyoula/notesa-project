@extends('layout.template')
@section('content')

<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="assets/images/5637951-uhd_3840_2160_24fps.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="caption">
            <h2>SELAMAT DATANG</h2>
            <p>Memudahkan anda untuk mencari Notaris dan PPAT serta memilih notaris yang tepat</p>
        </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- ***** Main Banner Area End ***** -->

<section class="services">
<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <div class="owl-service-item owl-carousel">

        <div class="item">
            <div class="icon">
            <img src="assets/images/service-icon-01.png" alt="">
            </div>
            <div class="down-content">
            <h4>Surat Tanah</h4>
            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
            </div>
        </div>

        <div class="item">
            <div class="icon">
            <img src="assets/images/service-icon-02.png" alt="">
            </div>
            <div class="down-content">
            <h4>Hak Kepemilikan</h4>
            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
            </div>
        </div>

        <div class="item">
            <div class="icon">
            <img src="assets/images/service-icon-03.png" alt="">
            </div>
            <div class="down-content">
            <h4>Hak Jual Beli</h4>
            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
            </div>
        </div>

        <div class="item">
            <div class="icon">
            <img src="assets/images/service-icon-02.png" alt="">
            </div>
            <div class="down-content">
            <h4>Akta</h4>
            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
            </div>
        </div>

        </div>
    </div>
    </div>
</div>
</section>

<!-- <section class="upcoming-meetings" id="meetings">
<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <div class="section-heading">
        <h2>Upcoming Meetings</h2>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="categories">
        <h4>Meeting Catgories</h4>
        <ul>
            <li><a href="#">Sed tempus enim leo</a></li>
            <li><a href="#">Aenean molestie quis</a></li>
            <li><a href="#">Cras et metus vestibulum</a></li>
            <li><a href="#">Nam et condimentum</a></li>
            <li><a href="#">Phasellus nec sapien</a></li>
        </ul>
        <div class="main-button-red">
            <a href="meetings.html">All Upcoming Meetings</a>
        </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="row">
        <div class="col-lg-6">
            <div class="meeting-item">
            <div class="thumb">
                <div class="price">
                <span>$22.00</span>
                </div>
                <a href="meeting-details.html"><img src="assets/images/meeting-01.jpg" alt="New Lecturer Meeting"></a>
            </div>
            <div class="down-content">
                <div class="date">
                <h6>Nov <span>10</span></h6>
                </div>
                <a href="meeting-details.html"><h4>New Lecturers Meeting</h4></a>
                <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
            </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="meeting-item">
            <div class="thumb">
                <div class="price">
                <span>$36.00</span>
                </div>
                <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg" alt="Online Teaching"></a>
            </div>
            <div class="down-content">
                <div class="date">
                <h6>Nov <span>24</span></h6>
                </div>
                <a href="meeting-details.html"><h4>Online Teaching Techniques</h4></a>
                <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
            </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="meeting-item">
            <div class="thumb">
                <div class="price">
                <span>$14.00</span>
                </div>
                <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt="Higher Education"></a>
            </div>
            <div class="down-content">
                <div class="date">
                <h6>Nov <span>26</span></h6>
                </div>
                <a href="meeting-details.html"><h4>Higher Education Conference</h4></a>
                <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
            </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="meeting-item">
            <div class="thumb">
                <div class="price">
                <span>$48.00</span>
                </div>
                <a href="meeting-details.html"><img src="assets/images/meeting-04.jpg" alt="Student Training"></a>
            </div>
            <div class="down-content">
                <div class="date">
                <h6>Nov <span>30</span></h6>
                </div>
                <a href="meeting-details.html"><h4>Student Training Meetup</h4></a>
                <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section> -->
<section class="our-courses" id="courses">
<div class="container" style="margin-top: 80px;">
    <div class="row">
    <div class="col-lg-12">
        <div class="section-heading">
        <h2>Layanan Notaris</h2>
        <p style="color: white;">Notaris merupakan pejabat umum yang memiliki wewenang untuk menyusun akta autentik. Akta autentik merupakan dokumen perjanjian yang dibuat dalam format yang telah diatur oleh undang-undang oleh pejabat berwenang, yaitu notaris, di tempat kedudukannya.
            Dalam menjalankan tugasnya, seorang notaris harus bertindak dengan jujur, cermat, independen, tidak memihak, serta menjaga kepentingan semua pihak yang terlibat dalam perbuatan hukum. Notaris berperan ganda: pertama, ia bersifat pasif dengan merumuskan apa yang diinginkan pihak-pihak dalam perjanjian, dan kedua, notaris harus aktif dalam memberikan instruksi guna memastikan perlindungan hukum bagi semua pihak yang terlibat dalam perjanjian atau akta tersebut.</p>
        </div>
    </div>
</div>
</section>

<section class="apply-now" id="apply">
<div class="container">
    <div class="row">
    <div class="col-lg-6 align-self-center">
        <div class="row">
        <div class="col-lg-12">
            <div class="item">
            <h3>DAPATKAN PELAYANAN PENUH</h3>
            <p>Daftarkan diri anda untuk masuk sebagai Customer</p>
            <div class="main-button-red">
                <div class="scroll-to-section"><a href="#contact">Masuk sebagai Customer</a></div>
            </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
            <h3>BERIKAN PELAYANAN TERBAIK</h3>
            <p>Daftarkan akunmu agar dapat masuk sebagai Notari & PPAT</p>
            <div class="main-button-yellow">
                <div class="scroll-to-section"><a href="#contact">Masuk sebagai Notaris/PPAT</a></div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="accordions is-first-expanded">
        <article class="accordion">
            <div class="accordion-head">
                <span>Tentang Notesa</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>If you want to get the latest collection of HTML CSS templates for your websites, you may visit Too CSS website. If you need a working contact form script, please visit our contact page for more info.</p>
                </div>
            </div>
        </article>
        <article class="accordion">
            <div class="accordion-head">
                <span>Apa itu Notaris</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>Etiam posuere metus orci, vel consectetur elit imperdiet eu. Cras ipsum magna, maximus at semper sit amet, eleifend eget neque. Nunc facilisis quam purus, sed vulputate augue interdum vitae. Aliquam a elit massa.<br><br>
                    Nulla malesuada elit lacus, ac ultricies massa varius sed. Etiam eu metus eget nibh consequat aliquet. Proin fringilla, quam at euismod porttitor, odio odio tempus ligula, ut feugiat ex erat nec mauris. Donec viverra velit eget lectus sollicitudin tincidunt.</p>
                </div>
            </div>
        </article>
        <article class="accordion">
            <div class="accordion-head">
                <span>Apa itu PPAT</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>Ut vehicula mauris est, sed sodales justo rhoncus eu. Morbi porttitor quam velit, at ullamcorper justo suscipit sit amet. Quisque at suscipit mi, non efficitur velit.<br><br>
                    Cras et tortor semper, placerat eros sit amet, porta est. Mauris porttitor sapien et quam volutpat luctus. Nullam sodales ipsum ac neque ultricies varius.</p>
                </div>
            </div>
        </article>
        <article class="accordion last-accordion">
            <div class="accordion-head">
                <span>Apa perbedaan Notaris dan PPAT</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>Maecenas suscipit enim libero, vel lobortis justo condimentum id. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br><br>
                    Sed eleifend metus sit amet magna tristique, posuere laoreet arcu semper. Nulla pellentesque ut tortor sit amet maximus. In eu libero ullamcorper, semper nisi quis, convallis nisi.</p>
                </div>
            </div>
        </article>
    </div>
    </div>
    </div>
</div>
</section>

<section class="our-courses" id="courses">
<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <div class="section-heading">
        <h2>Notaris dan PPAT di Manado</h2>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="owl-courses-item owl-carousel">
        <div class="item">
            <div class="down-content">
            <h4>Morbi tincidunt elit vitae justo rhoncus</h4>
            <div class="info">
                <div class="row">
                <div class="col-8">
                    <ul>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    </ul>
                </div>
                <div class="col-4">
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="down-content">
            <h4>Curabitur molestie dignissim purus vel</h4>
            <div class="info">
                <div class="row">
                <div class="col-8">
                    <ul>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    </ul>
                </div>
                <div class="col-4">
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="down-content">
            <h4>Nulla at ipsum a mauris egestas tempor</h4>
            <div class="info">
                <div class="row">
                <div class="col-8">
                    <ul>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    </ul>
                </div>
                <div class="col-4">
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="down-content">
            <h4>Aenean molestie quis libero gravida</h4>
            <div class="info">
                <div class="row">
                <div class="col-8">
                    <ul>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    </ul>
                </div>
                <div class="col-4">
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="down-content">
            <h4>Lorem ipsum dolor sit amet adipiscing elit</h4>
            <div class="info">
                <div class="row">
                <div class="col-8">
                    <ul>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    </ul>
                </div>
                <div class="col-4">
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="down-content">
            <h4>TemplateMo is the best website for Free CSS</h4>
            <div class="info">
                <div class="row">
                <div class="col-8">
                    <ul>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    </ul>
                </div>
                <div class="col-4">
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="down-content">
            <h4>Web Design Templates at your finger tips</h4>
            <div class="info">
                <div class="row">
                <div class="col-8">
                    <ul>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    </ul>
                </div>
                <div class="col-4">
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="down-content">
            <h4>Please visit our website again</h4>
            <div class="info">
                <div class="row">
                <div class="col-8">
                    <ul>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    </ul>
                </div>
                <div class="col-4">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>

<section class="our-facts">
<div class="container">
    <div class="row">

    <div class="peta">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15828.791995205935!2d112.6992025!3d-7.3316467!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x910262b64fe4f104!2sTHE%20BURGER!5e0!3m2!1sid!2sid!4v1580975964293!5m2!1sid!2sid" width="100%" height="400vw" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    </div>
</div>
</section>


@endsection
