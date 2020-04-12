<?php

namespace App\Http\Controllers;
use App\Isue;
use App\User;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Hash;

class AdminDashController extends Controller
{
    function errorL(){
        /*$data= Isue::all();*/

        $data= Isue::where('status',0)->where('hardwareSoftware','Hardware')->get();
        $data2= Isue::where('status',0)->where('hardwareSoftware','Software')->get();
        return view('dashboardAdmin',['data'=>$data],['data2'=>$data2]);
    }
    public function CorrectAdminH(Request $request,$id){
$data=Isue::find($id);
if($data->status==0){
    $data->status=1;
}else{
    $data->status=0;
}
$data->save();
return Redirect::to('dashboardAdmin')->with('message',$data->name='Error was fixed.');
    }
    public function CorrectAdminS(Request $request,$id){
$data2=Isue::find($id);
if($data2->status==0){
    $data2->status=1;
}else{
    $data2->status=0;
}
$data2->save();
return Redirect::to('dashboardAdmin')->with('message',$data2->name='Error was fixed.');
    }
    public function EditProfile(Request $request){
        
    
        $id=$request->user_id;
        $username=$request->username;
        $password=$request->password;
        $data= User::find($id);
        $data->username=$username;
        $data->password= Hash::make($password);
        $data->save();
        $data= User::where('role',1)->where('admin',0)->get();

        return back()->withInput();
        
    }

   
    
       /* request()->validate([
           
         'username' => 'required',
         
         'password' => 'required|min:6',
         ]);
 
         $data = $request->all();
        if($data->status==0){
            $data->status=1;
        }else{
            $data->status=0;
        }
        $data->save();
        return Red
        irect::to('dashboardAdmin')->with('message',$data->name='Error was fixed.');*/
            
            
   public function update($id){
    $data= User::find($id);
    return view('users',['data'=>$data]);
   }         
}
