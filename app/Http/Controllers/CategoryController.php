<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Member;
use App\Models\Tahsin;

class CategoryController extends Controller
{
    public function profile($id)
    {
        $category = Category::find($id);
        return view('member.divisi', ['category' => $category]);   
    }

    public function tambahg()
    {    
        return view('tahsin.tambahg');
    }

    public function simpang(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        $data = Category::create($request->except(['_token', 'submit']));
        if($request->hasFile('gambar'))
        {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect('/tahsin')->with('success', 'Grup Berhasil Ditambahkan!');
    }

}
