<?php

namespace App\Http\Controllers\Admin;

use App\Models\Wilayah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wilayah.index', [
            'wilayahs' => Wilayah::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wilayah.create', [
            'wilayahs' => Wilayah::all(),
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
            'nama_wilayah' => 'required|max:255'
        ]);
        Wilayah::create($validatedData);
        return redirect('/admin/wilayah')->with('success', 'Wilayah has been added!');
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
    public function edit(Wilayah $wilayah)
    {
        return view('wilayah.edit', [
            'wilayah' => $wilayah
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wilayah $wilayah)
    {
        $rules = [
            'nama_wilayah' => 'required|max:255',
        ];
        $validatedData = $request->validate($rules);
        Wilayah::where('id', $wilayah->id)->update($validatedData);
        return redirect('/admin/wilayah')->with('success', 'Wilayah has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wilayah $wilayah)
    {
        Wilayah::destroy($wilayah->id);
        return redirect('/admin/wilayah')->with('success', 'Wilayah has been deleted!');
    }
}
