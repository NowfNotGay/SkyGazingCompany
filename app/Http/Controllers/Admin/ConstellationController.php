<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Http\Requests\Constellation\StoreRequest;
use App\Http\Requests\Constellation\UpdateRequest;

class ConstellationController extends Controller
{
    public function index(){
        $data = DB::table('constellations')->orderBy('id')->get();
        return view('admin.constellation.index', ['AEs' => $data]);
    }

    public function create(){
        $data = DB::table('astronomicalentities')->get();
        return view('admin.constellation.create', ['AEs' => $data]);
    }

    public function store(StoreRequest $request){
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $data['image'] = $imageName;
        DB::table('constellations')->insert($data);
        return redirect()->route('admin.constellation.index')->with('success','Create successfully');
    }

    public function edit($id){
        $data=DB::table('constellations')->where('id',$id)->first();
        $data2 = DB::table('astronomicalentities')->get();
        return view('admin.constellation.edit',['constellation'=>$data],['AEs'=>$data2]);
    }

    public function update(UpdateRequest $request, $id){
        $data = $request->except('_token','image'); 
        $data['updated_at']  = new \DateTime();
        if (!empty($request->image)) {
            $data_old = DB::table('constellations')->where('id', $id)->first();
            $url_image_old_path = public_path('images/'. $data_old->image);
            if (file_exists($url_image_old_path)) {
                unlink($url_image_old_path);
            }
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }
        DB::table('constellations')->where('id',$id)->update($data);
        return redirect()->route('admin.constellation.index')->with('success','Edit successfully');
    }

    public function delete($id){
        DB::table('constellations')->where('id', $id)->delete();
        return redirect()->route('admin.constellation.index')->with('success','Delete successfully');
    }
}
