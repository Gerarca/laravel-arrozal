 let header = document.getElementById('header');
 let logo = document.querySelector('.logo');
 let logoColor = document.querySelector('.logo-color');
 let menu = document.querySelector('.lista-menu');
 let altura = header.offsetTop;
 window.addEventListener('scroll', function() {
     if (window.pageYOffset > altura) {
         header.classList.add('changecolor');
         logo.classList.add('changecolor');
         logoColor.classList.add('changecolor');
         menu.classList.add('changecolor');
     } else {
         header.classList.remove('changecolor');
         logo.classList.remove('changecolor');
         logoColor.classList.remove('changecolor');
         menu.classList.remove('changecolor');
     }
 });

 // ///////Abrir menú///////////////
 let menuHam = document.querySelector('.btn-menu');
 let menuBody = document.querySelector('.menu-mobile');
 menuHam.addEventListener('click', function() {
     menuBody.classList.toggle('open');
     menuHam.classList.toggle('change-menu')
 });



 $(function() {
     let $window = $(window);
     let wSize = $window.outerHeight();
     let element = $('#scroll');
     if ($(window).width() > 320) {
         $window.on('scroll', function(event) {
             let wScroll = $window.scrollTop();

             element.each(function(index, el) {
                 let $this = $(this);
                 let eTop = $this.offset().top;
                 let eSize = $this.outerHeight();
                 let eFim = eTop + eSize;
                 let eScroll = wScroll - eTop;
                 let eNextTop = $this.next().offset().top;


                 if ((wScroll + wSize + (wSize / 2)) >= eTop && wScroll <= eFim) {
                     if (eScroll < 0) {
                         $this.find('.scroll').css('right', `${eScroll}px`);
                     } else if (eScroll >= 0) {}
                 }


                 if (wScroll >= eTop && wScroll <= (eNextTop)) {
                     if (eScroll >= 0) {
                         $this.find('.mapa-1').css({ left: `-${eScroll}px`, opacity: (1 - (eScroll) / 500) });
                     }
                     if (eScroll >= 600) {
                         $this.find('.mapa-2').css({ left: `-${eScroll-600}px`, opacity: (1 - (eScroll - 600) / 500) });
                     }
                     $this.find('.mapa-1, .mapa-2, .mapa-3').addClass('p-fixed');
                 } else {

                     $this.find('.mapa-1, .mapa-2, .mapa-3').removeClass('p-fixed');
                 }

             });
         });
     }
 });



 $('.owl-testimonios').owlCarousel({
     loop: true,
     margin: 0,
     nav: false,
     dots: true,
     autoplay: true,
     autoplayTimeout: 8000,
     responsive: {
         0: {
             items: 1
         },
         600: {
             items: 1
         },
         1000: {
             items: 1
         }
     }
 });