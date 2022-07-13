<?php

namespace App\Http\Controllers\Client;
use Illuminate\Support\Facades\DB;  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function getUserRegister(){
        return view('Client.register');
    }

    public function postUserRegister(Request $request){
        $data = $request->except('_token', 'password_confirm');
        $data['password'] = bcrypt($data['password']);
        $data['created_at'] = new \DateTime();
        $data['level'] = 2;
        DB::table('members')->insert($data);
        return redirect()->route('getUserLogin');
    }
}
