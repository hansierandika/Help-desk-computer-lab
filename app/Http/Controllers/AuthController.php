<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
/*use Auth;*/
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function registration()
    {
        return view('registration');
    }

 /*   public function postLogin(Request $request)
    {
        request()->validate([
        'id' => 'required',
        'password' => 'required',
        'type'=>'required',
        ]);

        $credentials = $request->only('id', 'password');
        if (Auth::attempt($credentials)) {
            if('type'=='admin'){
                return redirect()->intended('dashboardAdmin');
            }else{
                return redirect()->intended('dashboardUser');
            }
            // Authentication passed...

        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }*/

    public function login(Request $request){
        request()->validate([
            'id' => 'required',
            'password' => 'required',

            ]);
            $credentials = $request->only('id', 'password');
            if (Auth::attempt($credentials)) {
             $user=User::where('id',$request->id )->first();
             if($user->is_admin()){
                 return redirect()->route('dashboardAdmin');
             }else
             $id=session(['id' => $request->id]);
            /* $user_name = DB::table('users')->where('id',$request->id)->pluck('username');*/
           /*  $user_name = DB::select("SELECT username FROM 'users' WHERE id = '$request->id'");*/
             $user_name = User::where('id',$request->id )->pluck('username');
           /*  $id=session(['username' => $user_name]);*/
             return redirect()->route('dashboardUser');
         }
         return redirect()->back();
    }

    public function postRegistration(Request $request)
    {
        request()->validate([
           /* 'id'=>'required',*/
        'username' => 'required',
        'id' => 'required',
        'password' => 'required|min:6',

        'email' => 'required|email|unique:users',

        ]);

        $data = $request->all();

        $check = $this->create($data);

        return Redirect::to("login")->withSuccess('Great! You have Successfully loggedin');
    }

    public function dashboardUser()
    {

      if(Auth::check()){
        return view('dashboardUser');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
    public function dashboardAdmin()
    {

      if(Auth::check()){
        return view('dashboardAdmin');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
      return User::create([

        'username' => $data['username'],
        'id' => $data['id'],
        'admin'=>'0',
        'password' => Hash::make($data['password']),
        'email' => $data['email']
      ]);
    }

    function insert(Request $req){
        $id=$req->input('id');
        $machineSerial=$req->input('machineSerial');
        $hardwareSoftware=$req->input('hardwareSoftware');
        $type=$req->input('type');
        $discription=$req->input('discription');
        $softwarediscription=$req->input('softwarediscription');
        $status='0';

        $data=array('id'=>$id,'machineSerial'=>$machineSerial,'hardwareSoftware'=>$hardwareSoftware,'type'=>$type,'discription'=>$discription,'softwarediscription'=>$softwarediscription,'status'=>$status);
        DB::table('isue')->insert($data);
       /* return view('dashboardUser');*/
       return back();
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
