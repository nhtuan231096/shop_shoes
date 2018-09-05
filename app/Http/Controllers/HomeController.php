<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Models\Banner;
use Auth;
/**
 * 
 */
class HomeController extends Controller
{
	
	function index()
	{
		$banner=Banner::where('status',1)->get();
		return view('home.index',[
			'banners'=>$banner
		]);
	}
	function login()
	{
		return view('home.login');
	}
	public function p_login(Request $req){
		if (Auth::attempt($req->only('email','password'))) {
			return redirect()->route('home');
		}
		else{
			return redirect()->back()->with('error','Email hoặc mật khẩu không đúng');
		}
	}
	public function logout(){
		Auth::logout();
		return redirect()->back();
	}

	public function register(){
		return view('home.register');
	}
	public function p_register(Request $req){
		$this->validate($req,[
			'name'=>'required',
			'email'=>'required|unique:users,email',
			'password'=>'required|min:6',
			'confirm_pass'=>'required|same:password'
		],[
			'required'=>'The :attribute not blank!!',
			'email.unique'=>'Email already exists!!',
			'password.min'=>'Password at least :min characters!!',
			'confirm_pass.min'=>'Confirm password unlike :other !!',
		]);
		$password=bcrypt($req->password);
		$req->merge(['password'=>$password]);
		$req->offsetunset('confirm_pass');
		// dd($req->all());
		User::create($req->all());
		return redirect()->route('HomeLogin')->with('success_rg','Đăng ký thành công');
	}
}
 ?>