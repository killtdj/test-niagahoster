@extends('layouts.main')

@section('content')
@include('layouts.header')
@include('components.hero')
<div class="divider"></div>
<div class="container">
    <div class="row d-flex justify-content-center">
        <table class="table table-responsive table-condensed my-5">
            <tr>
                <td class="align-middle text-center"><img
                        src="{{ asset('image/svg/illustration-banner-PHP-zenguard01.svg') }}" class="img-fluid" alt="">
                </td>
                <td class="align-middle text-center"><img src="{{ asset('image/svg/icon-composer.svg') }}"
                        class="img-fluid" alt=""></td>
                <td class="align-middle text-center"><img src="{{ asset('image/svg/icon-php-hosting-ioncube.svg') }}"
                        class="img-fluid" alt="">
                </td>
            </tr>
            <tr>
                <td class="caption-text text-center">
                    <p class="card-text">PHP Zend Guard Loader</p>
                </td>
                <td class="caption-text text-center">
                    <p class="card-text">PHP Composer</p>
                </td>
                <td class="caption-text text-center">
                    <p class="card-text">PHP IonCube Loader</p>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="divider-space"></div>

@include('components.pricing-table')

<div class="section text-center mt-5">
    <span class="section-title">Powerful dengan Limit PHP yang Lebih Besar</span>
</div>
<div class="description-box">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 align-items-end">
            <table class="table table-striped">
                <tr>
                    <td style="width: 10%"><i class="fas fa-check-circle text-success align-items-start"></i>
                    </td>
                    <td class="text-center"><span>Max Execution Time 300s</span></td>
                </tr>
                <tr>
                    <td style="width: 10%"><i class="fas fa-check-circle text-success align-items-start"></i>
                    </td>
                    <td class="text-center"><span>Max Execution Time 300s</span></td>
                </tr>
                <tr>
                    <td style="width: 10%"><i class="fas fa-check-circle text-success align-items-start"></i>
                    </td>
                    <td class="text-center"><span>PHP Memory Limit 1024Mb</span></td>
                </tr>
            </table>
        </div>
        <div class="col-md-4 align-items-start">
            <table class="table table-striped">
                <tr>
                    <td style="width: 10%"><i class="fas fa-check-circle text-success align-items-start"></i>
                    </td>
                    <td class="text-center"><span>Post Max Size 128Mb</span></td>
                </tr>
                <tr>
                    <td style="width: 10%"><i class="fas fa-check-circle text-success align-items-start"></i>
                    </td>
                    <td class="text-center"><span>Upload Max File Size 128Mb</span></td>
                </tr>
                <tr>
                    <td style="width: 10%"><i class="fas fa-check-circle text-success align-items-start"></i>
                    </td>
                    <td class="text-center"><span>Max Input Vars 2500</span></td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>
<div class="divider-small p-4"></div>
<div class="container">
    <div class="row justify-content-md-center m-5">

        <div class="section text-center">
            <span class="section-title">Semua Paket Hosting Sudah Termasuk</span>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('image/svg/icon PHP Hosting_PHP Semua Versi.svg') }}"
                        class="img-section img-fluid" alt="">
                    <h5 class="card-title">PHP Semua Versi</h5>
                    <p class="card-text">Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka anda!</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('image/svg/icon PHP Hosting_My SQL.svg') }}" class="img-section img-fluid"
                        alt="">
                    <h5 class="card-title">MySQL Versi 5.6</h5>
                    <p class="card-text">Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('image/svg/icon PHP Hosting_CPanel.svg') }}" class="img-section img-fluid"
                        alt="">
                    <h5 class="card-title">Panel Hosting cPanel</h5>
                    <p class="card-text">Kelola website dengan panel canggih yang familiar di hati Anda.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('image/svg/icon PHP Hosting_garansi uptime.svg') }}"
                        class="img-section img-fluid" alt="">
                    <h5 class="card-title">Garansi Uptime 99,9%</h5>
                    <p class="card-text">Data center yang mendukung kelangsungan website anda 24/7.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('image/svg/icon PHP Hosting_InnoDB.svg') }}" class="img-section img-fluid"
                        alt="">
                    <h5 class="card-title">Database InnoDB Unlimited</h5>
                    <p class="card-text">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan anda.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('image/svg/icon PHP Hosting_My SQL remote.svg') }}" class="img-section img-fluid"
                        alt="">
                    <h5 class="card-title">Wildcard Remote Mysql</h5>
                    <p class="card-text">Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="divider-small"></div>
<div class="container support-laravel">
    <div class="section text-center m-5">
        <span class="section-title">Mendukung Penuh Framework Laravel</span>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p>Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting mursah kami
                mendukung penuh framework favorit anda.
            </p>
            <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Install Laravel <b>1
                        klik</b> dengan Softaculous Installer.</li>
                <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Mendukung ekstensi
                    <b>PHP MCrypt, phar, mbstring, json,</b> dan <b>Fileinfo</b>.</li>
                <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Tersedia
                    <b>Composer</b> dan <b>SSH</b> untuk menginstall packages pilihan anda.</li>
            </ul>
            <p class="section-note">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis.</p>
            <button class="btn btn-primary rounded-pill button-pilih">Pilih Hosting Anda</button>
        </div>
        <div class="col-md-6 section-second">
            <img src="{{ asset('image/svg/illustration banner support laravel hosting.svg') }}" class="img-fluid"
                width="466" alt="">
        </div>
    </div>
</div>
<div class="container">
    <div class="section text-center m-5">
        <span class="section-title">Modul Lengkap Untuk Menjalankan Bisnis PHP Anda.</span>
    </div>
    <div class="text-center">
        <button class="btn btn-outline-primary rounded-pill text-center btn-selengkapnya">Selengkapnya</button>
    </div>
</div>
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6 section-start">
            <span>Linux Hosting yang stabil dengan Teknologi LVE.</span>
            <p class="mt-2">SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan teknologi
                <b>LVE
                    CloudLinux</b> untuk stabilitas server Anda. Dilengkapi dengan <b>SSD</b> untuk kecepatan
                <b>MySQL</b> dan caching, Apache load balancer berbasis LiteSpeed Technologies, <b>CageFS</b>
                security, <b>Raid-10</b> protection dan auto backup untuk keamanan website PHP Anda.
            </p>
            <button class="btn btn-primary rounded-pill button-pilih">Pilih Hosting Anda</button>
        </div>
        <div class="col-md-6 section-second">
            <img src="{{ asset('image/Image support.png') }}" width="520" class="img-fluid" alt="">
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection