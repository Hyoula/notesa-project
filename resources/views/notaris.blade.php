@extends('layout.template')
@section('content')

<section class="heading-page header-text" id="top">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <h2>List Notaris & PPAT</h2>
        </div>
    </div>
    </div>
</section>

<section class="meetings-page" id="meetings">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
            <div class="filters">
                <ul>
                <li data-filter="*"  class="active">Semua</li>
                <li data-filter=".soon">Notaris</li>
                <li data-filter=".imp">PPAT</li>
                <li data-filter=".att">Notaris - PPAT</li>
                </ul>
            </div>
            </div>
            <div class="col-lg-12">
            <div class="row grid">
                <div class="col-lg-4 templatemo-item-col all soon">
                <div class="meeting-item">
                    <div class="thumb">
                    <div class="price">
                    </div>
                    <a href="notaris-details"><img src="assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                    <a href="notaris-details"><h4>Notaris Pratama</h4></a>
                    <p>Jl. Sotasoer No.12<br>Malalayang</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all soon">
                <div class="meeting-item">
                    <div class="thumb">
                    <a href="notaris-details"><img src="assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                    <a href="notaris-details"><h4>Notaris Jaya</h4></a>
                    <p>Jl. Sotasoer No.12<br>Wanea</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all soon">
                <div class="meeting-item">
                    <div class="thumb">
                    <a href="notaris-details"><img src="assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                    <a href="notaris-details"><h4>Notaris Utama</h4></a>
                    <p>Jl. Sotasoer No.12<br>Tikala</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all soon">
                <div class="meeting-item">
                    <div class="thumb">
                    <a href="notaris-details"><img src="assets/images/meeting-04.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                    <a href="notaris-details"><h4>Notaris Sejahtera</h4></a>
                    <p>Jl. Sotasoer No.12<br>Karomabasan</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all imp">
                <div class="meeting-item">
                    <div class="thumb">
                    <a href="notaris-details"><img src="assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                    <a href="notaris-details"><h4>PPAT Utama</h4></a>
                    <p>Jl. Sotasoer No.12<br>Wane</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all imp">
                <div class="meeting-item">
                    <div class="thumb">
                    <a href="notaris-details"><img src="assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                    <a href="notaris-details"><h4>PPAT Nusantara</h4></a>
                    <p>Jl. Sotasoer No.12<br>Manado</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all imp">
                <div class="meeting-item">
                    <div class="thumb">
                    <a href="notaris-details"><img src="assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                    <a href="notaris-details"><h4>PPAT Budayono</h4></a>
                    <p>Jl. Sotasoer No.12<br>Malalayang</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all att">
                <div class="meeting-item">
                    <div class="thumb">
                    <a href="notaris-details"><img src="assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                    <a href="notaris-details"><h4>Notari & PPAT Sejahtera</h4></a>
                    <p>Jl. Sotasoer No.12<br>Malalayang</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all att">
                <div class="meeting-item">
                    <div class="thumb">
                    <a href="notaris-details"><img src="assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                    <a href="notaris-details"><h4>Notaris & PPAT Makmur</h4></a>
                    <p>Jl. Sotasoer No.12<br>Tikala</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-12">
            <div class="pagination">
                <ul>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>

@endsection
