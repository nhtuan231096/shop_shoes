<?php 
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
	/**
	 * 
	 */
	class AuthController extends Controller
	{
		public function login(){
			return view('admin.login');
		}
		public function postLogin(Request $req){
			
			if(Auth::guard('admin')->attempt($req->only('email','password'))){
				return view('admin.index');
			}
			else{
				return redirect()->back()->with('error','Tên đăng nhập hoặc mật khẩu không đúng');
			}
		}
		public function logout(){
			Auth::guard('admin')->logout();
			return redirect()->route('login');
		}
	}
 ?>