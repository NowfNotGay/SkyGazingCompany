<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin(){
        if (Auth::check()){
            return redirect()->route('admin.member.index');
        }
        return view('admin.login');
    }

    public function postLogin(Request $request){
        //Admin normal
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $credentials['level']=1;
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.member.index')->with('success', 'Đăng nhập thành công');
        }

        //Login SUPER-Admin
        $spadmin = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $spadmin['id']=1;
        if (Auth::attempt($spadmin)) {
            $request->session()->regenerate();
            return redirect()->route('admin.member.index')->with('success', 'Đăng nhập thành công');
        }
        return redirect()->route('admin.getLogin')->with('error', 'Đăng nhập thất bại vui lòng nhập đúng thông tin');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('admin.getLogin');
    }
}
