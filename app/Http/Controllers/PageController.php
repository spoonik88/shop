<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintext;

class PageController extends Controller
{
    public function getIndex($url=null) {
		
		$obj=Maintext::where('url', $url)->first();
		return view('page', compact('obj'));
		
		
	}
}
