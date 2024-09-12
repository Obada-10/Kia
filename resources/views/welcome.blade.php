@extends('layouts.base')

@section('content')
<section class="car-slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($cars as $car)
                <div class="swiper-slide">
                    <!-- Image uit de database -->
                    <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->title }}">
                    <div class="content-overlay">
                        <!-- Dynamische titel en beschrijving -->
                        <h3>{{ $car->title }}</h3>
                        <p>{{ $car->naam }} - {{ $car->brandstofverbruik }} l/100 km, {{ $car->co2 }} g/km</p>
                        <a href="#" class="btn">Proefritaanvraag</a>
                    </div>
                </div>
            @endforeach
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
        <div class="car-models-container">
            @foreach($cars as $car)
            <!-- Auto Model -->
            <div class="car-model">
                <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->title }}" class="car-img">
                <h2 class="car-model-title">{{ $car->title }}</h2>
                <p><strong>Naam:</strong> {{ $car->naam }}</p>
                <p><strong>Brandstofverbruik:</strong> {{ $car->brandstofverbruik }} l/100 km</p>
                <p><strong>CO2-uitstoot:</strong> {{ $car->co2 }} g/km</p>
                <p><strong>Prijs:</strong> €{{ number_format($car->prijs, 0, ',') }}</p>
                <a href="#" class="test-drive-button">Proefritaanvraag</a>
            </div>
            @endforeach
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