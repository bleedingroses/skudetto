<?php

namespace App\Http\Controllers;
use App\Models\Tahsin;
use App\Models\Category;
use Illuminate\Http\Request;

class TahsinController extends Controller
{
    public function show()
    {
        $data= Tahsin::sortable()->paginate(5);
        return view('tahsin.index', ['tahsins' => $data]);
    }
    
    public function tambah()
    {    
        return view('tahsin.tambah');
    }

    public function simpan(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        $data = Tahsin::create($request->except(['_token', 'submit']));
        if($request->hasFile('gambar'))
        {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect('/tahsin')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function ubah($id)
    {
        $member = Tahsin::find($id);
        return view('tahsin.ubah', 
            compact(['tahsin']));
    }

    public function update($id, Request $request)
    {
        $member = Tahsin::find($id);
        $member->update($request->except(['_token', 'submit']));
        if($request->hasFile('gambar'))
        {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $member->gambar = $request->file('gambar')->getClientOriginalName();
            $member->save();
        }
        return redirect('/tahsin')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $member = Tahsin::find($id);
        $member->delete();
        return redirect('/tahsin');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}