<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perjalanan;
use App\Models\user;

class PerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('catatan.index');
    }

    public function data(){
        $perjalanan = Perjalanan::orderBy('id', 'desc')->get();

        return datatables()
            ->of($perjalanan)
            ->addIndexColumn()
            ->addColumn('tanggal', function($perjalanan){
                return tgl_ID($perjalanan->tanggal);
            })
            ->addColumn('name', function($perjalanan){
                return $perjalanan->user->name;
            })
            ->addColumn('aksi', function ($perjalanan){
                return '<div class="btn-group">
                    <button onclick="editForm(`'. route('perjalanan.edit', $perjalanan->id) .'`)" class="btn btn-sm btn-warning btn-flat"><i class="fa fa-edit"></i></button>
                    <button onclick="deleteData(`'. route('perjalanan.destroy', $perjalanan->id) .'`)" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('catatan.add', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perjalanan = new Perjalanan;

        $perjalanan->user_id = $request->user_id;
        $perjalanan->tanggal = $request->tanggal;
        $perjalanan->jam = $request->jam;
        $perjalanan->suhu = $request->suhu;
        $perjalanan->lokasi = $request->lokasi;
        $perjalanan->save();

        return redirect('perjalanan')->with('success', 'Data berhasil di simpan');
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
    public function edit($id)
    {
        $perjalanan = Perjalanan::find($id);
        return view('catatan.edit', compact('perjalanan'));
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
        $perjalanan = Perjalanan::find($id);

        $perjalanan->tanggal = $request->tanggal;
        $perjalanan->jam = $request->jam;
        $perjalanan->suhu = $request->suhu;
        $perjalanan->lokasi = $request->lokasi;
        $perjalanan->update();

        return redirect('perjalanan')->with('success', 'Data berhasil di update');
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
