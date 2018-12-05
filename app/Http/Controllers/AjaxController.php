<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tovar;
class AjaxController extends Controller
{
	public function postIndex(){ 
		$ids=(int)$_POST['id'];
	    $obj=Tovar::find($ids);
	return view('ajax', compact('obj'));
}
	

}
