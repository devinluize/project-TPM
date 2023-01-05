<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberCt extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $extension_foto = $request->file('Foto')->getClientOriginalExtension();
        $filename_foto = $request->Nama.'_Foto.'.$extension_foto;
        $request->file('Foto')->storeAs('/public/Member/Foto/',$filename_foto);

        $extension_cv = $request->file('cv')->getClientOriginalExtension();
        $filename_cv = $request->Nama.'_CV.'.$extension_cv;
        $request->file('cv')->storeAs('/public/Member/CV/',$filename_cv);

        $extension_kartu = $request->file('kartu')->getClientOriginalExtension();
        $filename_kartu = $request->Nama.'_Kartu.'.$extension_kartu;
        $request->file('kartu')->storeAs('/public/Member/Kartu/',$filename_kartu);

        group::create([
            'Nama'=> $request -> Nama,
            'Email'=> $request -> Email,
            "Whatsapp"=> $request -> WA,
            'Line'=> $request -> Line,
            'Github'=> $request -> Github,
            'Tpt_Lahir'=> $request -> Tempat,
            'Tgl_Lahir'=> $request -> Tanggal,
            'Foto' => $filename_foto,
            'CV' => $filename_cv,
            'Kartu' => $filename_kartu
        ])
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
    }
}
