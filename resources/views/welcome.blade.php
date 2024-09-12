@extends('layouts.base')

@section('content')
<section class="car-slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('img/car2.jpg') }}" alt="Auto Model 1">
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
<section class="car-models-section">
    <h2 class="logo-modellen">KN</h2>
    <h2 class="section-title">Modellen:</h2>
    <div class="car-models-container">
        <!-- Auto Model 1 -->
        <div class="car-model">
            <img src="{{ asset('img/car2.jpg') }}" alt="Auto Model 1" class="car-img">
            <h2 class="car-model-title">Model 1</h2>
            <p><strong>Brandstofverbruik:</strong> 5.6 l/100 km</p>
            <p><strong>CO2-uitstoot:</strong> 130 g/km</p>
            <a href="#" class="test-drive-button">Proefritaanvraag</a>
        </div>
        <!-- Auto Model 2 -->
        <div class="car-model">
            <img src="{{ asset('img/car1.jpg') }}" alt="Auto Model 2" class="car-img">
            <h2 class="car-model-title">Model 2</h2>
            <p><strong>Brandstofverbruik:</strong> 4.8 l/100 km</p>
            <p><strong>CO2-uitstoot:</strong> 115 g/km</p>
            <a href="#" class="test-drive-button">Proefritaanvraag</a>
        </div>
        <!-- Auto Model 3 -->
        <div class="car-model">
            <img src="{{ asset('img/car2.jpg') }}" alt="Auto Model 3" class="car-img">
            <h2 class="car-model-title">Model 3</h2>
            <p><strong>Brandstofverbruik:</strong> 6.0 l/100 km</p>
            <p><strong>CO2-uitstoot:</strong> 140 g/km</p>
            <a href="#" class="test-drive-button">Proefritaanvraag</a>
        </div>
    </div>
</section>
<div class="white-strip"></div>
<section class="blogs">
    <h2 class="BLOG-TITLE">Blogs</h2>
    <div class="blogs-container">
        <div class="blog">
            <img src="{{ asset('img/blog1.jpg') }}" alt="Blog 1 Image" class="blog-img">
            <h2>De toekomst van autorijden: Autonome technologieën van Kia</h2>
            <p>Ontdek hoe Kia zich voorbereidt op de toekomst van mobiliteit met hun vooruitstrevende ontwikkeling van autonome rijtechnologieën, die streven naar verbeterde veiligheid, gemak en efficiëntie op de weg.</p>
        </div>
        <div class="blog">
            <img src="{{ asset('img/blog2.jpg') }}" alt="Blog 2 Image" class="blog-img">
            <h2>Elektrische innovaties van Kia: een duurzame toekomst op wielen</h2>
            <p>Leer meer over de baanbrekende elektrische voertuigen van Kia, inclusief hun volledig elektrische en hybride modellen, en ontdek hoe het merk bijdraagt aan een groenere toekomst voor mobiliteit.</p>
        </div>
        <div class="blog">
            <img src="{{ asset('img/blog3.jpg') }}" alt="" class="blog-img">
            <h2>De opkomst van Kia: een reis door de geschiedenis</h2>
            <p>Ontdek de boeiende geschiedenis van Kia, het Zuid-Koreaanse automerk dat begon als een producent van fietsonderdelen en uitgroeide tot een wereldwijd bekend automerk met een focus op kwaliteit en betrouwbaarheid.</p>
        </div>
    </div>
</section>
<div class="white-strip"></div>
@endsection