<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
/**
 * 
 */
class UserController extends Controller
{
	
	function index()
	{
		$users=User::all();
		return view('admin.user.index',[
			'users'=>$users
		]);
	}
	public function add()
	{
		return view('admin.user.add');
	}
	public function p_add(Request $req)
	{
		$this->validate($req,[
			'name'=>'required',
			'email'=>'required|unique:users,email',
			'password'=>'required|min:6',
			'confirmPassword'=>'same:password'
		],[
			'name.required'=>'Tên không được để trống',
			'email.required'=>'email không được để trống',
			'password.required'=>'Mật khẩu không được để trống',
			'password.min'=>'Mật khẩu ít nhất :min ký tự',
			'email.unique'=>'Email đã tồn tại',
			'confirmPassword.same'=>'Mật khẩu không trùng khớp'
		]);
		User::create($req->all());
		return redirect()->route('user')->with('success','Thêm mới tài khoản thành công');
	}

	public function edit($id){
		$user=User::find($id);
		return view('admin.user.edit',[
			'user'=>$user
		]);
	}
	public function p_edit(Request $req,$id){
		$this->validate($req,[
			'name'=>'required',
			'email'=>'required|unique:users,email,'.$id
		],[
			'name.required'=>'Tên không được để trống',
			'email.required'=>'email không được để trống',
			'email.unique'=>'Email đã tồn tại'
		]);
		User::find($id)->update($req->all());
		return redirect()->route('user')->with('success','Cập nhật tài khoản thành công');
	}
	public function delete($id){
		User::destroy($id);
		return redirect()->route('user')->with('success','Xóa tài khoản thành công');
	}
}
 ?>