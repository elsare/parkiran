<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
      return redirect('/konsumen')->with('sukses', 'Data Berhasil ditambahkan!');
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
      return redirect('/konsumen')->with('sukses', 'Data Berhasil diubah!');
    }
     public function delete($id)
    {
        $konsumen = Konsumen::find($id);
        $konsumen->delete();
        return redirect('/konsumen')->with('sukses','Berhasil dihapus!');
    }

    public function transaksi()
    {
    	return view('transaksi.index');
    }
}
