<?php 
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>
<div id="fullpage">
   <div class="first section">
      <section class="first__center">
      <div class="container">
         <div class="row">
            <div class="phrase col-xl-12">
               <h2>Внедряем лучшие</h2>
               <h1>IT технологии</h1>
               <h2>для решения бизнес задач</h2>
               <button class="problem">
                  <a href="/#secondPage">Решить проблему</a>
               </button>
            </div>
         </div>
      </div>
      </section>
      <section class="first__footer">
      <div class="container">
         <div class="row">
            <div class="col-xl-4 networks">
               <a href="" target="_blank">
                  <i class="fab fa-instagram-square"></i>
               </a>
               <a href="" target="_blank">
                  <i class="fab fa-facebook"></i>
               </a>
               <a href="" target="_blank">
                  <i class="fab fa-twitter"></i>
               </a>
            </div>
            <div class="col-xl-4 butt__down">
               <section id="section02" class="demo">
                  <a href="#secondPage"><span></span></a>
               </section>
            </div>
            <div class="partners col-xl-4">
               <a href="">Партнерам сюда</a>
            </div>
         </div>
      </div>
   </section>
   </div>
   <div class="second section">
      <section class="second__center">
         <div class="container">
            <div class="row">
               <div class="phrase__second col-xl-12">
                  <h1>Чем помогаем?</h1>
                  <h2>N наших компетенций</h2>
               </div>
            </div>
         </div>
      </section>
      <section class="second__footer">
         <div class="container">
            <div class="row">
            <div class="col-xl-1 networks">
                  <a href="" target="_blank">
                     <i class="fab fa-instagram-square"></i>
                  </a>
                  <a href="" target="_blank">
                     <i class="fab fa-facebook"></i>
                  </a>
                  <a href="" target="_blank">
                     <i class="fab fa-twitter"></i>
                  </a>
               </div>
               <div class="slider__works col-xl-10">
                  <div class="card">
                     <h3>Автоматизация</h3>
                     <p>Автоматизируем любой бизнес-процесс на платформе 1С</p>
                     <button>
                        <a id="link" href="/automatization">Подробнее</a>
                     </button>
                  </div>
                  <div class="card">
                     <h3>Web-разработка</h3>
                     <p>Автоматизируем любой бизнес-процесс на платформе 1С</p>
                     <button>Подробнее</button>
                  </div>
                  <div class="card">
                     <h3>Хостинг</h3>
                     <p>Автоматизируем любой бизнес-процесс на платформе 1С</p>
                     <button>Подробнее</button>
                  </div>
                  <div class="card">
                     <h3>Виртуальный рабочий офис</h3>
                     <p>Автоматизируем любой бизнес-процесс на платформе 1С</p>
                     <button>Подробнее</button>
                  </div>
               </div>
               <div class="partners col-xl-1">
                  <a href="">Партнерам сюда</a>
               </div>
            </div>
      </div>
   </section>
   </div>
   <div class="third section">
      <div id="forms">
      <section class="second__center">
         <div class="container">
            <div class="row">
               <div id="phrase_id" class="phrase__third col-xl-12">
                  <h1>Всегда на связи</h1>
                  <h2>Как тебе удобнее поболтать с нами?</h2>
               </div>
            </div>
            <div class="row">
               <div id="buttons" class="col-xl-12">
                  <button id="btn" class="call">Заказать звонок</button>
                  <button id="btn" class="write">Написать</button>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
                  <div class="call__form" style="display:none;">
                     <div class="col-xl-12">
                        <p>Заполни форму, и мы перезвоним!</p>
                     </div>
                     <div class="col-xl-12">
                        <input type='text' placeholder='Ваше имя' class='input-line'></input>
                        <div class="custom-select" style="width:360px;">
                           <select>
                              <option value="0">Услуга</option>
                              <option value="1">Автоматизация</option>
                              <option value="2">Web-разработка</option>
                              <option value="3">Виртуальный рабочий офис</option>
                              <option value="4">Хостинг</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-xl-12">
                        <input type='text' placeholder='Ваш номер телефона' class='input-line'></input>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="write__form" style="display:none;">
                     <div class="col-xl-12">456</div>
                     <div class="col-xl-12"></div>
                     <div class="col-xl-12"></div>
                  </div>
               </div>
         </div>
      </section>
      <section class="second__footer">
         <div class="container">
            <div class="row">
               <div class="col-xl-4 networks">
                  <a href="" target="_blank">
                     <i class="fab fa-instagram-square"></i>
                  </a>
                  <a href="" target="_blank">
                     <i class="fab fa-facebook"></i>
                  </a>
                  <a href="" target="_blank">
                     <i class="fab fa-twitter"></i>
                  </a>
               </div>
               <div class="partners__third col-xl-8">
                  <h4>Все права защищены</h4>
                  <h4>+7 (495) 799 15 09</h4>
                  <h4>info@meideal.ru</h4>
               </div>
            </div>
         </div>
      </section>
      </div>
   </div>
   </div>
</div>
<?php
get_footer(); ?>