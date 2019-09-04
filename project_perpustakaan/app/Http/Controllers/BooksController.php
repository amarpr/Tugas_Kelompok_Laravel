<?php

namespace App\Http\Controllers;
use App\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $data = Books::all();
        return view('admin.a_master',compact('data'));
    }
    public function create(){
        return view('admin.c_data');
    }
    public function store(Request $request){
        $this->validate($request,[
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

        if ($request->hasFile('imageBuku')){
            $file = $request->file('imageBuku');
            $filename = uniqid()."-".$file->getClientOriginalName();
            $request->file('imageBuku')->move('admin/img/',$filename);

            $data->imageBuku = $filename;
            $data->save();
        }
        return redirect('tes');
    }
    // hapus data
    public function destroy($id)
    {
        $data = Books::find($id);
        // mencari file
        $file = 'admin/img/'.$data->imageBuku;
        // 'folder file'
        if(is_file($file));{
            unlink($file);
        }
        $data->delete();
        return redirect('tes');
    }
    public function edit($id){
        $data = File::find($id);
        return view('file.u_file',compact('data'));
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
        $data = File::where('id', $id)->first();
        $data->name = $request->name;

        // cek
        if ($request->file('file')== "") {
            $data->file = $data->file;
        }
        else {
            if ($request->hasFile('file')) {
                // gambar sebelumnya di hapus dan di ganti baru
            $file = 'file/'.$data->file;
            if (is_file($file)) {
                unlink($file);
            }
            // 
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $request->file('file')->move('file/',$filename);
            $data->file = $filename;
        }
    }
        $data->save();
        return redirect('files');
    }
}