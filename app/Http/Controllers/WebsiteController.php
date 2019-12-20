<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class WebsiteController extends Controller
{
   
	public function index(){
		return view('index');
    }
	public function administrasi(){
		return view('websiteku/administrasi');
    }

	// public function viewMateri(){
	// 	$data=array(
	// 	'topik'=>'Laravel'
	// );
	// 	return view('kuliah', $data);
	// }
}


