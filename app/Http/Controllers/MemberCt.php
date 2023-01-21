<?php

namespace App\Http\Controllers;

use App\Models\leader;
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
        $members = member::all();
        return view('admin.dashboard',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  int  $id_Tim
     * @return \Illuminate\Http\Response
     */
    public function create($id_Tim)
    {
        $group = group::findOrFail($id_Tim);
        return view('registMember',compact('group'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id_Tim)
    {
        $extension_cv = $request->file('cv')->getClientOriginalExtension();
        $filename_cv = $request->Nama.'_CV.'.$extension_cv;
        $request->file('cv')->storeAs('/public/Member/CV/',$filename_cv);

        $extension_kartu = $request->file('kartu')->getClientOriginalExtension();
        $filename_kartu = $request->Nama.'_Kartu.'.$extension_kartu;
        $request->file('kartu')->storeAs('/public/Member/Kartu/',$filename_kartu);

        group::create([
            'id_Tim' => $id_Tim,
            'Nama' => $request->nama,
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
        $member = member::findOrFail($id);
        return view('user.dashboard',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = member::findOrFail($id);
        return view('admin.editMember',compact('member'));
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
        $filename_cv = $request->Nama.'_CV.'.$extension_cv;
        $request->file('cv')->storeAs('/public/Member/CV/',$filename_cv);

        $extension_kartu = $request->file('kartu')->getClientOriginalExtension();
        $filename_kartu = $request->Nama.'_Kartu.'.$extension_kartu;
        $request->file('kartu')->storeAs('/public/Member/Kartu/',$filename_kartu);

        group::findOrFail($id)->update([
            'Nama' => $request->nama,
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
        member::destroy($id);
        return redirect('/admin/dashboard');
    }
}
