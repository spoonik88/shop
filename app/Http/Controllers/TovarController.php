<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tovar;

class TovarController extends Controller
{
    public function getAll() {
		$cats = Category::all();
		return view('categories', compact('cats'));
	}
	 // public function getOne($id = null){
  //   	$obj = Tovar::find($id);
  //   	return view('tovar', compact('obj'));
  //   }
}
