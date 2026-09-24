/**
 * Pexcon front-end behaviour, without jQuery.
 *
 * The plugin calls keep the options they always had; ColorlibUI provides
 * drop-in versions of Owl Carousel, Slick, Magnific Popup and Isotope that
 * build the same markup, so the theme's stylesheets apply unchanged.
 */
(function () {
  'use strict';

  var UI = window.ColorlibUI;
  if (!UI) return;

  function onLoad(fn) {
    if (document.readyState === 'complete') {
      fn();
    } else {
      window.addEventListener('load', fn);
    }
  }

  UI.owl('.review_part_cotent', {
    items: 2,
    loop: true,
    dots: false,
    autoplay: true,
    margin: 40,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    nav: true,
    navText: ['<span class="flaticon-left-arrow"></span>', '<span class="flaticon-arrow-pointing-to-right"></span>'],
    responsive: {
      0: { nav: false, items: 1 },
      575: { nav: false, items: 2 },
      991: { nav: true, items: 1 },
      1200: { nav: true, items: 2 }
    }
  });

  UI.magnific('.popup-youtube, .popup-vimeo', {
    // disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  UI.owl('.textimonial_iner', {
    items: 1,
    loop: true,
    dots: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    nav: false,
    responsive: {
      0: { margin: 15 },
      600: { margin: 10 },
      1000: { margin: 10 }
    }
  });

  UI.enhanceSelects('select');

  // menu fixed js code
  window.addEventListener('scroll', function () {
    var fixed = window.pageYOffset + 1 > 50;
    UI.toElements('.main_menu').forEach(function (menu) {
      ['menu_fixed', 'animated', 'fadeInDown'].forEach(function (name) {
        menu.classList.toggle(name, fixed);
      });
    });
  }, { passive: true });

  UI.counter('.counter', { time: 2000 });

  // Main slider with a thumbnail strip; the thumbnail for the current slide
  // carries slick-active, and the .content block for it is the one shown.
  UI.ready(function () {
    function thumbs() {
      return UI.toElements('.slider-nav-thumbnails .slick-slide');
    }
    function show(el) {
      el.style.display = '';
      if (window.getComputedStyle(el).display === 'none') el.style.display = 'block';
    }

    UI.toElements('.slider').forEach(function (slider) {
      // On before slide change match active thumbnail to current slide
      slider.addEventListener('beforeChange', function (e) {
        thumbs().forEach(function (thumb, i) {
          thumb.classList.toggle('slick-active', i === e.detail.nextSlide);
        });
      });
      slider.addEventListener('afterChange', function (e) {
        UI.toElements('.content').forEach(function (content) {
          content.style.display = 'none';
        });
        UI.toElements('.content[data-id="' + (e.detail.currentSlide + 1) + '"]').forEach(show);
      });
    });

    UI.slick('.slider', {
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      speed: 300,
      infinite: true,
      asNavFor: '.slider-nav-thumbnails',
      autoplay: true,
      pauseOnFocus: true,
      dots: true
    });

    UI.slick('.slider-nav-thumbnails', {
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider',
      focusOnSelect: true,
      infinite: true,
      prevArrow: false,
      nextArrow: false,
      centerMode: true,
      responsive: [{
        breakpoint: 480,
        settings: { centerMode: false }
      }]
    });

    // Only the first thumbnail slide starts active.
    thumbs().forEach(function (thumb, i) {
      thumb.classList.toggle('slick-active', i === 0);
    });
  });

  UI.magnific('.img-pop-up', {
    type: 'image',
    gallery: { enabled: true }
  });

  // Project filter: the list items carry the Isotope filter in data-filter.
  onLoad(function () {
    var grids = [];
    if (document.getElementById('portfolio')) {
      grids = UI.isotope('.portfolio-grid', {
        itemSelector: '.all'
      });
    }

    var items = UI.toElements('.portfolio-filter ul li');
    items.forEach(function (item) {
      item.addEventListener('click', function () {
        items.forEach(function (li) { li.classList.remove('active'); });
        item.classList.add('active');

        var data = item.getAttribute('data-filter');
        grids.forEach(function (grid) {
          grid.arrange({ filter: data });
        });
      });
    });
  });
}());
