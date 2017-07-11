<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showRegister() {
        return view('register');
    }

    public function showLogin() {
        return view('login');
    }

    public function register(Request $request) {
        $data = $request->all();

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        DB::table('users') -> insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => 'user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect() -> route('index');
    }

    public function login(Request $request) {
        $data = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user=DB::table('users')
                ->select('email', 'role')
                ->where([
                    ['email', '=', $data['email']],
                    ['password', '=', $data['password']]
                ])
                ->get();
        return $user;
    }
}
