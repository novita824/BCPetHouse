<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroomingController extends Controller
{
    $pagination = 5;
    $Grooming = Grooming::when($request->keyword, function ($query) use ($request) {
        $query
            ->where('Id', 'like', "%{$request->keyword}%")
            ->orWhere('nama', 'like', "%{$request->keyword}%")
            ->orWhere('namahewan', 'like', "%{$request->keyword}%")
            ->orWhere('jenishewan', 'like', "%{$request->keyword}%")
            ->orWhere('umur', 'like', "%{$request->keyword}%")
            ->orWhere('alamat', 'like', "%{$request->keyword}%")
            ->orWhere('notelp', 'like', "%{$request->keyword}%")
            ->orWhere('tipegrooming', 'like', "%{$request->keyword}%")
            ->orWhere('sediapetcargo', 'like', "%{$request->keyword}%");
    })->orderBy('Id')->paginate($pagination);

    return view('Grooming.groomingindex', compact('Penitipan'))
        ->with('i', (request()->input('page', 1) - 1) * $pagination);
    
  
/**
 * Show the form for editing the specified resource.
 *
 * @return \Illuminate\Http\Response
 */

public function edit($id)
{
    $this->authorize('admin');
    $Grooming = grooming::find($id);
    return view('Grooming.groominganedit',compact('grooming'));
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
    $request->validate([
    'nama' => 'required',
    'namahewan' => 'required',
    'jenishewan' => 'required',
    'umur' => 'required',
    'alamat' => 'required',
    'notelp' => 'required',
    'tipegrooming' => 'required',
    'sediapetcargo' => 'required',
    ]);
    $Grooming = penitipan::where('id', $id)->first();
    $Grooming->nama = $request->get('nama');
    $Grooming->namahewan = $request->get('namahewan');
    $Grooming->jenishewan = $request->get('jenishewan');
    $Grooming->umur = $request->get('umur');
    $Grooming->alamat = $request->get('alamat');
    $Grooming->notelp = $request->get('notelp');
    $Grooming->tipegrooming = $request->get('tipegrooming');
    $Grooming->sediapetcargo = $request->get('sediapetcargo');

    $Grooming->save();

    return redirect()->route('grooming.index')
    ->with('success', 'Grooming Berhasil Diupdate');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $this->authorize('admin');
    try{
        Member::find($id)->delete();
    }catch(Throwable $error){
        report($error);
        return to_route(route: 'grooming.index')->with('warning', 
        'Mohon Maaf Data Grooming Belum Bisa Dihapus. Coba Lagi Nanti.');
    }
    return redirect()->route('grooming.index')
        -> with('success', 'Grooming Berhasil Dihapus');
}
}
