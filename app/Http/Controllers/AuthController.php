<?php

namespace App\Http\Controllers;

use App\Isue;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;

/*use Auth;*/
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
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
             if($user->roleis()){
                 if($user->is_admin()){
                    return redirect()->route('dashboardSYSTEM');
                 }else
                 return redirect()->route('dashboardAdmin');
             }else
             $id=session(['id' => $request->id]);
            /* $user_name = DB::table('users')->where('id',$request->id)->pluck('username');*/
           /*  $user_name = DB::select("SELECT username FROM 'users' WHERE id = '$request->id'");*/
             $user_name = User::where('id',$request->id )->pluck('username');
             $username=session(['username' => $user_name]);
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

    public function dashboardUser()
    {

      if(Auth::check()){
        $dataS=Isue::all();
        return view('/dashboardUser')->with('issues',$dataS);

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

    public function dashboardSYSTEM()
    {

      if(Auth::check()){
        return view('dashboardSYSTEM');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }




  /*  public function insert(Request $request)
    {
        request()->validate([


        'id' => 'required',
        'machineSerial' => 'required',
        'hardwareSoftware' => 'required',
        'type' => 'required',
        'discription' => 'required',
        'softwarediscription' => 'present',
        'status' => 'required',


        ]);

        $data = $request->all();

        $check = $this->postinsert($data);
      /*  return back();*/
      /*

    }
    public function postinsert(array $data)
    {
      return Isue::insert([

        'id' => $data['id'],
        'machineSerial' => $data['machineSerial'],
        'hardwareSoftware' => $data['hardwareSoftware'],
        'type' => $data['type'],

        'discription' => $data['discription'],
        'softwarediscription' => $data['softwarediscription'],
        'status'=>'0'
      ]);
    }*/
    function insert(Request $req){
        $this->validate($req,[
            'machineSerial'=>'required',
            'hardwareSoftware'=>'required',
            'name'=>'required',
            'id'=>'required',
            'ComputerLab'=>'required',
            'type'=>'required_if:type,software',
            'discription'=>'required_if:disription,software',
            'softwarediscription'=>'required_if:softwarediscription,hardware',
            'status'=>'required_if:status,0',

        ]);
/*
        $name=$req->input('name');
        $id=$req->input('id');
        $ComputerLab=$req->input('ComputerLab');*/
       /* $machineSerial=$req->input('machineSerial');
        $hardwareSoftware=$req->input('hardwareSoftware');*/
     /*   $type=$req->input('type')? $req-> get('type') : 'software';*/
        /*$discription=$req->input('discription')? $req-> get('discription') : 'software';
        $softwarediscription=$req->input('softwarediscription') ? $req-> get('softwarediscription') : 'hardware';
        $status='0';*/

        $data=array('id'=>$req->id,'ComputerLab'=>$req->ComputerLab,'machineSerial'=>$req->machineSerial,'hardwareSoftware'=>$req->hardwareSoftware,'type'=>$req->type? $req-> get('type') : 'software','discription'=>$req->discription? $req-> get('discription') : 'software','softwarediscription'=>$req->softwarediscription? $req-> get('softwarediscription') : 'hardware','status'=>'0');
        DB::table('isue')->insert($data);
        Mail::to('erandikahansi95@gmail.com')->send(new SendMail($data));

        return back()->with('success', 'Thanks for contacting us!');
   }
   public function store()
{
    $dataS=Isue::all();
    return view('/dashboardUser')->with('issues',$dataS);

}

  /* public function view(){
    $issue = Isue::all();

    return view('admin/dashboard',['issues'=>$issue]);
    }*/

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
