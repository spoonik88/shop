<?php 
   
namespace App\Providers\ViewComposers;
use Illuminate\Contracts\View\View;
use App\User;
use App\Tovar;
use Auth;
use App\Maintext;
class BreadCrumbsComposer{
    public function compose (View $view){
        $page = $_SERVER['REQUEST_URI'];
        $arr1 = explode('/', $page);
        //dd($arr1); проверка
        $world = null;
        switch ($arr1[1]){
            case 'bascket':
                $world = __('pagination.bascket');// bascket привязан не к урлам а к названиям на странице
                break;
            case 'news':
                $world = __('pagination.news');
                break;  
            case 'categories':
                $world = __('pagination.categories');
                break;  
            case 'product':
                $world = __('pagination.categories');
                break;  
        }
        if($world == null){
            $obj = Maintext::where('url', $arr1[1])->first();
            $world = (isset($obj)) ? $obj->name : null;
        }
        $world2 = null;
        if(isset($arr1[2])){
            $obj2 = Tovar::find($arr1[2]);
            $world2 = $obj2->name;
        }
        return $view->with('world', $world)->with('world2', $world2);
    }
}