<?php

namespace App\Http\Controllers;

use App\Models\Arsipsurat;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Arsipsurat::all();

        return view('arsip.index', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $model = new Arsipsurat;
        return view('arsip.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $model = new Arsipsurat;
        $model->no_surat = $request->no_surat;
        $model->kategori = $request->kategori;
        $model->judul = $request->judul;
        $model->data_surat = $request->data_surat;
        $model->created_at = $request->created_at;

        $model->save();
        session()->flash('message', 'Data berhasil di tambah');

        return redirect('arsip');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $model=Arsipsurat::find($id);
         return view('arsip.read', compact(
            'model'
        ));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        $model=Arsipsurat::find($id);
        $model->delete();

        return redirect('arsip');
    }
}
