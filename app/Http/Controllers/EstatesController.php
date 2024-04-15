<?php

namespace App\Http\Controllers;
use App\Models\Estates;

use Illuminate\Http\Request;

class EstatesController extends Controller
{
    function index(){
        $data = Estates::all();
        return view("index",['data' => $data]);
    }
    function create(){
        return view('create_estate');
    }
}
