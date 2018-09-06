<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class Category extends Model
{
	protected $table='categorys';
	protected $fillable=[
		'name','slug','parent','status'
	];
	public function Pros(){
		return $this->hasMany('App\Models\Product','category_id','id');
	}

	public function scopeSearch($query){
		if (empty(request()->search)) {
			return $query;
		}
		else{
			return $query->where('name','like','%'.request()->search.'%');
		}
	}
	public function childs(){
		return $this->hasMany('App\Models\Category','parent','id');
	}
}
 ?>