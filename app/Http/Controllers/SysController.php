<?php

namespace App\Http\Controllers;
use App\Isue;
use Illuminate\Http\Request;
use Redirect;

class SysController extends Controller
{
    function errorL(){
        /*$data= Isue::all();*/

        $data= Isue::where('status',0)->where('hardwareSoftware','Hardware')->get();
        $data2= Isue::where('status',0)->where('hardwareSoftware','Software')->get();
        return view('dashboardSystem',['data'=>$data],['data2'=>$data2]);
    }
    public function CorrectEH(Request$request,$id){
$data=Isue::find($id);
if($data->status==0){
    $data->status=1;
}else{
    $data->status=0;
}
$data->save();
return Redirect::to('dashboardSystem')->with('message',$data->name='Error was fixed.');
    }
    public function CorrectES(Request$request,$id){
$data2=Isue::find($id);
if($data2->status==0){
    $data2->status=1;
}else{
    $data2->status=0;
}
$data2->save();
return Redirect::to('dashboardSystem')->with('message',$data2->name='Error was fixed.');
    }
}
