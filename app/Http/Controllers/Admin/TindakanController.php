<?php

namespace App\Http\Controllers\Admin;

use App\Models\Obat;
use App\Models\Ruang;
use App\Models\Pasien;
use App\Models\Tindakan;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tindakan.index', [
            'tindakans' => Tindakan::all(),
            'pasiens' => Pasien::all(),
            'ruang'  => Ruang::all(),
            'obat'  => Obat::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tindakan.create', [
            'pasiens' => Pasien::all(),
            'ruangs'  => Ruang::all(),
            'obats'  => Obat::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kd_pasien' => 'required',
            'kd_ruang'  => 'required',
            'jenis_pembayaran' => 'required',
            'kd_obat' => 'required',
            'jumlah_obat' => 'required',
            'jumlah_pembayaran' => 'required',
        ]);
        // dd($validatedData);
        Tindakan::create($validatedData);
        return redirect('/admin/tindakan')->with('success', 'Tindakan has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Tindakan::with('pasien.ruang.obat')->findOrFail($id);
        return view('tindakan.show')->with([
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Tindakan::findOrFail($id);
        return view('tindakan.edit', [
            'pasiens' => Pasien::all(),
            'ruangs'  => Ruang::all(),
            'obats'  => Obat::all(),
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tindakan $tindakan)
    {
        $rules = [
            'kd_pasien' => 'required',
            'kd_ruang'  => 'required',
            'jenis_pembayaran' => 'required',
            'kd_obat' => 'required',
            'jumlah_obat' => 'required',
            'jumlah_pembayaran' => 'required',
        ];
        $validatedData = $request->validate($rules);
        Tindakan::where('id', $tindakan->id)->update($validatedData);
        return redirect('/admin/tindakan')->with('success', 'Tindakan has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
