<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yacht;
use App\Models\Image;

class YachtController extends Controller
{
    public function index()
    {
        $yachts = Yacht::with('images')->get();
        return view('yachts.yacht', compact('yachts'));
    }

    public function showClientYacht()
    {
        $yachts = Yacht::all();
        return view('yachts.yachts', compact('yachts'));
    }

    public function edit(Yacht $yacht)
    {
        return view('yachts.edit', compact('yacht'));
    }

    public function update(Request $request, Yacht $yacht)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string',
            'price_per_hour' => 'required|numeric',
            'city' => 'required|string|max:255',
            'images.*' => 'nullable|url',
        ]);

        $yacht->update($validatedData);

        return redirect()->route('yacht')->with('success', 'Yacht updated successfully.');
    }

    public function destroy(Yacht $yacht)
    {
        $yacht->delete();

        return redirect()->route('yacht')->with('success', 'Yacht deleted successfully.');
    }


    public function show($id)
    {
        $yacht = Yacht::findOrFail($id);
        return view('yachts.show', compact('yacht'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string',
            'price_per_hour' => 'required|numeric',
            'city' => 'required|string|max:255',
            'images' => 'nullable|array',
            'images.*' => 'nullable|url'
        ]);

        $yacht = Yacht::create($request->all());

        if ($request->has('images')) {
            foreach ($request->images as $url) {
                if ($url) {
                    $yacht->images()->create(['url' => $url]);
                }
            }
        }

        return redirect()->route('yacht')->with('success', 'Yacht created successfully.');
    }
}
