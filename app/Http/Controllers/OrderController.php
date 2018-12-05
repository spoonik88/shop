<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Tovar;
use App\Order;
use Auth;


class OrderController extends Controller
{
	public function postIndex(OrderRequest $r) {
   $arr=[];
   $products=[];
   foreach($_POST as $key=>$value) {
	   $id=(int)$key;
	   if($id>0) {
		   $products[$id]=Tovar::find($id);
		   $arr[$id]=$value;
	   }
   }
   
   $body=serialize($arr);
$r['body']=$body;
$r['status']='new';
$r['user_id'] = (Auth::guest())?0:Auth::user()->id;
//unset($r['_token']); 
Order::create($r->all());
foreach($_COOKIE as $key=>$value) {
     $id=(int)$key;
     if($id>0){
	   setcookie($id, '', time()-1, '/');
   }
}
return redirect()->back();
	}
}
