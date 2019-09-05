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
        return redirect('tes');
    }
}
