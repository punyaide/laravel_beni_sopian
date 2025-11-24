<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahSakit;

class RumahSakitController extends Controller
{
    public function index() {
        $data = RumahSakit::all();
        return view('rumahsakit.index', compact('data'));
    }

    public function create() {
        return view('rumahsakit.create');
    }

    public function store(Request $request) {
        RumahSakit::create($request->all());
        return redirect()->route('rumahsakit.index');
    }

    public function edit($id) {
        $data = RumahSakit::findOrFail($id);
        return view('rumahsakit.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        RumahSakit::find($id)->update($request->all());
        return redirect()->route('rumahsakit.index');
    }

    public function destroy($id) {
        RumahSakit::destroy($id);
        return response()->json(['success' => true]);
    }
}
