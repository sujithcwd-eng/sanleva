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





'use strict';

/* ── Storage ── */
var STORAGE_KEY = 'sanleva_reviews_v3';

function getUserReviews() {
  try { return JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]'); }
  catch(e) { return []; }
}
function setUserReviews(arr) {
  try { localStorage.setItem(STORAGE_KEY, JSON.stringify(arr)); } catch(e) {}
}

/* ── Default Reviews (no delete allowed) ── */
var DEFAULTS = [
  {
    name: 'Manikandan', rating: 5, isUser: false,
    text: "We've seen significant improvements in efficiency and decision-making, thanks to the actionable insights provided by the system. The predictive maintenance feature has reduced our downtime dramatically, saving us both time and costs."
  },
  {
    name: 'Swetha', rating: 4, isUser: false,
    text: "Sanleva's team has been incredibly supportive throughout the process, ensuring a smooth transition and ongoing assistance. I highly recommend Sanleva to any business looking to enhance its operational capabilities."
  },
  {
    name: 'Kumar', rating: 4, isUser: false,
    text: "The platform's seamless integration has transformed how we monitor our operations. We've seen significant improvements in efficiency and decision-making, thanks to the actionable insights provided by the system."
  }
];

/* ── Helpers ── */
function esc(s) {
  return String(s)
    .replace(/&/g,'&amp;').replace(/</g,'&lt;')
    .replace(/>/g,'&gt;').replace(/"/g,'&quot;');
}

function makeStars(n) {
  var h = '';
  for (var i = 1; i <= 5; i++) {
    h += '<i class="fas fa-star' + (i > n ? ' dim' : '') + '"></i>';
  }
  return h;
}

/* Quote SVG — two marks matching screenshot */
var QUOTE_SVG =
  '<svg viewBox="0 0 30 24" xmlns="http://www.w3.org/2000/svg">' +
    '<path d="M0 24V14.4C0 6.432 4.992 1.584 14.976 0l1.536 2.784C11.04 4.08 8.208 7.008 7.584 11.52H12V24H0zm18 0V14.4C18 6.432 22.992 1.584 32.976 0L34.512 2.784C29.04 4.08 26.208 7.008 25.584 11.52H30V24H18z"/>' +
  '</svg>';

/* ── Build one card slide ── */
function buildSlide(r, userIdx) {
  var canDelete = userIdx >= 0;
  var delBtn = canDelete
    ? '<button class="delete-btn" data-idx="' + userIdx + '" title="Delete this review">&#10005;</button>'
    : '';
  var badge = r.isUser ? '<span class="new-badge">New</span>' : '';

  return (
    '<div class="swiper-slide">' +
      '<div class="t-card">' +
        delBtn +
        '<div class="card-top">' +
          '<div class="card-meta">' +
            '<div class="card-name">' + esc(r.name) + badge + '</div>' +
            '<div class="card-stars">' + makeStars(r.rating) + '</div>' +
          '</div>' +
          '<div class="quote-icon">' +

            '<svg viewBox="0 0 14 11" width="18" height="18" xmlns="http://www.w3.org/2000/svg"><path fill="#8B3A2A" d="M0 11V6.6C0 2.95 2.3.73 6.9 0l.7 1.28C5.07 1.87 3.79 3.22 3.49 5.3H5.5V11H0zm7.5 0V6.6C7.5 2.95 9.8.73 14.4 0l.7 1.28c-2.53.59-3.81 1.94-4.11 4.02H13V11H7.5z"/></svg>' +
          '</div>' +
        '</div>' +
        '<p class="card-text">' + esc(r.text) + '</p>' +
      '</div>' +
    '</div>'
  );
}

/* ── Swiper ── */
var swiper = null;

function renderAll() {
  var wrapper = document.getElementById('testimonialWrapper');
  var userRevs = getUserReviews();

  var html = '';
  DEFAULTS.forEach(function(r) { html += buildSlide(r, -1); });
  userRevs.forEach(function(r, i) { html += buildSlide(r, i); });
  wrapper.innerHTML = html;

  /* Bind delete buttons AFTER DOM is set */
  wrapper.querySelectorAll('.delete-btn').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
      e.stopPropagation();
      openDelModal(parseInt(this.getAttribute('data-idx')));
    });
  });

  /* Rebuild Swiper */
  if (swiper) { swiper.destroy(true, true); swiper = null; }
  swiper = new Swiper('.testimonial-slider', {
    slidesPerView : 1,
    spaceBetween  : 24,
    loop          : true,
    pagination    : { el: '.swiper-pagination', clickable: true },
    navigation    : { prevEl: '#prevBtn', nextEl: '#nextBtn' },
    breakpoints   : {
      680  : { slidesPerView: 2, spaceBetween: 22 },
      1024 : { slidesPerView: 2, spaceBetween: 26 }
    },
    autoplay: { delay: 5000, disableOnInteraction: false },
    grabCursor: true
  });
}

/* ══ ADD MODAL ══ */
var addModal    = document.getElementById('addModal');
var nameInput   = document.getElementById('grName');
var textInput   = document.getElementById('grText');
var starPicker  = document.getElementById('starPicker');
var nameErr     = document.getElementById('nameErr');
var starErr     = document.getElementById('starErr');
var textErr     = document.getElementById('textErr');
var chosenRating = 0;

function openAddModal() {
  nameInput.value = '';
  textInput.value = '';
  chosenRating = 0;
  refreshStars(0);
  [nameInput, textInput].forEach(function(el) { el.classList.remove('err'); });
  [nameErr, starErr, textErr].forEach(function(el) { el.classList.remove('show'); });
  starPicker.classList.remove('err');
  addModal.classList.add('open');
  document.body.style.overflow = 'hidden';
  setTimeout(function() { nameInput.focus(); }, 100);
}
function closeAddModal() {
  addModal.classList.remove('open');
  document.body.style.overflow = '';
}
function refreshStars(val) {
  starPicker.querySelectorAll('span').forEach(function(s) {
    s.classList.toggle('lit', parseInt(s.getAttribute('data-v')) <= val);
  });
}

starPicker.querySelectorAll('span').forEach(function(s) {
  s.addEventListener('mouseover', function() { refreshStars(parseInt(this.getAttribute('data-v'))); });
  s.addEventListener('mouseleave', function() { refreshStars(chosenRating); });
  s.addEventListener('click', function() {
    chosenRating = parseInt(this.getAttribute('data-v'));
    refreshStars(chosenRating);
    starPicker.classList.remove('err');
    starErr.classList.remove('show');
  });
});

document.getElementById('googleReviewBtn').addEventListener('click', openAddModal);
document.getElementById('addClose').addEventListener('click', closeAddModal);
document.getElementById('addCancel').addEventListener('click', closeAddModal);
addModal.addEventListener('click', function(e) { if (e.target === addModal) closeAddModal(); });

document.getElementById('addPost').addEventListener('click', function() {
  var name = nameInput.value.trim();
  var text = textInput.value.trim();
  var valid = true;

  if (!name) { nameInput.classList.add('err'); nameErr.classList.add('show'); valid = false; }
  else { nameInput.classList.remove('err'); nameErr.classList.remove('show'); }

  if (!chosenRating) { starPicker.classList.add('err'); starErr.classList.add('show'); valid = false; }
  else { starPicker.classList.remove('err'); starErr.classList.remove('show'); }

  if (!text) { textInput.classList.add('err'); textErr.classList.add('show'); valid = false; }
  else { textInput.classList.remove('err'); textErr.classList.remove('show'); }

  if (!valid) return;

  var revs = getUserReviews();
  revs.push({ name: name, rating: chosenRating, text: text, isUser: true });
  setUserReviews(revs);

  renderAll();
  closeAddModal();
  showToast('✓ Review added successfully!', '#8B3A2A', '#fff');
  setTimeout(function() { if (swiper) swiper.slideTo(swiper.slides.length - 1); }, 350);
});

/* ══ DELETE MODAL ══ */
var delModal   = document.getElementById('delModal');
var pendingIdx = -1;

function openDelModal(idx) {
  var revs = getUserReviews();
  if (!revs[idx]) return;
  pendingIdx = idx;
  document.getElementById('delName').textContent = revs[idx].name + '   ' + '★'.repeat(revs[idx].rating);
  document.getElementById('delText').textContent = revs[idx].text;
  delModal.classList.add('open');
  document.body.style.overflow = 'hidden';
}
function closeDelModal() {
  delModal.classList.remove('open');
  document.body.style.overflow = '';
  pendingIdx = -1;
}

document.getElementById('delKeep').addEventListener('click', closeDelModal);
delModal.addEventListener('click', function(e) { if (e.target === delModal) closeDelModal(); });
document.getElementById('delConfirm').addEventListener('click', function() {
  if (pendingIdx < 0) return;
  var revs = getUserReviews();
  revs.splice(pendingIdx, 1);
  setUserReviews(revs);
  closeDelModal();
  renderAll();
  showToast('🗑 Review deleted', '#c0392b', '#fff');
});

/* ══ ESC KEY ══ */
document.addEventListener('keydown', function(e) {
  if (e.key !== 'Escape') return;
  if (addModal.classList.contains('open')) closeAddModal();
  if (delModal.classList.contains('open')) closeDelModal();
});

/* ══ TOAST ══ */
var toastEl = document.getElementById('toast');
var toastTimer;
function showToast(msg, bg, color) {
  clearTimeout(toastTimer);
  toastEl.textContent = msg;
  toastEl.style.background = bg;
  toastEl.style.color = color;
  toastEl.classList.add('show');
  toastTimer = setTimeout(function() { toastEl.classList.remove('show'); }, 3000);
}

/* ══ INIT ══ */
document.addEventListener('DOMContentLoaded', renderAll);

// Fix mobile tap — listen to both click and touchend
var gBtn = document.getElementById('googleReviewBtn');
gBtn.addEventListener('click', openAddModal);
gBtn.addEventListener('touchend', function(e) {
  e.preventDefault();   // prevent ghost click delay on iOS
  openAddModal();
});
document.getElementById('addClose').addEventListener('click', closeAddModal);
document.getElementById('addCancel').addEventListener('click', closeAddModal);
addModal.addEventListener('click', function(e) { if (e.target === addModal) closeAddModal(); });

document.getElementById('addPost').addEventListener('click', function() {
  var name = nameInput.value.trim();
  var text = textInput.value.trim();
  var valid = true;

  if (!name) { nameInput.classList.add('err'); nameErr.classList.add('show'); valid = false; }
  else { nameInput.classList.remove('err'); nameErr.classList.remove('show'); }

  if (!chosenRating) { starPicker.classList.add('err'); starErr.classList.add('show'); valid = false; }
  else { starPicker.classList.remove('err'); starErr.classList.remove('show'); }

  if (!text) { textInput.classList.add('err'); textErr.classList.add('show'); valid = false; }
  else { textInput.classList.remove('err'); textErr.classList.remove('show'); }

  if (!valid) return;

  var revs = getUserReviews();
  revs.push({ name: name, rating: chosenRating, text: text, isUser: true });
  setUserReviews(revs);

  renderAll();
  closeAddModal();
  showToast('✓ Review added successfully!', '#8B3A2A', '#fff');
  setTimeout(function() { if (swiper) swiper.slideTo(swiper.slides.length - 1); }, 350);
});
