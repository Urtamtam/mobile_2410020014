<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Penitipan;
use Illuminate\Http\Request;

class PenitipanController extends Controller
{
    public function index()
    {
        return response()->json(['success' => true, 'data' => Penitipan::with('hewan')->get()]);
    }

    public function store(Request $request)
    {
        $v = $request->validate([
            'hewan_id'       => 'required|exists:hewans,id',
            'tanggal_masuk'  => 'required|date',
            'tanggal_keluar' => 'required|date|after_or_equal:tanggal_masuk',
            'biaya'          => 'nullable|integer',
            'status'         => 'nullable|string',
            'catatan'        => 'nullable|string',
        ]);

        return response()->json(['success' => true, 'data' => Penitipan::create($v)], 201);
    }

    public function show($id)
    {
        return response()->json(['success' => true, 'data' => Penitipan::with('hewan')->findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $penitipan = Penitipan::findOrFail($id);
        $penitipan->update($request->all());

        return response()->json(['success' => true, 'data' => $penitipan]);
    }

    public function destroy($id)
    {
        Penitipan::findOrFail($id)->delete();

        return response()->json(['success' => true, 'message' => 'Data dihapus']);
    }
}