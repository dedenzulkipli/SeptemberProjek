<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(){
        return view('home');
    }
    public function showLoginForm()
    {
        return view('login');
    }
    public function hh(){
        return view('index');
    }
    public function admind(){
        return view('admind');
    }
    public function auth(Request $request){
        $validate = $request->validate([
            'email' => ['required','email'],
            'password' =>['required']
        ]);
        if (Auth::attempt($validate)) {

            $request->session()->regenerate();
            if (auth()->user()->level === 'admin') {
                # code...
                return redirect('/admind');
            }
           else{
            return redirect('/index');
           }
        }
        return redirect()->back()->with('pesan','failed');
    }
    public function register(){
        return view('register');
    }

    public function createuser(Request $request){
        $filename = '';
        if ($request->file('foto')) {
            # code...
            $exFile = $request->file('foto')->getClientOriginalExtension();
            $filename = time().".".$exFile;
            $request -> file('foto')->storeAs('foto', $filename);
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'level' => "pengguna",
            'foto' => $filename,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
           

        ]);
        return redirect('/login');
    }
    public function logout(){
        Auth::logout();
        return redirect('/home');
    }
    // public function pengguna(){
    //     return redirect('pengguna');
    // }
    // public function user(Request $request){
    //     $data['user'] = User::all();
    //     $data['total_user'] = $data['user']->count();

    //     return view('user',$data);
    // }

    // //
}
