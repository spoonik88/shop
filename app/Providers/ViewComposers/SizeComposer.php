<?php 
    namespace App\Providers\ViewComposers;
    use Illuminate\Contracts\View\View;
    use App\Catalog;
    use Auth;
    class SizeComposer
    {
    	public function compose(View $view)
    	{
    		// if(Auth::()){
    		// 	$user= new User;
    		// } else{
    		// 	$user = Auth::user();
    		// }
    		//  $view->with('user', $user);
    		// $v_catalogs = Catalog::all();
    		// $view->with('v_catalogs', $v_catalogs);
    		$counts = 0;
    		foreach ($_COOKIE as $key => $value) 
    		{
	    			$id= (int)$key;
	    		if($id>0){
	    			$counts++;
    			}
    		}
    		$view->with('counts', $counts);
    	}
    }