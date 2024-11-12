<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    // Menampilkan semua data motor
    public function index()
    {
        $motors = Motor::all();
        return view('motors.index', compact('motors'));
    }

    // Menampilkan form untuk membuat motor baru
    public function create()
    {
        return view('motors.create');
    }

    // Menyimpan data motor baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_motor' => 'required',
            'merk' => 'required',
            'tahun' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        Motor::create($request->all());
        return redirect()->route('motors.index')->with('success', 'Motor berhasil ditambahkan.');
    }

    // Menampilkan form edit data motor
    public function edit(Motor $motor)
    {
        return view('motors.edit', compact('motor'));
    }

    // Update data motor di database
    public function update(Request $request, Motor $motor)
    {
        $request->validate([
            'nama_motor' => 'required',
            'merk' => 'required',
            'tahun' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        $motor->update($request->all());
        return redirect()->route('motors.index')->with('success', 'Data motor berhasil diupdate.');
    }

    // Menghapus data motor
    public function destroy(Motor $motor)
    {
        $motor->delete();
        return redirect()->route('motors.index')->with('success', 'Motor berhasil dihapus.');
    }
}

