//slider main page
jQuery(document).ready(function (jQuery) {
   jQuery('.slider__works').slick({
      slidesToShow: 3,
      autoplay: true,
      autoplaySpeed: 6000,
      arrows: true,
      prevArrow: '<div class="prev-college"><svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.5 1L1 9.5L9.5 18" stroke="#262626"/></svg></div>',
      nextArrow: '<div class="next-college"><svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L9.5 9.5L1 18" stroke="#262626"/></svg></div > ',
   });
});
// call button
jQuery(document).ready(function () {
   jQuery('#btn__call, #cll__button').click(function () {
      jQuery('.call__form').slideToggle(400, function () {
         if (jQuery(this).is(':hidden')) {
            jQuery('#phrase_id').removeClass('hidden');
            jQuery('#buttons').removeClass('hidden');
            jQuery('#write__menu__words').removeClass('hidden');
         } else {
            jQuery('#phrase_id').addClass('hidden');
            jQuery('#buttons').addClass('hidden');
            jQuery('#write__menu__words').addClass('hidden');
         };
      });
      /*
      jQuery('.hide__write__words').slideToggle(400, function () {
         if (jQuery(this).is(':hidden')) {
            jQuery('.write__menu__words').addClass('hidden');
         } else {
            jQuery('.write__menu__words').removeClass('hidden');
         };
      });
      jQuery('.hide__write__button').slideToggle(400, function () {
         if (jQuery(this).is(':hidden')) {
            jQuery('.write__menu__button').addClass('hidden');
            jQuery('.main__button').removeClass('hidden');
         } else {
            jQuery('.write__menu__button').removeClass('hidden');
            jQuery('.main__button').addClass('hidden');
         };
      });
      */
      return false;
   });
});
//write button
/*
jQuery(document).ready(function () {
   jQuery('#btn__write, #wrt__button').click(function () {
      jQuery('.write__form').slideToggle(400, function () {
         if (jQuery(this).is(':hidden')) {
            jQuery('#phrase_id').removeClass('hidden');
            jQuery('#buttons').removeClass('hidden');
            jQuery('#call__menu__words').removeClass('hidden');
         } else {
            jQuery('#phrase_id').addClass('hidden');
            jQuery('#buttons').addClass('hidden');
            jQuery('#call__menu__words').addClass('hidden');
         }
      });
      jQuery('.hide__call__words').slideToggle(400, function () {
         if (jQuery(this).is(':hidden')) {
            jQuery('.call__menu__words').addClass('hidden');
         } else {
            jQuery('.call__menu__words').removeClass('hidden');
         };
      });
      jQuery('.hide__call__button').slideToggle(400, function () {
         if (jQuery(this).is(':hidden')) {
            jQuery('.call__menu__button').addClass('hidden');
            jQuery('.main__button').removeClass('hidden');
         } else {
            jQuery('.call__menu__button').removeClass('hidden');
            jQuery('.main__button').addClass('hidden');
         };
      });
      return false;
   });
});
*/
//textarea
var maxLength = 200;
jQuery('textarea').keyup(function () {
   var textlen = maxLength - jQuery(this).val().length;
   jQuery('#rchars').text(textlen);
});