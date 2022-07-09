<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ruang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ruang.index', [
            'ruangs' => Ruang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruang.create', [
            'ruangs' => Ruang::all(),
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
            'nama_ruang' => 'required|max:255',
            'nama_gedung' => 'required|max:255'
        ]);
        Ruang::create($validatedData);
        return redirect('/admin/ruang')->with('success', 'Ruang has been added!');
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
    public function edit(Ruang $ruang)
    {
        return view('ruang.edit', [
            'ruang' => $ruang
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruang $ruang)
    {
        $rules = [
            'nama_ruang' => 'required|max:255',
            'nama_gedung' => 'required|max:255',
        ];
        $validatedData = $request->validate($rules);
        Ruang::where('id', $ruang->id)->update($validatedData);
        return redirect('/admin/ruang')->with('success', 'Ruang has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ruang $ruang)
    {
        Ruang::destroy($ruang->id);
        return redirect('/admin/ruang')->with('success', 'Ruang has been deleted!');
    }
}
