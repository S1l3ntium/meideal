var myFullpage = new fullpage('#fullpage', {
   //Навигация
   menu: '#menu',
   lockAnchors: false,
   anchors: ['firstPage', 'secondPage', 'thirdPage'],
   navigation: true,
   navigationPosition: 'right',
   showActiveTooltip: false,
   slidesNavigation: false,
   slidesNavPosition: 'bottom',

   //Скроллинг
   css3: true,
   scrollingSpeed: 450,
   autoScrolling: true,
   fitToSection: true,
   fitToSectionDelay: 1000,
   scrollBar: false,
   easing: 'easeInOutCubic',
   easingcss3: 'ease',
   loopBottom: false,
   loopTop: false,
   loopHorizontal: true,
   continuousVertical: false,
   continuousHorizontal: false,
   scrollHorizontally: false,
   interlockedSlides: false,
   dragAndMove: false,
   offsetSections: false,
   resetSliders: false,
   fadingEffect: false,
   normalScrollElements: '#element1, .element2',
   scrollOverflow: false,
   scrollOverflowReset: false,
   scrollOverflowOptions: null,
   touchSensitivity: 15,
   bigSectionsDestination: null,

   //Доступ
   keyboardScrolling: true,
   animateAnchor: true,
   recordHistory: true,

   //Дизайн
   controlArrows: true,
   verticalCentered: true,
   paddingTop: '0',
   paddingBottom: '0',
   fixedElements: '#header, .footer',
   responsiveWidth: 0,
   responsiveHeight: 0,
   responsiveSlides: false,
   parallax: false,
   parallaxOptions: { type: 'reveal', percentage: 62, property: 'translate' },
   cards: false,
   cardsOptions: { perspective: 100, fadeContent: true, fadeBackground: true },

   //Настроить селекторы
   sectionSelector: '.section',
   slideSelector: '.slide',

   lazyLoading: true,

   //события
   onLeave: function (origin, destination, direction) { },
   afterLoad: function (origin, destination, direction) { },
   afterRender: function () { },
   afterResize: function (width, height) { },
   afterReBuild: function () { },
   afterResponsive: function (isResponsive) { },
   afterSlideLoad: function (section, origin, destination, direction) { },
   onSlideLeave: function (section, origin, destination, direction) { },
});
