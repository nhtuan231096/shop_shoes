<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
	/**
	 * 
	 */
	class AdminController extends Controller
	{
		
		function index()
		{
			return view('admin.index');
		}
		public function login(){
			echo "string";
		}
	}
 ?>