<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'login'
    ]);
    }

    public function authenticated(Request $request, $user){
        if ($user->hasRole('admin')) {
            return redirect()->route('admin.page');
        }else{
            return redirect()->route('user.page');
        }
    }


    public function store(Request $request){
       $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' =>'required|min:8|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi Berhasil, Silahkan Login');
        return redirect('/loginPage');

    }

    public function authenticate(Request $request){
       $credentials = $request->validate([
         'email' => 'required|email:dns',
         'password' => 'required',
     ]);


    if(Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/dash_board');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');

    
}
}