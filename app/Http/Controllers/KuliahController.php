<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class KuliahController extends Controller
{
   
	public function index(){
		return "Ini adalah index halaman Kuliah";
    }

	public function viewMateri(){
		$data=array(
		'topik'=>'Laravel'
	);
		return view('kuliah', $data);
	}
}


