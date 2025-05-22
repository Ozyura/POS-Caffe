<?php


// app/Http/Controllers/KategoriMenuController.php

namespace App\Http\Controllers;

use App\Models\KategoriMenu;
use Illuminate\Http\Request;

class KategoriMenuController extends Controller
{
    public function index()
    {
        return KategoriMenu::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nm_kategori' => 'required|string|max:25',
        ]);

        return KategoriMenu::create($request->all());
    }

    public function show($id)
    {
        return KategoriMenu::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $kategori = KategoriMenu::findOrFail($id);
        $kategori->update($request->all());

        return $kategori;
    }

    public function destroy($id)
    {
        KategoriMenu::destroy($id);
        return response()->json(['message' => 'Kategori deleted successfully']);
    }
}
