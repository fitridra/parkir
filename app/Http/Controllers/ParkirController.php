<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masuk;

class ParkirController extends Controller
{
    public function masuk()
    {

        return view('parkir.masuk');
    }

    public function keluar(Request $request)
    {
        $result = Masuk::all();

        $keluar = Masuk::when($request->cari, function ($query) use ($request) {
            $query->where('no_pol', 'LIKE', "%{$request->cari}%");
        });
        return view('parkir.keluar', compact('keluar','result'));
    }

    public function tambah(Request $request)
    {

        $validatedData = $request->validate([
            'no_pol' => 'required',
            'jenis_kendaraan' => 'required'
        ]);

        Masuk::create($validatedData);

        return redirect()->route('masuk')->with('sukses', 'Mobil Masuk');
    }

    public function result()
    {
        $result = Masuk::all();

        return view('parkir.result', compact('result'));
    }

    public function edit($id)
    {
        $keluar = Masuk::where('id', $id)->first();
        return view('parkir/edit', compact('keluar'));
    }

    public function update($id)
    {

        $waktu_awal     = strtotime(request()->created_at);
        $waktu_akhir    = strtotime(request()->updated_at); // bisa juga waktu sekarang now()

        //menghitung selisih dengan hasil detik
        $diff    = $waktu_akhir - $waktu_awal;
        if ($diff < 3600) {
            $biaya = 5000;
        } elseif ($diff > 3600 && $diff < 7200) {
            $biaya = 9000;
        } else {
            $biaya = 13000;
        }

        $keluar = Masuk::where('id', $id)->first();
        $keluar->where('id', $keluar->id)
            ->update([
                'biaya' => $biaya
            ]);
        return redirect()->route('keluar')->with('sukses', 'Mobil Keluar dengan biaya Rp. '.$biaya);
    }
}
