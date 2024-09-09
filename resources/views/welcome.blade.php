@extends('layouts.base')

@section('content')
<section class="car-slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('img/car1.jpg') }}" alt="Auto Model 1">
                <div class="content-overlay">
                    <h3>Model 1</h3>
                    <p>Beschrijving van Model 1. Een luxe auto met alle nieuwste functies.</p>
                    <a href="#" class="btn">Meer Info</a>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('img/car1.jpg') }}" alt="Auto Model 1">
                <div class="content-overlay">
                    <h3>Model 2</h3>
                    <p>Beschrijving van Model 1. Een luxe auto met alle nieuwste functies.</p>
                    <a href="#" class="btn">Meer Info</a>
                </div>
            </div>
            <!-- Voeg hier meer slides toe -->
        </div>
        <!-- Navigatiepijlen -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>


    <section>
        <h1>Section 2</h1>
        <p>Dit is de inhoud van sectie 2.</p>
    </section>

    <section>
        <h1>Section 3</h1>
        <p>Dit is de inhoud van sectie 3.</p>
    </section>
@endsection
