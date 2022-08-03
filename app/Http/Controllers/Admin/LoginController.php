<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::where(['email' => $request->email,'status_id' => 1])->first();
//        dd($user);
        if ($user != null) {
            $credentials = $request->except(['_token']);
        }else{
            return redirect(route('login'));
        }

        if (auth()->attempt($credentials)) {

            return redirect()->route('admin.home');

        }else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }
}
