<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
/**
 * 
 */
class ProductController extends Controller
{
	
	function list()
	{
		$pros=Product::Search()->paginate(12);
		return view('admin.product.listPro',[
			'pros'=>$pros
		]);
	}
	public function add(){
		return view('admin.product.addPro');
	}
	public function p_add(Request $req){
		$this->validate($req,[
			'name'=>'required|unique:products,name',
			'category_id'=>'required',
			'file_upload'=>'required',
			'slug'=>'required|unique:products,slug',
			'price'=>'required'
		],[
			'name.required'=>'Tên sản phẩm không được để trống',
			'category_id.required'=>'Vui lòng chọn danh mục',
			'file_upload.required'=>'Vui lòng chọn ảnh',
			'slug.required'=>'Đường dẫn tĩnh không được để trống',
			'price.required'=>'Vui lòng nhập giá',
			'name.unique'=>'Tên đã tồn tại',
			'slug.unique'=>'Đường dẫn tĩnh đã tồn tại',
		]);
		$img='';
		if ($req->hasFile('file_upload')) {
			$file=$req->file_upload;
			$file->move(base_path('uploads/product'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
		}
		$req->merge(['image'=>$img]);
		// dd($req->all());
		Product::create($req->all());
		return redirect()->route('listPro')->with('success','Thêm mới sản phẩm thành công');
	}
	public function edit($id){
		$pro=Product::find($id);
		return view('admin.product.editPro',[
			'pro'=>$pro
		]);
	}
	public function p_edit(Request $req,$id){
		$this->validate($req,[
			'name'=>'required|unique:products,name,'.$id,
			'category_id'=>'required',
			'file_upload'=>'required',
			'slug'=>'required|unique:products,slug,'.$id,
			'price'=>'required'
		],[
			'name.required'=>'Tên sản phẩm không được để trống',
			'category_id.required'=>'Vui lòng chọn danh mục',
			'file_upload.required'=>'Vui lòng chọn ảnh',
			'slug.required'=>'Đường dẫn tĩnh không được để trống',
			'price.required'=>'Vui lòng nhập giá',
			'name.unique'=>'Tên đã tồn tại',
			'slug.unique'=>'Đường dẫn tĩnh đã tồn tại',
		]);
		$pro=Product::find($id);
		$img=$pro->image;
		if($req->hasFile('file_upload')){
			$file=$req->file_upload;
			$file->move(base_path('uploads/product'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
		}
		$req->merge(['image'=>$img]);
		$pro->update($req->all());
		return redirect()->route('listPro')->with('success','Cập nhật sản phẩm thành công');
	}
	public function delete($id){
		Product::find($id)->delete();
		return redirect()->route('listPro')->with('success','Đã xóa sản phẩm');
	}
}
 ?>