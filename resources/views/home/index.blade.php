@extends('layouts.base')

@section('content')

{{-- //////////////////////////////////////////////////////////////// carousel ////////////////////////////////////////////////////////////////// --}}

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('carousel_img/d.jpg') }}" class="d-block w-100" alt="..."
                style="height:500px">
            <div class="carousel-caption d-none d-md-block">
                <h5>SONY 310AP Wired Headset (Black, On the Ear)</h5>
                <p>
                    Just plug in these over-the-head headphones and enjoy listening to music in high clarity wherever
                    you are, and whenever you want. </p>

                <button type="button" class="btn mt-3 mx-1 text-white " data-bs-toggle="modal"
                    data-bs-target="#exampleModal2" style="background: #43217c;">
                    Connect Us
                </button>

            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('carousel_img/e.jpg') }}" class="d-block w-100" alt="..."
                style="height:500px">
            <div class="carousel-caption d-none d-md-block">
                <h5>Gamining</h5>
                <p>Some representative placeholder content for the second slide.</p>
                <button type="button" class="btn mt-3 mx-1 text-white " data-bs-toggle="modal"
                    data-bs-target="#exampleModal2" style="background: #43217c;">
                    Connect Us
                </button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('carousel_img/f.jpg') }}" class="d-block w-100" alt="..."
                style="height:500px">
            <div class="carousel-caption d-none d-md-block">
                <h5>Florian Gagnepain</h5>
                <p>Florian Gagnepain. Bordeaux, France. Add to fav. No description provided. Photos13. Likes0.
                    Illuminated building. FlorianGagnepain. Sunrise on Paris.</p>
                <button type="button" class="btn mt-3 mx-1 text-white " data-bs-toggle="modal"
                    data-bs-target="#exampleModal2" style="background: #43217c;">
                    Connect Us
                </button>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>

{{-- //////////////////////////////////////////////////////////////// end carousel ////////////////////////////////////////////////////////////////// --}}

<div class="container-fluid">
    <div class="row">
        <h3 class="text-center text-info">Welcome to the Design Avenue </h3>
        <img src="{{ asset('carousel_img/b.jpg') }}" class="d-block w-100 mt-2" alt="..."
                style="height:700px">
    </div>

</div>

    @endsection
