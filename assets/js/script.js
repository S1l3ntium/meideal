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
/*
   jQuery('#nav__button').attr('href', '/#thirdPage');
});

jQuery(window).bind('mousewheel', function (e) {
   if (e.originalEvent.wheelDelta / 120 > 0) {
      console.log('scrolling up');
   }
   else {
      console.log('scrolling down');
   }
});
*/
jQuery(document).on('click', '#link', function () {
   //default is 700. 
   fullpage_api.destroy();
   console.log("Bang!");
});
jQuery(window).load(function () {
   //default is 700. 
   fullpage_api.reBuild();
   console.log("Bong!");
});
/*
jQuery(window).load(function () {
   console.log("window");
});

jQuery(document).ready(function () {
   console.log("document");
});
*/