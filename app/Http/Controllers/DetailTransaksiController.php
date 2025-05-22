<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    public function index()
    {
        return DetailTransaksi::with(['menu', 'transaksi'])->get();
    }

    public function store(Request $request)
    {
        return DetailTransaksi::create($request->all());
    }

    public function show($id)
    {
        return DetailTransaksi::with(['menu', 'transaksi'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $detail = DetailTransaksi::findOrFail($id);
        $detail->update($request->all());
        return $detail;
    }

    public function destroy($id)
    {
        DetailTransaksi::destroy($id);
        return response()->json(null, 204);
    }
}
