<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parkir;

class ParkirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = parkir::all();
        return view('parkir.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = parkir::all();
        return view('parkir.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'no_pol'          => 'required',
            'jenis_kendaraan' => 'required',
        ]);

        $parkir = new Parkir;
        $parkir->no_pol = $request->no_pol;
        $parkir->jenis_kendaraan = $request->jenis_kendaraan;

        $parkir->save();
        return redirect('parkir')->with('message', 'Input Parkir Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parkir = Parkir::find($id);

        if(!$parkir){
            abort(404);
        }

        return view('parkir.single')->with('parkir', $parkir);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parkir = Parkir::find($id);

        if(!$parkir){
            abort(404);
        }

        return view('parkir.edit')->with('parkir', $parkir);
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
        $this->validate($request, [
            'no_pol'          => 'required',
            'jenis_kendaraan' => 'required',
        ]);

        $parkir = Parkir::find($id);
        $parkir->no_pol = $request->no_pol;
        $parkir->jenis_kendaraan = $request->jenis_kendaraan;

        $parkir->save();
        return redirect('parkir')->with('message', 'Edit Parkir Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parkir = Parkir::find($id);
        $parkir->delete();
        return redirect('parkir')->with('message', 'Hapus Data Berhasil!');
    }
}
