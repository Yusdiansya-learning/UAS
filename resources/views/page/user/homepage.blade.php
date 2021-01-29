@extends('index')
@section('content')
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg pl-0 navbar-light">
            <a class="navbar-brand" href="#">
                <img src="asset/orelly.png" alt="" loading="lazy">
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
        <div class="teks">
            <div class="row">
                <div class="col">
                    <div class="left">
                        <p class="grid"></p>
                        <p class="text font-weight-normal">ORELY STUDIO</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <h1 class="lorem text-white" id="big-teks" style="font-size: 50px;">We Lorem ipsum
                        dolor<br>adipisicing
                        elit<br>sed do
                        eiusmod tempor<br>incididunt</h1>
                </div>
            </div>
            <div class="row sim mb-5">
                <div class="col">
                    <button type="button"
                        class="btn btn-light btn-xs text-white bg-transparent font-weight-bold">Find
                        Out</button>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="dua pt-5">
    <div class="container">
        <div class="row">
            <div class="col kiri">
                <div class="left">
                    <p class="grid" style="background-color: #1f2960;"></p>
                    <p class="text font-weight-normal" style="color: #1f2960;">OUR SERVICES</p>
                </div>
                <div class="tengah">
                    <h1 class="display-4 font-weight-bold mb-5"
                        style="font-weight: 800 !important; font-size: 40px; letter-spacing: 1.61px; line-height: 1.65; color: #1f2960 !important;">
                        We assist with all<br>your Design needs.</h1>
                    <button type="button" class="btn btn-warning btn-xs text-white font-weight-bold"
                        style="font-size: 15px; padding: 17px 33px 17px 33px !important; color: #202943 !important; font-weight: 600 !important;">MORE
                        DETAILS</button>
                </div>
            </div>
            <div class="col kanan">
                <div class="row row-cols-2">
                    <div class="col mb-5">
                        <img src="asset/ui-ux-icon.svg" alt="">
                        <p>UI/UX Design</p>
                    </div>
                    <div class="col mb-5 ">
                        <img src="asset/code-icon.svg" alt="">
                        <p>Development</p>
                    </div>
                    <div class="col mb-5 ">
                        <img src="asset/graphic-icon.svg" alt="">
                        <p>Graphic Design</p>
                    </div>
                    <div class="col mb-5 ">
                        <img src="asset/motion-icon.svg" alt="">
                        <p>Motion Graphic</p>
                    </div>
                    <div class="col mb-5 ">
                        <img src="asset/illustration-icon.svg" alt="">
                        <p>Illustrations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gambar">
        <img class="tangan" src="asset/our-services.svg" alt="">
    </div>
</section>

<section class="tiga">
    <div class="container">
        <div class="row">
            <div class="col kiri">
                <div class="left">
                    <p class="grid" style="background-color: #1f2960;"></p>
                    <p class="text font-weight-normal" style="color: #1f2960;">OUR CONCERN</p>
                </div>
                <h1 class="display-4 font-weight-bold mb-5"
                    style="font-weight: 800 !important; font-size: 40px; letter-spacing: 1.61px; line-height: 1.65; color: #1f2960 !important;">
                    We always<br>care about details.</h1>
                <div class="row mb-5">
                    <div class="col">
                        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et</h5>
                    </div>
                    <div class="col">
                        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad</h5>
                    </div>
                </div>
                <button type="button" class="btn btn-warning btn-xs text-white font-weight-bold"
                    style="font-size: 15px; padding: 17px 33px 17px 33px !important; color: #202943 !important; font-weight: 600 !important;">CONTACT
                    US</button>
            </div>
            <div class="col kanan my-auto">
                <img src="asset/quality.svg" alt="right-image">
            </div>
        </div><br><br><br>
    </div>
</section>

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
        @foreach ($project as $item)
        <div class="row bawah mb-5">

            <div class="col">
                <img class="w-100" src="{{Storage::url($item->image)}}" alt="carding">
            </div>
            <div class="col two my-auto ml-5">
                <h1 class="display-4 font-weight-bold"
                    style="margin-left: 80px; font-weight: 800 !important; font-size: 35px; letter-spacing: 1.61px; line-height: 1.65; color: #1f2960 !important;">
                    {{$item->detail}}</h1>
                <h5>{{$item->content}} </h5>
                <button type="button" class="btn btn-xs text-white font-weight-bold bg-transparent"
                    style="border-color: #1f2960; margin-left: 80px; margin-top: 25px; font-size: 15px; padding: 17px 33px 17px 33px !important; color: #202943 !important; font-weight: 600 !important;">VIEW
                    DETAILS</button>
            </div>

        </div>
        @endforeach
        <div class="row bawah-lagi">
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

<section class="lima">
    <div class="container ">
        <div class="row row-cols-lg-2 row-cols-sm-1 row-cols-1 border-bottom pb-5">
            <div class="col">
                <div class="gambar mb-5">
                    <img class="" src="asset/left-quote.png" alt="">
                </div>
                <h1 class="display-4 font-weight-bold"
                    style="margin-bottom: 70px; font-weight: 800 !important; font-size: 40px; letter-spacing: 1.61px; line-height: 1.65; color: #1f2960 !important;">
                    Client who<br> already trust us.</h1>
            </div>
            <div class="col lagi my-auto">
                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod.</h4>
                <div class="sip d-flex flex-row mt-3">
                    <div class="d-highlight mr-4">
                        <img src="asset/img-2.jpg">
                    </div>
                    <div class="d-highlight">
                        <h5>Fransesca Findblair,</h5>
                        <p>Web Developer at Nusa Sciences</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row akhir" style="padding: 55px 0;">
            <div class="zip d-highlight mr-auto">
                <div class="col">
                    <h1 class="font-weight-bold"
                        style="padding-top: 15px; letter-spacing: 2px; font-weight: 800 !important; font-size: 20px; color: #1f2960 !important;">
                        WE WORK
                        WITH</h1>
                </div>
            </div>
            <div class="bip d-highlight">
                <div class="row">
                    <div class="col"><img class="w-90" src="asset/comapny1.png"></div>
                    <div class="col"><img class="w-90" src="asset/comapny2.png"></div>
                    <div class="col"><img class="w-90" src="asset/comapny1.png"></div>
                    <div class="col"><img class="w-90" src="asset/comapny2.png"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="kotak"></div>
</section>
@endsection
