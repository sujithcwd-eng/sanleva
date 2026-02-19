(function ($) {
    "use strict";

    $(document).ready(function () {

        //>> Mobile Menu Js Start <<//
        $('#mobile-menu').meanmenu({
            meanMenuContainer: '.mobile-menu',
            meanScreenWidth: "991",
            meanExpand: ['<i class="far fa-plus"></i>'],
        });

        //>> Sidebar Toggle Js Start <<//
        $(".offcanvas__close,.offcanvas__overlay").on("click", function () {
            $(".offcanvas__info").removeClass("info-open");
            $(".offcanvas__overlay").removeClass("overlay-open");
        });
        $(".sidebar__toggle").on("click", function () {
            $(".offcanvas__info").addClass("info-open");
            $(".offcanvas__overlay").addClass("overlay-open");
        });

        //>> Body Overlay Js Start <<//
        $(".body-overlay").on("click", function () {
            $(".offcanvas__area").removeClass("offcanvas-opened");
            $(".df-search-area").removeClass("opened");;
            $(".body-overlay").removeClass("opened");
        });

        //>> Sticky Header Js Start <<//

        $(window).scroll(function () {
            if ($(this).scrollTop() > 250) {
                $("#header-sticky").addClass("sticky");
            } else {
                $("#header-sticky").removeClass("sticky");
            }
        });

        //>> Hero-1 Slider Start <<//
        const sliderActive2 = ".hero-slider";
        const sliderInit2 = new Swiper(sliderActive2, {
            loop: true,
            slidesPerView: 1,
            effect: "fade",
            speed: 8000,
            autoplay: {
                delay: 10000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".array-prev",
                prevEl: ".array-next",
            },
        });

        function animated_swiper(selector, init) {
            const animated = function animated() {
                $(selector + " [data-animation]").each(function () {
                    let anim = $(this).data("animation");
                    let delay = $(this).data("delay");
                    let duration = $(this).data("duration");
                    $(this)
                        .removeClass("anim" + anim)
                        .addClass(anim + " animated")
                        .css({
                            webkitAnimationDelay: delay,
                            animationDelay: delay,
                            webkitAnimationDuration: duration,
                            animationDuration: duration,
                        })
                        .one("animationend", function () {
                            $(this).removeClass(anim + " animated");
                        });
                });
            };
            animated();
            init.on("slideChange", function () {
                $(sliderActive2 + " [data-animation]").removeClass("animated");
            });
            init.on("slideChange", animated);
        }
        animated_swiper(sliderActive2, sliderInit2);
        //>> Banner Animation <<//


        //>> Service Slider Start <<// 
        const serviceSlider2 = new Swiper(".service-slider-2", {
            spaceBetween: 30,
            speed: 1500,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".dot-2",
                clickable: true,
            },

            breakpoints: {
                1199: {
                    slidesPerView: 4,
                },
                991: {
                    slidesPerView: 2,
                },
                767: {
                    slidesPerView: 2,
                },
                575: {
                    slidesPerView: 2,
                },
                0: {
                    slidesPerView: 1,
                },
            },
        });



        //>> Wow Animation Start <<//
        new WOW().init();

//project slider

        const projectSlider3 = new Swiper(".project-slider-3", {
            spaceBetween: 30,
            speed: 1500,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".dot-2",
                clickable: true,
            },
            breakpoints: {
                1199: {
                    slidesPerView: 4,
                },
                991: {
                    slidesPerView: 2,
                },
                767: {
                    slidesPerView: 2,
                },
                650: {
                    slidesPerView: 2,
                },

                575: {
                    slidesPerView: 1,
                },

                0: {
                    slidesPerView: 1,
                },
            },
        });



        //>> Testimonial Slider  <<// 

        const testimonialSlider2 = new Swiper(".testimonial-slider-2", {
            speed: 1500,
            loop: true,
            spaceBetween: 30,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".array-prev",
                prevEl: ".array-next",
            },
            breakpoints: {
                991: {
                    slidesPerView: 2,
                },
                767: {
                    slidesPerView: 1,
                },

                575: {
                    slidesPerView: 1,
                },

                0: {
                    slidesPerView: 1,
                },
            },

        });




     

        //>> Mouse Cursor Start <<//
        function mousecursor() {
            if ($("body")) {
                const e = document.querySelector(".cursor-inner"),
                    t = document.querySelector(".cursor-outer");
                let n,
                    i = 0,
                    o = !1;
                (window.onmousemove = function (s) {
                    o ||
                        (t.style.transform =
                            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                        (e.style.transform =
                            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                        (n = s.clientY),
                        (i = s.clientX);
                }),
                    $("body").on("mouseenter", "a, .cursor-pointer", function () {
                        e.classList.add("cursor-hover"), t.classList.add("cursor-hover");
                    }),
                    $("body").on("mouseleave", "a, .cursor-pointer", function () {
                        ($(this).is("a") && $(this).closest(".cursor-pointer").length) ||
                            (e.classList.remove("cursor-hover"),
                                t.classList.remove("cursor-hover"));
                    }),
                    (e.style.visibility = "visible"),
                    (t.style.visibility = "visible");
            }
        }
        $(function () {
            mousecursor();
        });



        //>> Set Background Image  & Mask<<// 
  


          // Function to add animation classes
        function animationProperties() {
            $('[data-ani]').each(function () {
                var animationName = $(this).data('ani');
                $(this).addClass(animationName);
            });

            $('[data-ani-delay]').each(function () {
                var delayTime = $(this).data('ani-delay');
                $(this).css('animation-delay', delayTime);
            });
        }
        animationProperties();

        // Add click event handlers for external slider arrows based on data attributes
        $('[data-slider-prev], [data-slider-next]').on('click', function () {
            var sliderSelector = $(this).data('slider-prev') || $(this).data('slider-next');
            var targetSlider = $(sliderSelector);

            if (targetSlider.length) {
                var swiper = targetSlider[0].swiper;

                if (swiper) {
                    if ($(this).data('slider-prev')) {
                        swiper.slidePrev();
                    } else {
                        swiper.slideNext();
                    }
                }
            }
        });


    }); // End Document Ready Function

    function loader() {
        $(window).on('load', function () {
            // Animate loader off screen
            $(".preloader").addClass('loaded');
            $(".preloader").delay(600).fadeOut();
        });
    }

    loader();
})(jQuery); // End jQuery



// Model style-pop

(function(){

  /* ── Get elements ── */
  var modal      = document.getElementById('grModal');
  var openBtn    = document.getElementById('googleReviewBtn');
  var closeBtn   = document.getElementById('grClose');
  var cancelBtn  = document.getElementById('grCancel');
  var postBtn    = document.getElementById('grPost');
  var nameEl     = document.getElementById('grName');
  var textEl     = document.getElementById('grText');
  var stars      = document.querySelectorAll('#grStars span');
  var toast      = document.getElementById('grToast');
  var selectedRating = 0;

  /* ── Star picker ── */
  stars.forEach(function(star){
    star.addEventListener('mouseenter', function(){
      var val = parseInt(this.getAttribute('data-val'));
      stars.forEach(function(s){
        s.style.color = parseInt(s.getAttribute('data-val')) <= val ? '#f5c518' : '#2a3550';
      });
    });
    star.addEventListener('click', function(){
      selectedRating = parseInt(this.getAttribute('data-val'));
      stars.forEach(function(s){
        s.style.color = parseInt(s.getAttribute('data-val')) <= selectedRating ? '#f5c518' : '#2a3550';
      });
    });
  });

  document.getElementById('grStars').addEventListener('mouseleave', function(){
    stars.forEach(function(s){
      s.style.color = parseInt(s.getAttribute('data-val')) <= selectedRating ? '#f5c518' : '#2a3550';
    });
  });

  /* ── Open modal ── */
  function openModal(){
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
  }

  /* ── Close modal ── */
  function closeModal(){
    modal.style.display = 'none';
    document.body.style.overflow = '';
  }

  openBtn.addEventListener('click',  openModal);
  closeBtn.addEventListener('click', closeModal);
  cancelBtn.addEventListener('click',closeModal);

  /* Click backdrop */
  modal.addEventListener('click', function(e){
    if(e.target === modal) closeModal();
  });

  /* ESC key */
  document.addEventListener('keydown', function(e){
    if(e.key === 'Escape') closeModal();
  });

  /* ── Post review → append swiper slide ── */
  postBtn.addEventListener('click', function(){
    var name   = nameEl.value.trim();
    var text   = textEl.value.trim();
    var rating = selectedRating || 5;

    /* Validate */
    if(!name){
      nameEl.style.border = '1px solid #e05555';
      nameEl.focus(); return;
    } else { nameEl.style.border = '1px solid rgba(255,255,255,0.1)'; }

    if(!text){
      textEl.style.border = '1px solid #e05555';
      textEl.focus(); return;
    } else { textEl.style.border = '1px solid rgba(255,255,255,0.1)'; }

    /* Build stars HTML */
    var starHTML = '';
    for(var i=1;i<=5;i++){
      starHTML += '<i class="fas fa-star' + (i>rating?' color-text':'') + '"></i>';
    }

    /* Initials */
    var initials = name.split(/\s+/).map(function(w){return w[0];}).join('').toUpperCase().slice(0,2);

    /* Google G svg */
    var gSVG = '<svg viewBox="0 0 48 48" width="36" height="36">'
      +'<path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>'
      +'<path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>'
      +'<path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>'
      +'<path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.18 1.48-4.97 2.31-8.16 2.31-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>'
      +'</svg>';

    /* Find swiper instance */
    var swiperEl = document.querySelector('.testimonial-slider-2');
    if(swiperEl && swiperEl.swiper){
      swiperEl.swiper.appendSlide(
        '<div class="swiper-slide">'
        +'<div class="testimonial-box-items">'
        +'<div class="icon">'+gSVG+'</div>'
        +'<div class="client-items">'
        +'<div class="client-avatar">'+initials+'</div>'
        +'<div class="client-content">'
        +'<h4>'+name+'</h4>'
        +'<div class="star">'+starHTML+'</div>'
        +'</div></div>'
        +'<p>'+text+'</p>'
        +'</div></div>'
      );
      swiperEl.swiper.slideTo(swiperEl.swiper.slides.length - 1);
    }

    /* Reset */
    nameEl.value = '';
    textEl.value = '';
    selectedRating = 0;
    stars.forEach(function(s){ s.style.color = '#2a3550'; });

    closeModal();

    /* Toast */
    toast.style.opacity = '1';
    toast.style.transform = 'translateX(-50%) translateY(0)';
    setTimeout(function(){
      toast.style.opacity = '0';
      toast.style.transform = 'translateX(-50%) translateY(16px)';
    }, 3000);
  });

})();