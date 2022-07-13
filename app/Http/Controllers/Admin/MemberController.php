<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index(){
        $result = DB::table('members')->orderBy('id')->get();
        return view('admin.member.index',['members' => $result]);
    }

    public function create(){
        return view('admin.member.create');
    }

    public function store(Request $request){
        $data = $request->except('_token','password_confirm');
        $data['password'] = bcrypt($data['password']);
        $data['created_at'] = new \DateTime();
        DB::table('members')->insert($data);
        return redirect()->route('admin.member.index')->with('success','Thêm thành viên thành công');
    }
    public function edit($id){
        $result = DB::table('members')->where('id',$id)->first();
        $edit_myself = null;
        if ( Auth::user()->id == $id) {
            $edit_myself = true;
        } else {
            $edit_myself = false;
        }
        if (Auth::user()->id != 1 && ($id == 1 || ( $result->level == 1 && $edit_myself == false))){
            return redirect()->route('admin.member.index')->with('error','Không đủ quyền để sửa');
        }
        return view('admin.member.edit',['member'=>$result]);
    }

    public function update(Request $request,$id){
        $data = $request->except('_token','password_confirm','password','email');
        if(!empty($request-> password)){
            $data['password'] = bcrypt($request-> password);
        }
        $data['updated_at']  = new \DateTime();
        DB::table('members')->where('id',$id)->update($data);
        return redirect()->route('admin.member.index')->with('success','Sửa thành viên thành công');
    }

    public function delete($id){
        $result = DB::table('members')->where('id',$id)->first();
        if(($id == 1) || Auth::user()->id != 1 &&  $result->level == 1){
            return redirect()->route('admin.member.index')->with('error','Không đủ quyền để xóa');
        }
        DB::table('members')->where('id',$id)->delete();
        return redirect()->route('admin.member.index')->with('success','Xóa thành công');
    }
}
