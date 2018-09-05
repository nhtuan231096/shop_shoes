<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
/**
  * 
  */
 class BannerController extends Controller
 {
 	
 	public function index()
 	{
 		$banner=Banner::limit(1);
 		return view('admin.banner.index',[
 			'banner'=>$banner
 		]);
 	}
 	public function add(){
 		return view('admin.banner.add');
 	}
 	public function p_add(Request $req){
 		$this->validate($req,[
 			'name'=>'required',
 			'file_upload'=>'required',
 			'links'=>'required',
 			'caption_1'=>'required',
 			'caption_2'=>'required'
 		],[
 			'name.required'=>'Tên không được để trống',
 			'file_upload.required'=>'Ảnh không được để trống',
 			'links.required'=>'Liên kết không được để trống',
 			'caption_1.required'=>'Chú thích 1 không được để trống',
 			'caption_2.required'=>'Chú thích 2 không được để trống'
 		]);
 		Banner::create($req->all());
 		return redirect()->route('banner')->with('success','Thêm mới thành công');
 	}
 } 
 ?>