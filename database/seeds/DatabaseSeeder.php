<?php

use Illuminate\Database\Seeder;
use App\Maintext;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MaintextSeeder::class);
        
        Maintext::create([
            'name'=>'main',
            'body'=>' <div class="row section_text stext">
                   
                    <div class="col-md-12">
                        <h1 class="stext_h1">Почему заказать сайт лучше у нас?</h1>
                          <p class="stext_p"><span>&nbsp;&nbsp;&nbsp;&nbsp;Мы предлагаем профессиональную разработку сайтов в Минске и по всей Беларуси. Только за 2017 год наши специалисты реализовали проекты в более, чем 30 тематиках: авто (продажа, трансфер, выкуп), страхование, кредитный консалтинг, услуги в сфере красоты, воротные системы, смазочные материалы, мебель, окна, нагревательные системы и многие другие.Наши Клиенты предлагают рынку достойные продукты и услуги и гордятся своим делом. А мы гордимся реализованными для них проектами. Более 90% разработанных в агентстве сайтов остаются в на технической поддержке и SEO-продвижении.</span></p>
                    </div>
                    
                </div>

               
                <div id="section_img" class="row text-center">

                    <div class="col-md-4">
                        <h1 class="item_h1">Бесплатный домен на <br> 1 год</h1>
                        <img class="img-responsive link_img-main" src="(/img/lending-minsk.png)" alt="lending-minsk">
                    </div>

                    <div class="col-md-4">
                        <h1 class="item_h1">Настройка контекстной рекламы</h1>
                        <img class="img-responsive link_img-main" src="(/img/page.png)" alt="page">
                    </div>

                    <div class="col-md-4">
                        <h1 class="item_h1">Визуальный редактор содержимого</h1>
                        <img  class="img-responsive link_img-main" src="(/img/lending.png)" alt="lending">
                    </div>
                    
                      <div class="col-md-4">
                        <br><h1 class="item_h1">Экономия Ваших денег и времени</h1>
                        <img class="img-responsive link_img-main" src="(/img/landing-minsk.png)" alt="landing-minsk">
                    </div>
                    
                      <div class="col-md-4">
                        <br><h1 class="item_h1">2 недели технической поддержки</h1>
                        <img class="img-responsive link_img-main" src="(/img/odnostranichnyj-sajt.png)" alt="odnostranichnyj-sajt">
                    </div>
                    
                      <div class="col-md-4">
                        <br><h1 class="item_h1">Подключение <br> SSL-сертификата</h1>
                        <img class="img-responsive link_img-main" src="(/img/minsk.png)" alt="minsk">
                    </div>

                </div>

                <div class="row section_text stext">
                    
                    <div class="col-md-12">
            
                        <p class="stext_p"><span>&nbsp;&nbsp;&nbsp;&nbsp;Чем бы вы ни занимались, ваша компания уникальна. И задача наших специалистов - показать это интернет-пользователю и сделать так, чтобы ваш потенциальный Клиент стал вашим постоянным Клиентом. Разработанный профессиональной командой сайт поможет грамотно презентовать компанию и станет незаменимым инструментом для продвижения вашего бизнеса в интернете. Характеристики наших сайтов: </span></p>
                        
                        <ul style="padding-left:20px">
                        <li type="disc" class="stext_p">адаптивный, удобно пользоваться с любого мобильного и ТВ-устройства;</li>
                        <li type="disc" class="stext_p">уникальный дизайн;</li>
                        <li type="disc" class="stext_p">подходит для дальнейшего продвижения в поисковых системах (SEO).</li>  
                        </ul>
                        
                        <br><p class="stext_p"><span>&nbsp;&nbsp;&nbsp;&nbsp;С 2016 года мы также можем предложить готовые решения, которые дорабатываются согласно поставленным задачам. Стоимость работ зависит от сложности проекта, поэтому для оценки рекомендуем заполнить бриф. Обращайтесь к консультантам нашего агентства по электронной почте <a href="mailto:vyts_vyts@mail.ru">vyts_vyts@mail.ru </a>или указанным телефонам.</span></p>
                        
                    </div>
                    
                       <div class="col-md-12">
                        <br><div><a class="btn btn-primary btn-block links_menu" href="#">Бриф</a></div>
                       </div>
                    
                </div>',
            'url'=>'index',
            'user_id'=>'1'
            
            
        ]);
    }
}
