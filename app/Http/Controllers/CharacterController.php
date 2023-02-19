<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Character;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Http::get('https://rickandmortyapi.com/api/character')->json()['results'];

        return view('characters.index', compact('characters'));
    }

    public function show($id)
    {
        $character = Http::get("https://rickandmortyapi.com/api/character/$id")->json();

        return view('characters.show', compact('character'));
    }

    public function store()
    {
        $characters = Http::get('https://rickandmortyapi.com/api/character')->json()['results'];

        foreach ($characters as $character) {
            Character::create([
                'name' => $character['name'],
                'status' => $character['status'],
                'species' => $character['species'],
                'type' => $character['type'],
                'gender' => $character['gender'],
                'origin_name' => $character['origin']['name'],
                'origin_url' => $character['origin']['url'],
                'image' => $character['image']
            ]);
        }

        return redirect()->route('characters.index')->with('success', 'Characters imported successfully!');
    }

    public function edit($id)
    {
        $character = Character::find($id);

        return view('characters.edit', compact('character'));
    }

    public function update(Request $request, $id)
    {
        $character = Character::findOrFail($id);

        $character->name = $request->input('name');
        $character->status = $request->input('status');
        $character->species = $request->input('species');
        $character->type = $request->input('type');
        $character->gender = $request->input('gender');
        $character->origin_name = $request->input('origin_name');
        $character->origin_url = $request->input('origin_url');
        $character->image = $request->input('image');

        $character->save();

        return redirect()->route('characters.index')->with('success', 'Character updated successfully!');
    }
}