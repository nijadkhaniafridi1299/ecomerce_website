<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\Resturent;
use App\Models\Registration;
use Crypt;
class ApiController extends Controller
{
//    function Api(){
//     return Resturents::all();
//    }
function show(){
    $data = Resturent::all();
    return view('list',['data'=>$data]);
}
function  save(Request $res){
$data = new Resturent();
$data->name = $res->name;
$data->email = $res->email;
$data->addrees = $res->address;
$data->save();
 $res->session()->flash('status', 'Data has been save in data Base');
  return redirect('list');
}
function  search(){
    return view('search');
}
function edit($id){
    $data = Resturent::find($id);
    return view('edit',['data'=>$data]);
}
function updated(Request $request){
    $id = $request->id;
    $data = Resturent::find( $id);
    $data->name= $request->name;
    $data->email = $request->email;
    $data->addrees = $request->address;
    $data->save();
    return redirect('list');
}
function registration(){
    return view('registration');
}
function login(){
        return view('login');
}
function Sutmitdata(Request $req){
    $user = new Registration();
    $user->name = $req->name;
    $user->email = $req->email;
    $user->password = $req->password;
    $user->address = $req->address;
    $user->save();
     $req->session()->put('user',$req->name);
     return redirect('/');

}
function logins(Request $req){
    $user = Registration::where('email', $req->email,'password',$req->password);
    
}
}

