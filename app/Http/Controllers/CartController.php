<?php 
namespace App\Http\Controllers;
use App\Models\Product;
use App\Carts\Cart;
/**
 * 
 */
class CartController extends Controller
{
	
	function add_cart($id,Cart $cart)
	{
		$model=Product::find($id);
		if ($model) {
			$cart->add($model);
			return redirect()->route('viewCart')->with('success','Thêm sản phẩm vào giỏ hàng thành công');
		}
		else{
			return view('home.error');
		}
	}
	function view()
	{

		return view('home.Cart',[
			'cart'=>new Cart()
	]);
	}
	public function update($id,Cart $cart){
		$qty=request()->qty;
		$cart->update($id,$qty);
		return redirect()->route('viewCart');
	}
	public function delete($id,Cart $cart){
		$cart->delete($id);
		return redirect()->back()->with('success','Đã hủy sản phẩm trong giỏ hàng');
	}
}
 ?>