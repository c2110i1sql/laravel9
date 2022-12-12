<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }

    public function login()
    {
        // dd (bcrypt(123456));
        return view('admin/login'); 
    }

    public function check_login(Request $req)
    {
       $form_data = $req->only('email','password');
       $check = Auth::attempt($form_data, $req->has('remember'));

       if ($check) {
            return redirect()->route('admin.index')->with('yes', 'Chào mừng trở lại');
       }

       return redirect()->back()->with('no', 'Tài khoản hoặc mật khảu không chính xác');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('yes', 'Đăng xuất thành công, vui lòng đăng nhập lại');
    }
}
