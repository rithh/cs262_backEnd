<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function show_login_form()
    {
        return view('login');
    }


    public function process_login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('name', $request->name)->first();

        if (auth()->attempt($credentials)) {  // user and password match

            return redirect("/");  // Redirect to homepage

        } else {

            session()->flash('message', 'Invalid credentials'); // Reture error if password and user wrong
            return redirect()->back();
        }
    }

    public function show_signup_form()
    {
        return view('register');
    }

    public function process_signup(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'admin_pw' => 'required'
        ]);

        // try {
            if($request->input('admin_pw') == 'imtiredofthisman')
            {
            User::create([
                'name' => trim($request->input('name')),
                'email' => strtolower($request->input('email')),
                'password' => bcrypt($request->input('password')),  // Password bcrypt
            ]);
            session()->flash('message', 'Account successfully registered!');
            return redirect()->route('login');
            }

            
        // } catch (\Illuminate\Database\QueryException $e) {
        //     //report($e);
        //     session()->flash('error', 'Account registration unsuccessful, please try again.');
        // }

        else{
            session()->flash('message', 'Account registration unsuccessful, please try again.');
            return redirect()->back();
        }
    }

    public function logout()
    {

        \Auth::logout();

        return redirect()->route('login');
    }
}