@extends('index')
@section('content')
<div class="services">
    <div class="container">
        <nav class="navbar navbar-expand-lg pl-0 navbar-light">
            <a class="navbar-brand" href="/">
                <img src="asset/orelly.png"  alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="services.html">SERVICES</a>
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
        <div class="down-teks">
            <div class="left">
                <p class="grid"></p>
                <p class="text font-weight-normal">ORELY STUDIO</p>
            </div>
            <h1>OUR SERVICES</h1>
            <h5>We assist with all your design needs.</h5>
        </div>
        <div class="col kanan">
            <div class="row row-cols-5">
                <div class="col mb-5">
                    <img src="asset/ui-ux-putih.svg" alt="">
                    <p>UI/UX Design</p>
                </div>
                <div class="col mb-5 ">
                    <img src="asset/code-putih.svg" alt="">
                    <p>Development</p>
                </div>
                <div class="col mb-5 ">
                    <img src="asset/graphic-putih.svg" alt="">
                    <p>Graphic Design</p>
                </div>
                <div class="col mb-5 ">
                    <img src="asset/motion-putih.svg" alt="">
                    <p>Motion Graphic</p>
                </div>
                <div class="col mb-5 ">
                    <img src="asset/illustration-putih.svg" alt="">
                    <p>Illustrations</p>
                </div>
            </div>
        </div>
        <div class="img-bawah">
            <img src="asset/ig.png" alt="">
            <img src="asset/fb.png" alt="">
            <img src="asset/tw.png" alt="">
        </div>
    </div>
    <div class="kotak"></div>
</div>

<section class="services-2">
    <div class="container">
        <div class="row row-cols-2">
            <div class="col change">
                <img src="asset/uo-ux.svg" alt="">
            </div>
            <div class="col down">
                <h1>UI/UX Design</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et incididunt </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, sint! Esse repellendus, nulla optio aut, aspernatur, deleniti temporibus provident quos eius animi suscipit </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus tenetur vitae eos quis corporis incidunt Ipsam fugiat asperiores sit optio temporibus necessitatibus eos? Dolore </p>
            </div>
        </div>
        <div class="row pow row-cols-2">
            <div class="col down">
                <h1>Development</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et incididunt </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, sint! Esse repellendus, nulla optio aut, aspernatur, deleniti temporibus provident quos eius animi suscipit </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus tenetur vitae eos quis corporis incidunt Ipsam fugiat asperiores sit optio temporibus necessitatibus eos? Dolore </p>
            </div>
            <div class="col">
                <img src="asset/development.svg" alt="">
            </div>
        </div>
        <div class="row row-cols-2">
            <div class="col change">
                <img src="asset/graphic-1.svg" alt="">
            </div>
            <div class="col down">
                <h1>Graphic Design</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et incididunt </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, sint! Esse repellendus, nulla optio aut, aspernatur, deleniti temporibus provident quos eius animi suscipit </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus tenetur vitae eos quis corporis incidunt Ipsam fugiat asperiores sit optio temporibus necessitatibus eos? Dolore </p>
            </div>
        </div>
        <div class="row pow row-cols-2">
            <div class="col down">
                <h1>Motion Graphic</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et incididunt </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, sint! Esse repellendus, nulla optio aut, aspernatur, deleniti temporibus provident quos eius animi suscipit </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus tenetur vitae eos quis corporis incidunt Ipsam fugiat asperiores sit optio temporibus necessitatibus eos? Dolore </p>
            </div>
            <div class="col">
                <img src="asset/motion-1.svg" alt="">
            </div>
        </div>
        <div class="row row-cols-2">
            <div class="col">
                <img src="asset/illustration-2.svg" alt="">
            </div>
            <div class="col down">
                <h1>Illustrations</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et incididunt </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, sint! Esse repellendus, nulla optio aut, aspernatur, deleniti temporibus provident quos eius animi suscipit </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus tenetur vitae eos quis corporis incidunt Ipsam fugiat asperiores sit optio temporibus necessitatibus eos? Dolore </p>
            </div>
        </div>
    </div>
</section>

@endsection
