<?php

namespace App\Http\Middleware;
use App;
use Closure;
class Lang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) //проверяет есть ли get запрос lang 
    {
        if(isset($_GET['lang'])){
            $lang = $_GET['lang'];
        } else {
            if (isset($_COOKIE['lang'])) {
                $lang = $_COOKIE['lang'];
            } else {
                $lang = 'en';
            }
        }
        App::setLocale($lang);//меняем локаль, чтобы автоматически поменялись ошибки на русский и др
        //dd(App::getLocale());проверка локали
        setcookie('lang', $lang, time()+3000, '/');// кука, чтобы на всех страницах был выбранный язык
        $request->merge(compact('lang'));//передали переменную в контроллер и любой класс, кот работает с request
        return $next($request);
    }
}
