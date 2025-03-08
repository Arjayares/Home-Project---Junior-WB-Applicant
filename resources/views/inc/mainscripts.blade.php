<script>
  const $win = $(window);
  const $doc = $(document);

  var lastScrollTop = 0;

  /* Main slider carousel */
  $(".banner--node-image > .field__items").slick({
    dots:         true,
    infinite:     true,
    slidesToShow: 1,
    autoplay:     true,
    arrows: false,
    fade: true,
  });

  /* Words from our clients carousel */
  $(".wfoc-content .view-words-from-our-clients > .view-content").slick({
    dots:         false,
    infinite:     true,
    slidesToShow: 1,
    autoplay:     true,
    arrows: true,
    fade: true,
    prevArrow:"<img class='a-left control-c prev slick-prev' alt='arrow-right' src='{{ URL::asset('/storage/slider_image/arrow-left') }}'>",
    nextArrow:"<img class='a-right control-c next slick-next' alt='arrow-left' src='{{ URL::asset('/storage/slider_image/arrow-right') }}'>"
  });

  /* Get the last word */
  if( $win.width() > 767) {
    $('.strong-last-word h2, .not-front h1.title, .second-word-highlight .field--name-field-title').html(function(){
      // separate the text by spaces
      var text= $(this).text().split(' ');
      // drop the last word and store it in a variable
      var last = text.pop();
      // join the text back and if it has more than 1 word add the span tag
      // to the last word
      return text.join(" ") + (text.length > 0 ? ' <span class="word-strong">'+last+'</span>' : last);
    });

    /* Get the last two words */
    $('.strong-last-two-word h2').html(function(){
      // separate the text by spaces
      var splitted = $(this).text().split(" ");

      // drop the last two words on string
      var two_words = splitted.splice(splitted.length - 2);

      return splitted.join(" ") + ' <span class="word-strong">'+two_words[0] + " " + two_words[1]+'</span>';
    });
  }

  /* Relocate */
  $("#block-whoweare h2").insertBefore( $("#block-whoweare .field--name-field-content") );
  $("#block-careersformnote").insertBefore( $(".node--type-career .field--name-field-application-form") );


  /* Set BG on block dynamically */
  let $block_bg = $(".onp-bg .field--name-field-basic-banner").text();
  $("._block-bg-container").css({
    "background-image": "url("+$block_bg+")",
  });

  /* Toggle menu */
  $('.site-header-menu-toggle--button').on('click', function() {
    $('.site-header-menu-toggle--button').toggleClass('active');

    /*
    // make sure the mobile toggle button follow the state of default toggle button
    if( $(".mobile-menu .site-header-menu-toggle--button").hasClass("active") ) {
      $(".mobile-menu .site-header-menu-toggle--button").addClass("active");
    } else {
      $(".mobile-menu .site-header-menu-toggle--button").removeClass("active");
    }*/

    $(".menu-fixed").toggleClass('active');
    $("body").toggleClass('menu-open');

    if( $("body").hasClass("menu-open") ) {
      $(window).unbind('scroll');
      console.log("menu open");
    }
    else {
      console.log("menu closes");
    }

    return false;
  });

  /* Venobox */
  $('.venobox').venobox({
    spinner:    'cube-grid',
    overlayColor: 'rgba(39, 36, 68, 0.8)',
  });

  /* title checking for backpages banner */
  if( $(".backpages-banner-wrapper").length > 0 ) $(".main-content h1.title").remove();

  if( $(".not-front .view-backpage-banner").length > 0 ) {
    $(".main-content h1.title").insertAfter( $(".view-backpage-banner .views-field-field-images .img-wrap") );
  }

  /* Tabs logic */
  $(".tablink").on('click', function() {
    let $id = $(this).attr("id");

    // remove active class on other tablink
    $(".tablink").removeClass("tab-active");

    // add active class to current tablink
    $(this).addClass("tab-active");

    // show tab content base on active tablink
    $(".tabcontent").removeClass("tab-active");
    $(".tab-contents").find("#"+$id).addClass("tab-active");
  });

  $(".tablink2").on('click', function() {
    let $id = $(this).attr("id");

    // remove active class on other tablink
    $(".tablink2").removeClass("tab-active");

    // add active class to current tablink
    $(this).addClass("tab-active");

    // show tab content base on active tablink
    $(".tabcontent2").removeClass("tab-active");
    $(".tab-contents2").find("#"+$id).addClass("tab-active");
  });


  /* Accordion logic */
  $(".card-header button").on('click', function() {
    $(".card-header").removeClass("accordion-active");
    $(this).parent().addClass("accordion-active");

    var $header_card = $(this).closest('.card-header');

    setTimeout(function(){
      $('html,body').animate({
        scrollTop: $header_card.offset().top
      }, 500);
    }, 500);

  });

  /* News and Event read more button */
  $(".ne-rm").on('click', function() {
    var $href = $(this)[0].href;

    // reset the modal to loader before showing new data
    $('.modal-body-content').html('<div class="spinner-wrapper"><div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>');

    $('.news-event-modal').modal('show');

      $.ajax({
        url: $href,
        context: document.body
      })
      .done(function(data) {
        var output = $(data).find('.node__content').html();

        $('.modal-body-content').html(output).fadeIn(200);
      });

      return false;
  });


  /* Front services block */
  $(".view-services .services-item").click(function() {
    let $link = $(this).find(".views-field-name a").attr("href");
    window.location.href = $link;
  });

  /* Nice scroll */
  // allow nicescroll only for pc/desktop.
  // if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
  // $("body").niceScroll({
  //   cursorcolor: "#282649",
  //   cursorwidth:"5px",
  //   cursorborder: "1px solid #282649",
  //   horizrailenabled:	false,
  //   zindex: '45',
  //   //emulatetouch: false,
  //       //bouncescroll: false,
  //       //cursordragontouch: false,
  //       //sensitiverail: false,
  // });
  // }

  $(".map-contents, .tab-links").niceScroll({
    cursorcolor: "#EEE",
    cursorwidth:"9px",
    railoffset: true,
    railpadding: { top: 10, right: 3, left: 3, bottom: 10 },
    horizrailenabled:	false,
  });

  $(".tab-contents").niceScroll({
    cursorcolor: "#983738",
    cursorwidth:"9px",
    railoffset: true,
    railpadding: { top: 10, right: 3, left: 3, bottom: 10 },
    });

    $(".tablink").click(function() {
    $(".tab-contents").getNiceScroll().resize();
  });


    $(".tablink2").click(function() {
    $(".tab-contents2").getNiceScroll().resize();
  });



  /* close sidebar menu when clicking outside the menu */
  $('html').on('click', function() {
  if( $(".site-header-menu-toggle--button").hasClass("active") ) {
      $(".menu-fixed").removeClass('active');
      $("body").removeClass('menu-open');
      $(".site-header-menu-toggle--button").removeClass("active");
    }
  });

  $('#block-mainnavigation').click(function(event){
    event.stopPropagation();
  });
  /* end here -- close sidebar menu when clicking outside the menu */

  // add class to the last ODD element
  if( $('.paragraph--type--multiple-blocks > .field > .field__item').length %2 != 0 ) {
    $('.paragraph--type--multiple-blocks > .field > .field__item').last().addClass("element-fluid");
  }

  /*
  $(".tabcontent").each(function() {
  if( $(this).find('.paragraph--type--multiple-blocks > .field > .field__item').length %2 != 0 ) {
    $(this).find('.paragraph--type--multiple-blocks > .field > .field__item').last().addClass("element-fluid");
  }
  });
  */

  /* Prevent special character */
  $('form input[type="text"],form textarea').on('keypress', function(e){
  var txt = String.fromCharCode(e.which);

    if( !txt.match(/^[a-zA-Z0-9 ]*$/) ) {
      return false;
    }
  });


  /* Smooth scrolling */
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);

        return false;
      }
    }
  });

  let $tabButtonHeight = $(".tablinks-wrapper").outerHeight(true);
  let $tabContHeight = $(".tab-contents").outerHeight(true);
  let $borderHeight = eval($tabContHeight - $tabButtonHeight);

  //$(".tab-contents").append( "<div class='testing' style=height:"+$borderHeight+"px></div>" );
  //$(".tab-contents").append('<style>.tab-contents:before{height:'+$borderHeight+'px}</style>');

  /*$(".tab-contents").css({
  "height": $borderHeight+"px",
  });*/

  /* block odd:even logic */
  let a  = isEven($(".block .services-item"));
  if(a === 'odd') {
    $(".block .services-item").last().addClass("element-fluid");
  }

  let b = isEven($(".block .block-solution-item"));
  if(b === 'odd') {
    $(".block .block-solution-item").last().addClass("element-fluid");
  }


  function isEven($el) {
    var $item = parseInt($el.length);

    if ( $item % 2 == 0 ) {
      return "even";
    }
    else {
      return "odd";
    }
  }


  /* Window onLoad */
  $win.on('load', () => {
    triggerLoading();
    //setTimeout(() => { triggerLoading(); }, 500);

    backToTop('#back2top');
    mapIcon();
    animateMapOnActive();
    alchemy();
  });

  /* Window Scroll */
  $win.on('scroll', function () {
    backToTop('#back2top');

    /* scroll detection */
    //let scroll_top = $(this).scrollTop();

    //if (scroll_top > lastScrollTop){
        // scroll down
        //$(".header.header").removeClass("show");
    //} else {
        // scroll up
        //$(".header.header").addClass("show");
    //}
    //lastScrollTop = scroll_top;
    /* end of scroll detection */

  });


  /* Functions */
  const triggerLoading = () => {
  /*
    $('.loader').fadeTo(400, 0);
    $('.js .layout-main-wrapper').fadeTo(400, 1);
    $('.js .top-full-row').fadeTo(450, 1);
    $('.js .bottom-full-row').fadeTo(500, 1);
    $('.js .site-footer').fadeTo(400, 1);
    $('.loader').hide();
  */
    $('body').fadeTo(300, 1);
  }

  // Hide show back to top links.
  const backToTop = (el) => {
    if ($win.scrollTop() > 300) {
      $(el).fadeIn();
    } else {
      $(el).fadeOut();
    }

    // $(el).each('backtotop', function () {
    //   $(this).on('click', function () {
    //     $('html, body').bind('scroll mousedown DOMMouseScroll mousewheel keyup', function () {
    //       $('html, body').stop();
    //     });
    //     $('html,body').animate({scrollTop: 0}, 1200, 'easeOutQuart', function () {
    //       $('html, body').unbind('scroll mousedown DOMMouseScroll mousewheel keyup');
    //     });
    //     return false;
    //   });
    // });
  }

  function mapIcon() {
    var controller = new ScrollMagic.Controller();
    var del1 = 0.3;
    var duration = 1;
    var offsetY = $('.map-image').height() + 100;

    $('.map-image span').each(function() {

      var bounce = new TimelineMax()
          .add(TweenLite.from(this, duration, {
            y          : -offsetY,
              delay      : del1,
              ease       :Bounce.easeOut,
          }));

      var trigger = new ScrollMagic.Scene({
          triggerElement    : '.map-image',
            reverse           : false,
            offset            : 300,
          triggerHook       : 1,
        })
        .setTween(bounce)
        .addTo(controller);

      del1 = del1 + 0.3;
    });
  }

  function animateMapOnActive() {
    $('.map-content-wrapper > div').on('click', function(){
      var mapID = $(this).attr('class');

      $('.map-content-wrapper > div').removeClass('active');
      $(this).addClass('active');

      $('.map-image span').each(function(){
        if ($(this).hasClass(mapID)) {
          $('.map-image span').removeClass('active');
          $(this).addClass('active');
        }
      });

    });

  }

  function alchemy() {
    var controller = new ScrollMagic.Controller();

    // fade-in
    $('.fadeEl').each(function(){

    var fadeIn = new TimelineMax()
      .add(TweenLite.from(this, 1.3, {
        y          : 0,
        autoAlpha  : 0,
        ease       : Power3.easeOut,
      }))
      .add(TweenLite.to(this, 1.3, {
        y         : 0,
        autoAlpha  : 1,
      }));

    var trigger = new ScrollMagic.Scene({
        triggerElement    : this,
        reverse           : false,
        offset            : 150,
        triggerHook       : 1,
      }).setTween(fadeIn)
        .addTo(controller);
    });

    /* Slide in up */
    $('.slide-up').each(function() {
      var slideUp = new TimelineMax()
       .add(TweenLite.from(this, 1.3, {
         y          : 50,
         autoAlpha  : 0,
         ease       : Power3.easeOut,
       }))
       .add(TweenLite.to(this, 1.3, {
          y         : 0,
         autoAlpha  : 1,
       }));

      var trigger = new ScrollMagic.Scene({
        triggerElement    : this,
        reverse           : false,
        offset            : 120,
        triggerHook       : 1,
      }).setTween(slideUp)
        .addTo(controller);
      });
    }


  /* Below Code is for implementing animations on specific element */
  $(".block-global-partners .views-field-field-logos .field-content .img-wrap, .paragraph.paragraph--type--two-blocks .field--name-field-blocks > .field__item, .ne-item, .contact-information-block, .block-views-blockprojects-block-projects").each(function() {
    var controller = new ScrollMagic.Controller();

    var slideUp = new TimelineMax()
     .add(TweenLite.from(this, 1.3, {
         y          : 50,
         autoAlpha  : 0,
         ease       : Power3.easeOut,
     }))
     .add(TweenLite.to(this, 1.3, {
          y         : 0,
         autoAlpha  : 1,
     }));

    var trigger = new ScrollMagic.Scene({
         triggerElement    : this,
         reverse           : false,
         offset            : 150,
         triggerHook       : 1,
      })
      .setTween(slideUp)
      .addTo(controller);
  });


  $('.page-node-12 .field--name-field-map, .node--type-custom-page .paragraph--type--image-and-text').each(function() {
    var controller = new ScrollMagic.Controller();

    var fadeIn = new TimelineMax()
       .add(TweenLite.from(this, 1.3, {
           y          : 0,
           autoAlpha  : 0,
           ease       : Power3.easeOut,
       }))
       .add(TweenLite.to(this, 1.3, {
            y         : 0,
           autoAlpha  : 1,
       }));

    var trigger = new ScrollMagic.Scene({
           triggerElement    : this,
           reverse           : false,
           offset            : 150,
           triggerHook       : 1,
        })
        .setTween(fadeIn)
        .addTo(controller);
  });


</script>
