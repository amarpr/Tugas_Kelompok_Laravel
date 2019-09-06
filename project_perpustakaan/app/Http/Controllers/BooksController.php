<?php

namespace App\Http\Controllers;

use App\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }

    public function index()
    {
        $data = Books::all();
        return view('admin.a_master', compact('data'));
    }
    public function create()
    {
        return view('admin.c_data');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'namaBuku' => 'required',
            'tipeBuku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunTerbit' => 'required',
            'imageBuku' => 'required|file|mimes:jpg,png,jpeg|max:2048',
            'ringkasan' => 'required'
        ]);

        $data = new Books;
        $data->namaBuku = $request->namaBuku;
        $data->tipeBuku = $request->tipeBuku;
        $data->penulis = $request->penulis;
        $data->penerbit = $request->penerbit;
        $data->tahunTerbit = $request->tahunTerbit;
        $data->imageBuku = $request->imageBuku;
        $data->ringkasan = $request->ringkasan;

        if ($request->hasFile('imageBuku')) {
            $file = $request->file('imageBuku');
            $filename = uniqid() . "-" . $file->getClientOriginalName();
            $request->file('imageBuku')->move('admin/img/', $filename);

            $data->imageBuku = $filename;
            $data->save();
        }
        return redirect('admin-page');
    }
    // hapus data
    public function destroy($id){
        $data = Books::find($id);
        // mencari file
        $file = 'admin/img/'.$data->imageBuku;
        // 'folder file'
        if(is_file($file));{
            unlink($file);
        }
        $data->delete();
        return redirect('admin-page');
    }
    // Update
    public function edit($id){
        $data = Books::find($id);
        return view('admin.u_data',compact('data'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'namaBuku' => 'required',
            'tipeBuku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunTerbit' => 'required',
            'imageBuku' => 'required|file|mimes:jpg,png,jpeg|max:2048',
            'ringkasan' => 'required',
        ]);
        $data = Books::where('id', $id)->first();
        $data->namaBuku = $request->namaBuku;
        $data->tipeBuku = $request->tipeBuku;
        $data->penulis = $request->penulis;
        $data->penerbit = $request->penerbit;
        $data->tahunTerbit = $request->tahunTerbit;
        $data->imageBuku = $request->imageBuku;
        $data->ringkasan = $request->ringkasan;

        // cek
        if ($request->file('imageBuku') == "") {
            $data->imageBuku = $data->imageBuku;
        }
        else {
            if ($request->hasFile('imageBuku')) {
                // gambar sebelumnya di hapus dan di ganti baru
            $imageBuku = 'admin/img/'.$data->imageBuku;
            if (is_file($imageBuku)) {
                unlink($imageBuku);
            }
            // 
            $imageBuku = $request->file('imageBuku');
            $filename = $imageBuku->getClientOriginalName();
            $request->file('imageBuku')->move('admin/img/',$filename);
            $data->imageBuku = $filename;
        }
    }
        $data->save();
        return redirect('admin-page');
    }
}
