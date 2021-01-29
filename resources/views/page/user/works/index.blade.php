@extends('index')
@section('content')
<div class="works">
    <div class="container">
        <nav class="navbar navbar-expand-lg pl-0 navbar-light">
            <a class="navbar-brand" href="/">
                <img src="asset/orelly2.png"  alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="{{route('services.index')}}">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('works.index')}}">WORKS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#sip" style="color: #1f2960 !important;">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="kotak"></div>
</div>

<section class="empat">
    <div class="container">
        <div class="row atas">
            <div class="col">
                <div class="left" style="margin-top: 60px;">
                    <p class="grid" style="background-color: #1f2960;"></p>
                    <p class="text font-weight-normal" style="color: #1f2960;">OUR WORK</p>
                </div>
                <h1 class="display-4 font-weight-bold"
                    style="margin-bottom: 90px; font-weight: 800 !important; font-size: 40px; letter-spacing: 1.61px; line-height: 1.65; color: #1f2960 !important;">
                    We have helped to transform client ideas<br>into efficient and beautiful designs.</h1>
            </div>
        </div>
        <div class="row bawah mb-5">
            <div class="col">
                <img class="w-100" src="asset/FYT-Thumbnail@2x.jpg" alt="carding">
            </div>
            <div class="col two my-auto ml-5">
                <h1 class="display-4 font-weight-bold"
                    style="margin-left: 80px; font-weight: 800 !important; font-size: 35px; letter-spacing: 1.61px; line-height: 1.65; color: #1f2960 !important;">
                    FYT PROJECT</h1>
                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna enim minim veniam,
                    quis nostrud exercitation ullamco onsectetur </h5>
                <button type="button" class="btn btn-xs text-white font-weight-bold bg-transparent"
                    style="border-color: #1f2960; margin-left: 80px; margin-top: 25px; font-size: 15px; padding: 17px 33px 17px 33px !important; color: #202943 !important; font-weight: 600 !important;">VIEW
                    DETAILS</button>
            </div>
        </div>
        <div class="row bawah-lagi" style="margin-bottom: 110px;">
            <div class="col zatu my-auto">
                <h1 class="display-4 font-weight-bold"
                    style="margin-left: 60px; font-weight: 800 !important; font-size: 40px; letter-spacing: 1.61px; line-height: 1.65; color: #1f2960 !important;">
                    PINVOICE</h1>
                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna enim minim veniam,
                    quis nostrud exercitation ullamco onsectetur </h5>
                <button type="button" class="btn btn-xs text-white font-weight-bold bg-transparent"
                    style="border-color: #1f2960; margin-left: 60px; margin-top: 25px; font-size: 15px; padding: 17px 33px 17px 33px !important; color: #202943 !important; font-weight: 600 !important;">VIEW
                    DETAILS</button>
            </div>
            <div class="col dwua">
                <img class="w-100" src="asset/FYT-Thumbnail@2x.jpg" alt="">
            </div>
        </div>
    </div>
</section>
@endsection
