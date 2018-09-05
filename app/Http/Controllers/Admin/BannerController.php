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
 		$banner=Banner::all();
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
 		$img='';
 		if ($req->hasFile('file_upload')) {
 			$file=$req->file_upload;
 			$file->move(base_path('uploads/banner'),$file->getClientOriginalname());
 			$img=$file->getClientOriginalname();
 			$req->merge(['image'=>$img]);
 		}
 		// dd($req->all());
 		Banner::create($req->all());
 		return redirect()->route('banner')->with('success','Thêm mới thành công');
 	}
 	public function edit($id){
 		$banner=Banner::find($id);
 		return view('admin.banner.edit',[
 			'banner'=>$banner
 		]);
 	}
 	public function p_edit($id,Request $req){
 		$this->validate($req,[
 			'name'=>'required',
 			'links'=>'required',
 			'caption_1'=>'required',
 			'caption_2'=>'required'
 		],[
 			'name.required'=>'Tên không được để trống',
 			'links.required'=>'Liên kết không được để trống',
 			'caption_1.required'=>'Chú thích 1 không được để trống',
 			'caption_2.required'=>'Chú thích 2 không được để trống'
 		]);
 		$banner=Banner::find($id);
 		$img=$banner->image;
 		if ($req->hasFile('file_upload')) {
 			$file=$req->file_upload;
 			$file->move(base_path('uploads/banner'),$file->getClientOriginalname());
 			$img=$file->getClientOriginalname();
 			$req->merge(['image'=>$img]);
 		}
 		$banner->update($req->all());
 		return redirect()->route('banner')->with('success','Sửa thành công');
 	}
 	public function delete($id){
 		Banner::destroy($id);
 		return redirect()->route('banner')->with('success','Đã xóa');
 	}
 } 
 ?>