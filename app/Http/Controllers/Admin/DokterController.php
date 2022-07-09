<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dokter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dokter.index', [
            'dokters' => Dokter::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dokter.create', [
            'dokter' => Dokter::all(),
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
            'nama_dokter' => 'required|max:255',
            'alamat' => 'required|max:255',
            'spesialis_dokter' => 'required',
        ]);
        Dokter::create($validatedData);
        return redirect('/admin/dokter')->with('success', 'Dokter has been added!');
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
    public function edit(Dokter $dokter)
    {
        return view('dokter.edit', [
            'dokter' => $dokter
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokter $dokter)
    {
        $rules = [
            'nama_dokter' => 'required|max:255',
            'alamat' => 'required|max:255',
            'spesialis_dokter' => 'required',
        ];
        $validatedData = $request->validate($rules);
        Dokter::where('id', $dokter->id)->update($validatedData);
        return redirect('/admin/dokter')->with('success', 'Dokter has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokter $dokter)
    {
        Dokter::destroy($dokter->id);
        return redirect('/admin/dokter')->with('success', 'Dokter has been deleted!');
    }
}
