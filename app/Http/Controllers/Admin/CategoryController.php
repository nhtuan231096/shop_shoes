<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
/**
 * 
 */
class CategoryController extends Controller
{
	
	function list()
	{
		$cates=Category::Search()->paginate(6);
		return view('admin.category.listCate',[
			'cates'=>$cates
		]);
	}
	public function add(){
		return view('admin.category.add');
	}
	public function create(Request $req){
		$this->validate($req,[
			'name'=>'required|unique:categorys,name',
			'slug'=>'required|unique:categorys,slug'
		],[
			'name.required'=>'Tên danh mục không được để trống',
			'slug.required'=>'Đường dẫn tĩnh không được để trống',
			'slug.unique'=>'Đường dẫn tĩnh đã tồn tại',
			'name.unique'=>'Tên danh mục đã tồn tại',
		]);
		Category::create($req->all());
		return redirect()->route('listCate')->with('success','Thêm mới danh mục thành công');
	}

	public function edit($id){
		$cate=Category::find($id);
		return view('admin.category.edit',[
			'cate'=>$cate
		]);
	}
	public function p_edit($id,Request $req){
		$this->validate($req,[
			'name'=>'required|unique:categorys,name,'.$id,
			'slug'=>'required|unique:categorys,slug,'.$id
		],[
			'name.required'=>'Tên danh mục không được để trống',
			'slug.required'=>'Đường dẫn tĩnh không được để trống',
			'slug.unique'=>'Đường dẫn tĩnh đã tồn tại',
			'name.unique'=>'Tên danh mục đã tồn tại',
		]);
		Category::find($id)->update($req->all());
		return redirect()->route('listCate')->with('success','Cập nhật danh mục thành công');
	}
	public function delete($id){
		Category::destroy($id);
		return redirect()->route('listCate')->with('success','Xóa danh mục thành công');
	}
}
 ?>