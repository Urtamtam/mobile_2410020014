<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Hewan;
use Illuminate\Http\Request;

class HewanController extends Controller
{
    public function index()
    {
        return response()->json(['success' => true, 'data' => Hewan::all()]);
    }

    public function store(Request $request)
    {
        $v = $request->validate([
            'nama_hewan'   => 'required|string',
            'jenis'        => 'required|string',
            'ras'          => 'nullable|string',
            'umur'         => 'nullable|integer',
            'nama_pemilik' => 'required|string',
            'no_hp'        => 'required|string',
        ]);

        return response()->json(['success' => true, 'data' => Hewan::create($v)], 201);
    }

    public function show($id)
    {
        return response()->json(['success' => true, 'data' => Hewan::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $hewan = Hewan::findOrFail($id);
        $hewan->update($request->all());

        return response()->json(['success' => true, 'data' => $hewan]);
    }

    public function destroy($id)
    {
        Hewan::findOrFail($id)->delete();

        return response()->json(['success' => true, 'message' => 'Data dihapus']);
    }
}