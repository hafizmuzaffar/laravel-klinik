<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pasien.index', [
            'pasiens' => Pasien::all()
        ]);

        // $title = "Pasien";
        // $pasien
        // return View('pasien.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create', [
            'pasiens' => Pasien::all(),
            'dokters' => Dokter::all(),
            'wilayahs' => Wilayah::all()
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
            'nama_pasien' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'keluhan' => 'required',
            'kd_dokter' => 'required',
            'kd_wilayah' => 'required',
        ]);
        Pasien::create($validatedData);
        return redirect('/admin/pasien')->with('success', 'Pasien has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', [
            'pasien' => $pasien
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        $rules = [
            'nama_pasien' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
            'alamat' => 'required|max:255',
            'keluhan' => 'required|max:255',
            'kd_dokter' => 'required|max:255',
            'kd_wilayah' => 'required|max:255',
        ];
        $validatedData = $request->validate($rules);
        Pasien::where('id', $pasien->id)->update($validatedData);
        return redirect('/admin/pasien')->with('success', 'Pasien has been updated!');
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
