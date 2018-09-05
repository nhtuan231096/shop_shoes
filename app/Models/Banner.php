<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class Banner extends Model
{
	protected $table='slides';
	protected $fillable=[
		'name','image','links','caption_1','caption_2','caption_3','caption_4','status'
	];

}
?>