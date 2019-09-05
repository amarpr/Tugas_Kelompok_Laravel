<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return view('admin.user.v_user',compact('data'));
    }
    public function destroy($id){
        $data = User::find($id);
        $data->delete();
        return redirect('user-page');
    }
    public function edit(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        
        $data->save();
        return redirect('user-page');
    }
    public function update($id){
        $data = User::find($id);
        return view('admin.user.u_user',compact('data'));
    }
}
