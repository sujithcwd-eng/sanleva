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




var QUOTE_SVG =
  '<svg viewBox="0 0 30 24" xmlns="http://www.w3.org/2000/svg">' +
    '<path d="M0 24V14.4C0 6.432 4.992 1.584 14.976 0l1.536 2.784C11.04 4.08 8.208 7.008 7.584 11.52H12V24H0zm18 0V14.4C18 6.432 22.992 1.584 32.976 0L34.512 2.784C29.04 4.08 26.208 7.008 25.584 11.52H30V24H18z"/>' +
  '</svg>';




let swiper;
let chosenRating = 0;

function loadTestimonials() {

    fetch("get_review.php")
    .then(res => res.json())
    .then(data => {

        const wrapper = document.getElementById("testimonialWrapper");
        wrapper.innerHTML = "";

        data.forEach((item, index) => {
             let badge = index === 0 
        ? '<span class="new-badge">New</span>' 
        : '';

            wrapper.innerHTML += `


<div class="swiper-slide">
  <div class="t-card">
  <button class="delete-btn" data-idx="2" title="Delete this review" onclick="deleteReview(${item.id})">✕</button>
    <div class="card-top">
      <div class="card-meta">
        <div class="card-name">${item.name}  </div>
        <div class="card-stars">${makeStars(item.rating)}</div>
      </div>
      <div class="quote-icon">
       <svg viewBox="0 0 14 11" width="18" height="18" xmlns="http://www.w3.org/2000/svg">
          <path fill="#8B3A2A" d="M0 11V6.6C0 2.95 2.3.73 6.9 0l.7 1.28C5.07 1.87 3.79 3.22 3.49 5.3H5.5V11H0zm7.5 0V6.6C7.5 2.95 9.8.73 14.4 0l.7 1.28c-2.53.59-3.81 1.94-4.11 4.02H13V11H7.5z"/>
        </svg>
    </div>
    </div>
    <p class="card-text">${item.text}</p>
  
</div>
`;




        });
        function makeStars(rating) {
    rating = parseInt(rating);
    let stars = "";

    for (let i = 1; i <= 5; i++) {
        if (i <= rating) {
            stars += '<i class="fas fa-star"></i>';   // filled star
        } else {
            stars += '<i class="fas fa-star dim"></i>'; // dim star
        }
    }

    return stars;
}


const stars = document.querySelectorAll("#starPicker span");

stars.forEach(star => {

    // Hover effect
    star.addEventListener("mouseover", function () {
        const value = this.getAttribute("data-v");

        stars.forEach(s => {
            s.classList.toggle("lit", s.getAttribute("data-v") <= value);
        });
    });

    // Click (select rating)
    star.addEventListener("click", function () {
        chosenRating = this.getAttribute("data-v");
    });
});

// Remove hover when mouse leaves
document.getElementById("starPicker").addEventListener("mouseleave", function () {
    stars.forEach(s => {
        s.classList.toggle("lit", s.getAttribute("data-v") <= chosenRating);
    });
});

        if (swiper) swiper.destroy(true, true);

        swiper = new Swiper(".testimonial-slider", {
            slidesPerView: 2,
            spaceBetween: 20,
            loop: true,
            dots:false,
            pagination: { el: ".swiper-pagination", clickable: true },
            navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" }
            
            
        });   

    });
}

function addReview() {

    const name = document.getElementById("grName").value.trim();
    const text = document.getElementById("grText").value.trim();

    if (!name || !text || chosenRating == 0) {
        alert("All fields required");
        return;
    }

    fetch("add_review.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ name:name, rating:chosenRating, text:text })
    })
    .then(res => res.text())
    .then(() => {
        closeModal();
        loadTestimonials();
    });
}

function deleteReview(id) {
    fetch("delete_review.php?id=" + id)
    .then(() => loadTestimonials());
}

function setRating(value) {
    chosenRating = value;
}

function openModal() {
    document.getElementById("addModal").style.display = "block";
}

function closeModal() {
    document.getElementById("addModal").style.display = "none";
    chosenRating = 0;
    document.getElementById("grName").value = "";
    document.getElementById("grText").value = "";
}

document.addEventListener("DOMContentLoaded", loadTestimonials);
