<?php

namespace App\Http\Controllers;

use App\Models\User;
use Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            
            $existingUser = User::where('email', $user->getEmail())->first();
            
            if ($existingUser) {
                Auth::login($existingUser);
            } else {
                $newUser = User::create([
                    'fullname' => $user->getName(),
                    'email' => $user->getEmail(),
                    'google_id' => $user->getId(),
                    'password' => bcrypt('random-password'),
                ]);
                
                Auth::login($newUser);
            }

            return redirect()->intended('/');
        } catch (\Exception $e) {
            return redirect('/login');
        }
    }
    
    public function login(Request $req){
        if($req->isMethod("post")){
            $req->validate([
                'email' => 'required|email',
                'password' => 'required|min:8'
            ]);

            $credentials = $req->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('homepage')->with('success', 'Login Successfully');
            }
    
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
        return view('login');
    }
    public function register(Request $req){

        if($req->isMethod("post")){
            $req->validate([
                'fullname' =>'required|max:255',
                'email' =>'required|email|unique:users',
                'password' => 'required|min:8',
                'contact' => 'required'
            ]);

            $user = new User();
            $user->name = $req->fullname;
            $user->email = $req->email;
            $user->password =  $req->password;
            $user->contact = $req->contact;
            $user->save();
            return redirect()->route('login')->with('success', 'Registration successful');
        }
        return view("register");
    } 

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout successfully');
    }
}
