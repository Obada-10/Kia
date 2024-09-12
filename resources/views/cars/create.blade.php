@extends('layouts.base')

@section('content')
<div class="w-full p-8 text-white bg-[#05141F]">
    <div class="spase"></div>
    <div class="container max-w-lg mx-auto">
    <h2 class="text-2xl font-bold mb-6">Voeg een nieuwe auto toe</h2>

    @if ($errors->any())
    <div class="bg-red-100 text-red-700 p-4 rounded-md mb-6">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ url('cars') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div class="flex flex-col">
            <label for="image" class="text-lg font-semibold mb-2">Image:</label>
            <input type="file" name="image" id="image" class="border border-gray-300 p-2 rounded-md text-white" required>
        </div>

        <div class="flex flex-col">
            <label for="title" class="text-lg font-semibold mb-2">Title:</label>
            <input type="text" id="title" name="title" class="border border-gray-300 p-2 rounded-md text-black" required>
        </div>

        <div class="flex flex-col">
            <label for="naam" class="text-lg font-semibold mb-2">Naam:</label>
            <input type="text" id="naam" name="naam" class="border border-gray-300 p-2 rounded-md text-black" required>
        </div>

        <div class="flex flex-col">
            <label for="brandstofverbruik" class="text-lg font-semibold mb-2">Brandstofverbruik:</label>
            <input type="number" step="0.01" id="brandstofverbruik" name="brandstofverbruik" class="border border-gray-300 p-2 rounded-md text-black" required>
        </div>

        <div class="flex flex-col">
            <label for="co2" class="text-lg font-semibold mb-2">CO2 Uitstoot:</label>
            <input type="number" step="0.01" id="co2" name="co2" class="border border-gray-300 p-2 rounded-md text-black" required>
        </div>

        <div class="flex flex-col">
            <label for="prijs" class="text-lg font-semibold mb-2">Prijs:</label>
            <input type="number" step="0.01" id="co2" name="prijs" class="border border-gray-300 p-2 rounded-md text-black" required>
        </div>

        <button type="submit" class="bg-white text-black font-semibold py-2 px-4 rounded-md hover:bg-gray-200 transition duration-300">
            Submit
        </button>
    </form>
    </div>
</div>
<div class="white-strip"></div>
@endsection
