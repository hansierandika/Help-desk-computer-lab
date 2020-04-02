<?php

namespace App\Http\Controllers;
use App\Isue;
use Session;
use Illuminate\Http\Request;

class formController extends Controller
{
    function save(Request $req){
        print_r($req->input());
    }

    function list(){
        /*$data= Isue::all();*/
        $id=Session::get('id');
        $data= Isue::where('id',$id)->get();
        return view('UView',['data'=>$data]);
    }
    function listS(){
        $id=Session::get('id');
        $data= Isue::where('id',$id)->where('status','0')->get();
        return view('USolved',['data'=>$data]);
    }
}
 