<?php

namespace App\Http\Controllers;

use App\KondisiRumah;
use App\IdentitasPenghuni;
use Illuminate\Http\Request;
use App\Models\PendataanRumah;
use Illuminate\Support\Facades\DB;

class PendataanController extends Controller
{
    public function inputPendataan(Request $request)
    {
        try{
        DB::beginTransaction();
        
        // Validate the form data
        $validatedData = $request->validate([
            // Add validation rules based on your form fields
            'no_kk' => 'required|string|max:255',
            'nama_kepala_keluarga' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'rt_rw' => 'required|string|max:10',
            'kode_pos' => 'required|string|max:10',
            // Add validation rules for Identitas Penghuni and Kondisi Rumah fields
        ]);

        // Create PendataanRumah record
        $pendataanRumah = PendataanRumah::create($validatedData);

        // Create IdentitasPenghuni records
        $identitasPenghuniData = $request->input('identitas_penghuni');

    if (!empty($identitasPenghuniData)) {
        foreach ($identitasPenghuniData as $identitasData) {
            // Check if any required field is filled before creating a record
            if (isset($identitasData['nama']) && !empty($identitasData['nama'])) {
                $pendataanRumah->identitasPenghuni()->create($identitasData);
            }
        }
    }

        // Create KondisiRumah record
        $kondisiRumahData = $request->only(['fondasi', 'atap', 'lantai', 'dinding', 'jendela', 'ventilasi', 'plafon']);
        $pendataanRumah->kondisiRumah()->create($kondisiRumahData);

        DB::commit();

        // Redirect or perform any other action after successful data input
        return redirect('/')->with('success', 'Data has been successfully recorded.');
}catch (\Exception $e){
    DB::rollBack();
    return redirect('/')->with('error', 'An error occurred during data recording.');
}
    }

    public function generateReport()
    {
        $pendataanData = PendataanRumah::with(['identitasPenghuni', 'kondisiRumah'])
            ->get();

        return view('report', ['pendataanData' => $pendataanData]);
    }
}
