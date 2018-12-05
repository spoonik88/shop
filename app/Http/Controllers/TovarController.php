<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class TovarController extends Controller
{
    public function getAll() {
		$cats = Category::all();
		return view('categories', compact('cats'));
	}
}
