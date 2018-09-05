<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class Product extends Model
{
	protected $table='products';
	protected $fillable=[
		'name','slug','image','category_id','status','description','price','sale_price','type'
	];

	public function category(){
		return $this->hasOne('App\Models\Category','id','category_id');
	}
	public function scopeSearch($qr){
		if (empty(request()->search)) {
			return $qr;
		}
		else{
			return $qr->where('name','like','%'.request()->search.'%');
		}
	}
}
 ?>