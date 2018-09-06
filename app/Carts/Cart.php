<?php 
namespace App\Carts;
/**
 * 
 */
class Cart
{
	public $items=[];
	public function __construct()
	{
		# code...
		$this->items=session('cart');
	}
	public function add($model){
		if(isset($this->items[$model->id])){
			$this->items[$model->id]['qty']+=1;
		}else{
		$this->items[$model->id]=[
			'id'=>$model->id,
			'name'=>$model->name,
			'price'=>$model->sale_price>0?$model->sale_price:$model->price,
			'qty'=>1,
			'image'=>$model->image
		];
		}
		// dd($this->items);
		session(['cart'=>$this->items]);
	}
	public function update($id,$qty){
		if(isset($this->items[$id])){
			$this->items[$id]['qty']=$qty;
		}
		session(['cart'=>$this->items]);
	}
	public function delete($id){
		if (isset($this->items[$id])) {
			unset($this->items[$id]);
		}
		session(['cart'=>$this->items]);
	}

}
 ?>