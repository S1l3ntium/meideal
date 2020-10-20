<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package meideal
 */

get_header();
?>
<div id="fullpage">
   <div class="first section">
      <section class="first__center">
      <div class="container">
         <div class="row">
            <div class="phrase col-xl-12">
               <h2>Внедряем лучшие</h2>
               <h1>IT технологии</h1>
               <h2>для решения бизнес задач</h2>
               <button class="problem">Решить проблему</button>
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
                  <a href=""><span></span></a>
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
               <div class="phrase col-xl-12">
                  <h1>Чем помогаем?</h1>
                  <h2>N наших компетенций</h2>
               </div>
            </div>
         </div>
      </section>
      <section class="second__slider">

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
            <div class="col-xl-4 butt__down">
               <section id="section02" class="demo">
                  <a href=""><span></span></a>
               </section>
            </div>
            <div class="partners col-xl-4">
               <a href="">Партнерам сюда</a>
            </div>
         </div>
      </div>
   </section>
   </div>
</div>
<?php
get_footer();
