<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadCt extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads = leader::all();
        return view('admin.dashboard',compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $extension_cv = $request->file('cv')->getClientOriginalExtension();
        $filename_cv = $request->Nama.'.'.$extension_cv;
        $request->file('cv')->storeAs('/public/Lead/CV/',$filename_cv);

        $extension_kartu = $request->file('kartu')->getClientOriginalExtension();
        $filename_kartu = $request->Nama.'.'.$extension_kartu;
        $request->file('kartu')->storeAs('/public/Lead/Kartu/',$filename_kartu);

        leader::create([
            'Nama' => $request->nama_lead,
            'Email' => $request->email,
            "Whatsapp" => $request->WA,
            'Line' => $request->line,
            'Github' => $request->github,
            'Tpt_Lahir' => $request->tempat,
            'Tgl_Lahir' => $request->tanggal,
            'CV' => $filename_cv,
            'Kartu' => $filename_kartu
        ]);

        return redirect('/user/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lead = leader::findOrFail($id);
        return view('user.dashboard',compact('lead'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lead = Lead::findOrFail($id);
        return view('admin.editLead',compact('lead'));
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
        $extension_cv = $request->file('cv')->getClientOriginalExtension();
        $filename_cv = $request->Nama.'.'.$extension_cv;
        $request->file('cv')->storeAs('/public/Lead/CV/',$filename_cv);

        $extension_kartu = $request->file('kartu')->getClientOriginalExtension();
        $filename_kartu = $request->Nama.'.'.$extension_kartu;
        $request->file('kartu')->storeAs('/public/Lead/Kartu/',$filename_kartu);

        leader::findOrFail($id)->create([
            'Nama' => $request->nama_lead,
            'Email' => $request->email,
            "Whatsapp" => $request->WA,
            'Line' => $request->line,
            'Github' => $request->github,
            'Tpt_Lahir' => $request->tempat,
            'Tgl_Lahir' => $request->tanggal,
            'CV' => $filename_cv,
            'Kartu' => $filename_kartu
        ]);
        return redirect('/admin/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        leader::destroy($id);
        return redirect('/admin/dashboard');
    }
}
