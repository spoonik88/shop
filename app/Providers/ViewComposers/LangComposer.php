<?php 

    namespace App\Providers\ViewComposers;
use Illuminate\Contracts\View\View;
use App\User;
use Auth;
use App;
class LangComposer{
    public function compose (View $view){
        $lang = App::getLocale();
        $view->with('lang', $lang);
    }
}