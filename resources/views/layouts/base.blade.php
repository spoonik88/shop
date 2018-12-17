<!DOCTYPE html>
<html lang="en">

<head>
    <title>mysite</title>
    <meta charset="UTF-8">
    <meta name="discription" content="123">
    <meta name="keywords" content="123">
    <meta name="Viltouski" content="123">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">

     <link rel="stylesheet" type="text/css" href="{{asset('/css/reset.css')}}">
	 <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
 	@section('styles')
	 
	@show

    <!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>
    
    <div class="container container-fluid">

        <header id="header" class="row">

            <div id="header_logo" class="col-md-3 col-sm-4 col-xs-6">
                <a class="navbar-brand links_img"  href="{{asset('/')}}" title="SVsonate"><img class="img-responsive" src="{{asset('/img/logo.png')}}" alt="logo"></a>
            </div>

            <div id="header_adress" class="col-md-6 col-sm-4 col-xs-6 text-center">
                <address>
                   <h2 class="adress_h2">Наш адрес:</h2>
                   <p class="adress_p">г.Минск ул.Шугаева д.99</p>
                   <p class="adress_p">+375(29)543-23-43</p>
                   <p class="adress_p">+375(29)543-24-42</p>
                </address>
            </div>

            <div id="header_form" class="col-md-3 col-sm-4 col-xs-12">
            
                <form  name="search" action="{{asset('poisk')}}" method="get" class="hform form-inline pull-right">
                        {!!csrf_field()!!}
                    <div class="input-group">
                        <input class="form-control" id="searchInput" type="text" name="search" placeholder="Поиск">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-primary">Найти</button>
                        </div>
                    </div>
                
                </form>
                
            </div>
            
             <div class="basket text-right col-md-2 pull-right glyphicon glyphicon-shopping-cart">
                 <a class="basket_link" href="{{asset('basket')}}">Корзина</a>
                 <span class="numbers_tovar" >{{$counts}}</span>

             </div>
        </header>

       
        <nav id="nav" class="navbar navbar-inverse">

            <ul class="nav-pills">
                <li class="nav_list"><a class="menu_link" data-name="О нас" data-body="Узнать подробности" data-picture="minsk" href="#">{{__('pagination.about_us')}}</a></li>
                <li id="nav_list-hover" class="nav_list dropdown"><a class="menu_link" data-name="Услуги" data-body="Наши услуги" data-picture="page" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> {{__('pagination.services')}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{asset('design')}}">Дизайн</a></li>
                        <li><a href="#">Разработка</a></li>
                        <li><a href="#">Landing</a></li>
                        <li><a href="#">Продвижение</a></li>
                        <li><a href="#">Поддержка</a></li>
                    </ul>
                </li>
                <li class="nav_list"><a class="menu_link" data-name="Проекты" data-body="Проекты над которыми мы ведем работу" data-picture="minsk" href="#">{{__('pagination.progect')}}</a></li>
                <li class="nav_list"><a class="menu_link"  data-name="Новости" data-body="Свежие новсти о нас" data-picture="page" href="#">{{__('pagination.news')}}</a></li>
                <li class="nav_list"><a class="menu_link"  data-name="Контакты" data-body="Наше месторасположение" data-picture="minsk"  href="{{asset('contact')}}">{{__('pagination.contacts')}}</a></li>
                <li class="nav_list"><a class="menu_link"  data-name="Категории" data-body="Готовые решения для Вас" data-picture="page" href="{{asset('categories')}}">{{__('pagination.products')}}</a></li>

                <li id="nav_list-hover" class="nav_list dropdown"><a class="menu_link" data-name="Языки" data-body="Варианты выбора языка" data-picture="page" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> {{$lang}} <span class="caret"></span></a>
                    <ul class="dropdown-menu" >
                        <li><a href="/?lang=en">English</a></li>
                        <li><a href="/?lang=ru">Russian</a></li>                      
                          <a href="#"></a><!-- из LangComposer.php через SiteProvider.php-->
                    </ul>
                </li>
                      		
              <!-- Authentication Links -->
                        @guest
                           <span class="formreg_link-right pull-right">
                            <li class="nav_list">
                               <a class="nav-link" href="{{ route('login') }}">{{__('pagination.enter')}}</a>
                            </li>
                            <li class="nav_list">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{__('pagination.login')}}</a>
                                @endif
                            </li>
                            </span>
                        @else
                            <li class="nav_list nav-item dropdown pull-right">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                      
            </ul>
            
        </nav>

       
        <div class="way">
            <ol class="breadcrumb">
                <li><a href="{{asset('home')}}"></a> {{__('pagination.home')}} <a href="{{(asset($world))}}">{{ $world }}</a> / <a href="{{(asset($world2))}}">{{ $world2 }}</a></li>
            </ol>
        </div>

       
        <main id="main" class="row">

            <aside id="aside" class="col-md-3 col-sm-4 col-xs-12">

                <div class="aside_submenu">
                   <div id="name" class="stext_h1" style="margin-left:0;"></div>
				   <div id="body" class="item_h1" style="margin-left:0;"></div>
				   <img id="picture" src="{{('/img/bird.gif')}}"/>
                </div>


                <div class="aside_market hidden-xs">
                    <a href="#"><img id="market_banner" class="img-responsive" src="{{asset('/img/banner.gif')}}" title="call2bhunter" alt="banner"></a>
                </div>

               
                <div class="aside_weather">
                    <table class="weather" style="background-color:#f2f2f2; border: #cccccc 1px solid; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="2" cellspacing="0">
                        <tr>
                            <td><a href="http://6.pogoda.by/26850" style="font-family:Tahoma; font-size:12px; color:#003399;" title="Погода Минск на 6 дней - Гидрометцентр РБ" target="_blank">Погода Минск</a>
                            </td>
                        </tr>
                        <tr>
                            <td>

                                <table width=100% height=100% style="background-color:#f2f2f2; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <script type="text/javascript" charset="windows-1251" src="http://pogoda.by/meteoinformer/js/26850_1.js"></script>
                                        </td>
                                    </tr>
                                </table>

                            </td>
                        </tr>

                        <tr>
                            <td align="right">Информация сайта <a href="http://www.pogoda.by" target="_blank" style="font-family:Tahoma; font-size:12px; color:#003399;">pogoda.by</a>
                            </td>
                        </tr>
                    </table>

                </div>

            </aside>

            <div id="section" class="col-md-9 col-sm-8 col-xs-12">
@yield('content')
             
            </div>
        </main>

       
        <footer id="footer" class="row">

            <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                <p class="copyright_text">copyright&copy; 2018</p>
            </div>

            <div id="ftrmenu" class="col-md-4 col-sm-4 col-xs-12">

                <div class="row">
                    <span class="col-md-3 col-sm-2 col-xs-4"></span>
                    <h4 id="map_title" class="col-md-6 col-sm-8 col-xs-4 text-center">Карта сайта</h4>
                    <span class="col-md-3 col-sm-2 col-xs-4"></span>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                        <a class="map_link" href="/">Главная</a>
                        <a class="map_link" href="#">Услуги</a>
                        <a class="map_link" href="#">Новости</a>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                        <a class="map_link" href="#">Проекты</a>
                        <a class="map_link" href="#">О нас</a>
                        <a class="map_link" href="#">Блог</a>
                    </div>
                </div>
            </div>

           
            <div id="socialnet" class="col-md-4 col-sm-4 col-xs-12">

                <div class="row text-center">
                    <span class="col-md-2 col-sm-1 col-xs-4"></span>
                    <h2 id="socialnet_title" class="col-md-8 col-sm-10 col-xs-4">Мы в соцсетях</h2>
                    <span class="col-md-2 col-sm-1 col-xs-4"></span>
                </div>

                <div class="row">
                    <span class="col-md-3 col-sm-2 col-xs-3"></span>
                    <a class="col-md-2 col-sm-3 col-xs-2" title="vk" href="http://vk.com"><img class="img-responsive ftrimg_link" src="{{asset('/img/vk.png')}}" alt="vk"></a>

                    <a class="col-md-2 col-sm-3 col-xs-2" title="fb" href="http://facebook.com"><img class="img-responsive ftrimg_link" src="{{asset('/img/fb.png')}}" alt="fb"></a>

                    <a class="col-md-2 col-sm-3 col-xs-2" title="telegram" href="http://twitter.com"><img class="img-responsive ftrimg_link" src="{{asset('/img/tw.png')}}" alt="twitter"></a>

                    <span class="col-md-3 col-sm-1 col-xs-3"></span>
                </div>
                
            </div>
        </footer>
    </div>

   
   
   
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
	
	@section('script')
	    <script src="{{asset('/js/main.js')}}"></script>
	@show
    
</body>
</html>
