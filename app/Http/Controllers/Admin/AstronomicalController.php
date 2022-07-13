<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;


class AstronomicalController extends Controller
{
    public function index(Request $request){
        $data=DB::table('astronomicalentities')->get();
        return view('admin.astronomicalentity.index',['AEs'=>$data]);
    }
    public function create(Request $request){
        $data= DB::table('astronomicalentities')->get();
        return view('admin.astronomicalentity.create',['AEs'=>$data]);
    }
    public function store(Request $request){
        $data=$request->except('_token');
        DB::table('astronomicalentities')->insert($data);
        return redirect()->route('admin.astronomicalentity.index');
    }
    public function edit(){

    }
    public function update(){

    }
    public function delete(){

    }
}
