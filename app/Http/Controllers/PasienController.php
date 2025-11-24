<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\RumahSakit;

class PasienController extends Controller
{
    public function index() {
        $rumahSakit = RumahSakit::all();
        $pasien = Pasien::with('rumahSakit')->get();
        return view('pasien.index', compact('pasien','rumahSakit'));
    }

    public function filter($id) {
        $pasien = Pasien::where('rumah_sakit_id', $id)->with('rumahSakit')->get();
        return response()->json($pasien);
    }

    public function create() {
        $rumahSakit = RumahSakit::all();
        return view('pasien.create', compact('rumahSakit'));
    }

    public function store(Request $request) {
        Pasien::create($request->all());
        return redirect()->route('pasien.index');
    }

    public function edit($id) {
        $rumahSakit = RumahSakit::all();
        $data = Pasien::findOrFail($id);
        return view('pasien.edit', compact('data','rumahSakit'));
    }

    public function update(Request $request, $id) {
        Pasien::find($id)->update($request->all());
        return redirect()->route('pasien.index');
    }

    public function destroy($id) {
        Pasien::destroy($id);
        return response()->json(['success' => true]);
    }
}
