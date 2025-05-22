<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        return Transaksi::with(['user', 'detail'])->get();
    }

    public function store(Request $request)
    {
        return Transaksi::create($request->all());
    }

    public function show($id)
    {
        return Transaksi::with(['user', 'detail'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($request->all());
        return $transaksi;
    }

    public function destroy($id)
    {
        Transaksi::destroy($id);
        return response()->json(null, 204);
    }
}
