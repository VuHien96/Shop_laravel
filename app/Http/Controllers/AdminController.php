<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function AuthLogin(){

       $admin_id = Session::get('id');
        if($admin_id){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.login')->send();
        }
    }

    public function index()
    {
        return view('login');
    }

    public function dashboard()
    {
        $this->AuthLogin();
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $login = User::where('email', $email)->where('password', $password)->first();

        if ($login) {
            $login_count = $login->count();
            if ($login_count > 0) {
                Session::put('name', $login->name);
                Session::put('id', $login->id);
                return redirect()->route('admin.dashboard');
            }
        } else {
            Session::put('message', 'Mật khẩu hoặc tài khoản bị sai.Làm ơn nhập lại');
            return redirect()->route('admin.login');
        }
    }

    public function logout(){
        $this->AuthLogin();
        Session::put('name',null);
        Session::put('id',null);
        return redirect()->route('admin.login');
    }
}
