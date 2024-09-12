@extends('layouts.base')
@section('content')
<section class="car-models-section">
    <div class="spase"></div>
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
@endsection