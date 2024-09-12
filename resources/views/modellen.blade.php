@extends('layouts.base')

@section('content')
<section class="car-models-section">
    <div class="spase"></div>
    <h2 class="section-title">Modellen:</h2>
    <div class="create-auto-button-container">
        <a href="/cars/create" class="create-auto-button">Create Auto</a>
    </div>

    <!-- Display Success Message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="car-models-container">
        @foreach($cars as $car)
        <!-- Auto Model -->
        <div class="car-model">
            <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->title }}" class="car-img">
            <h2 class="car-model-title">{{ $car->title }}</h2>
            <p><strong>Naam:</strong> {{ $car->naam }}</p>
            <p><strong>Brandstofverbruik:</strong> {{ $car->brandstofverbruik }} l/100 km</p>
            <p><strong>CO2-uitstoot:</strong> {{ $car->co2 }} g/km</p>
            <p><strong>Prijs:</strong> €{{ number_format($car->prijs, 2, ',', '.') }}</p>
            <a href="#" class="test-drive-button">Proefritaanvraag</a>

            <!-- Bewerkknop -->
            <a href="{{ route('cars.edit', $car->id) }}" class="edit-button">Bewerk</a>
            
            <!-- Delete Button Form -->
            <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button">Verwijder</button>
            </form>
        </div>
        @endforeach
    </div>
</section>
<div class="white-strip"></div>
@endsection
