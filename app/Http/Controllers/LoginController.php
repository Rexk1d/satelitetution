<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User as UserModel;
use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;
use hash;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        return view("/");
        //return Login::where('icNumber',$req->input('icNumber'))->get();
    }
    public function loginAdmin(Request $request){
       $request->validate([
        'adminID'=>'required|adminID|unique:admin',
       'password'=>'required|min:5|max:12'
       ]);
       $Login = Login::where('adminID','=',$request->adminID)->first();
       if ($Login){

       }else{
        return back()->with('fail','This email is not registered.');
       }

    }

    public function loginUser(Request $request)
{
    $request->validate([
        'icNumber' => ['required', 'regex:/^\d{6}-\d{2}-\d{4}$/'],
        'password' => ['required', 'min:5', 'max:12']
    ]);

    $user = DB::table('user')->where('icNumber', $request->icNumber)->first();

    if ($user) {
        // Authentication successful
        return redirect()->route('dashboard.user');
    } else {
        return back()->with('fail', 'Invalid credentials.');
    }
}

    

     public function DashboardUser()
    {
        return view("/DashboardUser");
        //return Login::where('icNumber',$req->input('icNumber'))->get();
    }

    public function testConnection()
    {
        $user = DB::table('user')->get();
        dd($user);
    }




}
