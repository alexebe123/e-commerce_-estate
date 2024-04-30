<?php

namespace App\Http\Controllers;
use App\Models\Estates;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstatesController extends Controller
{
    function index(){
        $data =  DB::select("select * from estates ");
        return view("index",['data' => $data]);
    }

    function create(){
        return view('create_estate');
    }

    public function store(Request $request) {
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path;
        $data =  Estates::create([
        'width' => $request->input('width'),
        'user_id' => Auth::id(),
        'length' => $request->input('length'),
        'storey' => $request->input('storey'),
        'city' => $request->input('city'),
        'amunt' => $request->input('amunt'),
        'address' => $request->input('address'),
        'image' =>   $requestData["image"],
     ]);
        $data->save();
      return redirect()->route("controllpanel")
        ->with('success', 'Estates created .');
    }

    public function controllpanel(){
       /* $id = Auth::id();
        $data = DB::select("select * from estates where id_owner = ? ",[$id]);
       // dd($data);
        return view('controllpanel',['data' => $data]);*/
        $data = User::find(Auth::id());
        return view('controllpanel',['data' => $data->estates]);
    }
    public function one_prodect($id){
        $data = Estates::find($id);
     //   dd($data);
        return view("detail",compact("data"))->with("user",Estates::find($id)->user);
    }
}
