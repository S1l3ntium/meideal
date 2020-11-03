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
jQuery(document).ready(function () {
   jQuery('.call').click(function () {
      jQuery('.call__form').slideToggle(600, function () {
         if (jQuery(this).is(':hidden')) {
            jQuery('#phrase_id').removeClass('hidden');
            jQuery('#buttons').removeClass('hidden');
         } else {
            jQuery('#phrase_id').addClass('hidden');
            jQuery('#buttons').addClass('hidden');
         }
      });
      return false;
   });
});
jQuery(document).ready(function () {
   jQuery('.write').click(function () {
      jQuery('.write__form').slideToggle(600, function () {
         if (jQuery(this).is(':hidden')) {
            jQuery('#phrase_id').removeClass('hidden');
            jQuery('#buttons').removeClass('hidden');
         } else {
            jQuery('#phrase_id').addClass('hidden');
            jQuery('#buttons').addClass('hidden');
         }
      });
      return false;
   });
});
//selector
var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
   selElmnt = x[i].getElementsByTagName("select")[0];
   ll = selElmnt.length;
   /* For each element, create a new DIV that will act as the selected item: */
   a = document.createElement("DIV");
   a.setAttribute("class", "select-selected placehold");
   a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
   x[i].appendChild(a);
   /* For each element, create a new DIV that will contain the option list: */
   b = document.createElement("DIV");
   b.setAttribute("class", "select-items select-hide");
   for (j = 1; j < ll; j++) {
      /* For each option in the original select element,
      create a new DIV that will act as an option item: */
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function (e) {
         /* When an item is clicked, update the original select box,
         and the selected item: */
         var y, i, k, s, h, sl, yl;
         s = this.parentNode.parentNode.getElementsByTagName("select")[0];
         sl = s.length;
         h = this.parentNode.previousSibling;
         for (i = 0; i < sl; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
               s.selectedIndex = i;
               h.innerHTML = this.innerHTML;
               y = this.parentNode.getElementsByClassName("same-as-selected");
               yl = y.length;
               for (k = 0; k < yl; k++) {
                  y[k].removeAttribute("class");
               }
               this.setAttribute("class", "same-as-selected");
               break;
            }
         }
         h.click();
      });
      b.appendChild(c);
   }
   x[i].appendChild(b);
   a.addEventListener("click", function (e) {
      /* When the select box is clicked, close any other select boxes,
      and open/close the current select box: */
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
      this.classList.remove("placehold");
   });
}
function closeAllSelect(elmnt) {
   /* A function that will close all select boxes in the document,
   except the current select box: */
   var x, y, i, xl, yl, arrNo = [];
   x = document.getElementsByClassName("select-items");
   y = document.getElementsByClassName("select-selected");
   xl = x.length;
   yl = y.length;
   for (i = 0; i < yl; i++) {
      if (elmnt == y[i]) {
         arrNo.push(i)
      } else {
         y[i].classList.remove("select-arrow-active");
      }
   }
   for (i = 0; i < xl; i++) {
      if (arrNo.indexOf(i)) {
         x[i].classList.add("select-hide");
      }
   }
}
/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);