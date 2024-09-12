<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
class CarController extends Controller

{
    public function welcome()
    {
        $cars = DB::table('cars')->get();
        return view('welcome', ['cars' => $cars]);
    }

    public function modellen()
    {
        $cars = DB::table('cars')->get();
        return view('modellen', ['cars' => $cars]);

    }

    public function create()
    {
        return view('cars.create');
    }
    public function store(Request $request)
    {
    // Valideer de invoer
    $validator = Validator::make($request->all(), [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'title' => 'required',
        'naam' => 'required',
        'brandstofverbruik' => 'required|numeric',
        'co2' => 'required|numeric',
        'prijs' => 'required|numeric'
    ]);
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $imagePath = $request->file('image')->store('images', 'public');
    DB::table('cars')->insert([
        'image' => $imagePath,
        'title' => $request->title,
        'naam' => $request->naam,
        'brandstofverbruik' => $request->brandstofverbruik,
        'co2' => $request->co2,
        'prijs' =>$request->prijs,
        'created_at' => now(),
        'updated_at' => now()
    ]);
    return redirect('/modellen')->with('success', 'Car toegevoegd successfully.');
}

public function destroy($id)
{
    // Verwijder de auto uit de database
    $car = DB::table('cars')->where('id', $id)->first();
    
    if ($car) {
        // Verwijder de afbeelding uit de opslag
        $imagePath = $car->image; // Zorg ervoor dat dit alleen de bestandsnaam is, niet het volledige pad

        if (Storage::exists('public/' . $imagePath)) {
            Storage::delete('public/' . $imagePath);
        }

        // Verwijder de auto record
        DB::table('cars')->where('id', $id)->delete();
    }
        return redirect('/modellen')->with('success', 'Car deleted successfully.');
}

public function edit($id)
{
    $car = DB::table('cars')->where('id', $id)->first();
    
    if (!$car) {
        return redirect()->route('cars.index')->with('error', 'Car not found.');
    }

    return view('cars.edit', compact('car'));
}

public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'title' => 'required',
        'naam' => 'required',
        'brandstofverbruik' => 'required|numeric',
        'co2' => 'required|numeric',
        'prijs' => 'required|numeric',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $car = DB::table('cars')->where('id', $id)->first();

    if (!$car) {
        return redirect()->route('cars.index')->with('error', 'Car not found.');
    }

    $updateData = [
        'title' => $request->title,
        'naam' => $request->naam,
        'brandstofverbruik' => $request->brandstofverbruik,
        'co2' => $request->co2,
        'prijs' => $request->prijs,
    ];

    if ($request->hasFile('image')) {
        // Verwijder oude afbeelding als deze bestaat
        if (Storage::disk('public')->exists($car->image)) {
            Storage::disk('public')->delete($car->image);
        }
        // Upload nieuwe afbeelding
        $updateData['image'] = $request->file('image')->store('images', 'public');
    }

    DB::table('cars')->where('id', $id)->update($updateData);

    return redirect('/modellen')->with('success', 'Car updated successfully.');
}
}