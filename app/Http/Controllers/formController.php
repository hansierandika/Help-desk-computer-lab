<?php

namespace App\Http\Controllers;
use App\Isue;
use App\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Redirect;

class formController extends Controller
{
    function save(Request $req){
        print_r($req->input());
    }

    function list(){
        /*$data= Isue::all();*/
        $id=Session::get('id');
        $data= Isue::where('id',$id)->where('status','0')->get();
        return view('UView',['data'=>$data]);
    }
    function listS(){
        $id=Session::get('id');
        $data= Isue::where('id',$id)->where('status','1')->get();
        return view('USolved',['data'=>$data]);
    }

  /*  function apprvlRqst(){
        $data= User::where('approved','0')->get();
        $data1= User::where('approved','1')->where('role',0)->get();

        return view('notification',['data'=>$data],['data1'=>$data1]);
    }*/

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

    public function EditProfile(Request$request,$id){
        $this->validate($request,[
            'username'=>'required',
            'password' =>'required',

        ]);

        $data=User::find($id);
        $data->username=$request->get('username');
        $data->password=$request->get('password');
        $data->save();
        $data=User::where('role',1)->where('admin',0)->get();

   return view('users',['data'=>$data]);

    }
}
