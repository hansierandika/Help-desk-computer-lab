<?php

namespace App\Http\Controllers;
use App\Isue;
use App\User;
use Session;
use Illuminate\Http\Request;
use Redirect;

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
    function apprvlRqst(){
        /*$data= Isue::all();*/

        $data= User::where('approved',0)->get();
        return view('notification',['data'=>$data]);
    }
    public function approve(Request$request,$id){
$data=User::find($id);
if($data->approved==0){
    $data->approved=1;
}else{
    $data->approved=0;
}
$data->save();
return Redirect::to('notification')->with('message',$data->name='Status has been changed succesfully.');
    }
}
