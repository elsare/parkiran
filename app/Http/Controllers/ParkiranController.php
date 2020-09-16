<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Konsumen;

class ParkiranController extends Controller
{
    public function index()
    {
    	$data_konsumen = Konsumen::all();
    	return view('konsumen.index',['data_konsumen'=> $data_konsumen]);
    }
     public function create(Request $request)
    {
      $konsumen = Konsumen::create($request->all());
      return redirect('/konsumen');//->with('sukses', 'Data Berhasil ditambahkan!');
    }
    public function edit($id)
    {
    	$konsumen = Konsumen::find($id);
    	return view('konsumen.edit',['konsumen' => $konsumen ]);
    }
    public function update(Request $request,$id)
    {
      $konsumen = Konsumen::find($id);
      $konsumen->update($request->all());
      return redirect('/konsumen');//->with('sukses', 'Data Berhasil diubah!');
    }
     public function delete($id)
    {
        $konsumen = Konsumen::find($id);
        $konsumen->delete();
        return redirect('/konsumen')->with('sukses','Berhasil dihapus!');
    }

    public function transaksi()
    {
        $myModel = DB::table('Konsumen')
        // $myModel = \App\Konsumen::all()
        ->select('id', 'no_polisi')
        ->get();

            $result  = '<option></option>';
            foreach ($myModel as $myData) {
                $result .= '<option value="' . $myData->id . '" ' . ((!empty($id)) ? (($id == $myData->id) ? ('selected') : ('')) : ('')) . '>' . $myData->no_polisi . '</option>';
            }
            
            return view('transaksi.form', compact('result'));
    }

    //     return view('transaksi.form');
    // }

    public function ViewTransaksi(Request $request)
    {

        $masuk = strtotime($request->masuk);
        $keluar = strtotime($request->keluar);

        if ($request->jenis_kendaraan == 'Motor') {
            $first = 2000;
            $next = 500;
        } else {
            $first = 5000;
            $next = 1000;
        }

        $totalWaktu = (intval($keluar)) - (intval($masuk));
        $jamselisih    = floor($totalWaktu / (60 * 60));
        $menit    = $totalWaktu - $jamselisih * (60 * 60);
        $menitselisih = floor($menit / 60);

        $getDetik_jamselisih = ($jamselisih * (60 * 60));
        $getDetik_menitselisih = ($menitselisih * 60);
        $waktuparkir = ($getDetik_jamselisih + $getDetik_menitselisih);

        if ($waktuparkir <= 3600) {
            $biaya = $first;
        } elseif ($waktuparkir > 3600) {
            $jam = ceil($waktuparkir / (60 * 60));
            $nexts = $next * ($jam - 1);
            $biaya = $first + $nexts;
        } else {
            $biaya = 0;
        }

        transaksiparkir::insert([
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'no_polisi' => $request->no_polisi,
            'tgl_transaksi' => $request->tanggal_transaksi,
            'masuk' => $request->masuk,
            'keluar' => $request->keluar,
            'biaya' => $biaya,
        ]);

        return redirect(url('/list'));
    }
}
