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

	public function scopeSearch($query){
		if (empty(request()->search)) {
			return $query;
		}
		else{
			return $query->where('name','like','%'.request()->search.'%');
		}
	}
}
 ?>