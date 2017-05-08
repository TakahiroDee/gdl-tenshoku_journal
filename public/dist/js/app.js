$(function(){
  var gnav    = document.querySelector('.b-gnav');
  var headerH = document.querySelector('.l-header').clientHeight;

  var fixed_nav_bar = () => {
    var scrollTop = window.scrollY;

    if(scrollTop > headerH){
      gnav.classList.add('is-fixed');
      $(gnav).animate({"top" : "0"},'slow');
    }else{
      gnav.classList.remove('is-fixed');
    }
  }

  document.addEventListener('scroll',fixed_nav_bar,false);
});





$(function(){
  let $stuck = $('.tj-searchStuck__content');

  if($stuck.length > 0){
    var stuckOffset = $stuck.offset().top;
  }

  $(window).on('scroll resize',function(){
    // sicky menu
    var st = $(this).scrollTop();

    if(st > stuckOffset && window.innerWidth < 960){
      $stuck.css({'position':'static','width':'100%'});
    }else if(st > stuckOffset){
      if(window.innerWidth >= 960){
        $stuck.css({'position':'fixed','top': gnav.height() + 10 + 'px','width':'333px'});
      }else{
        $stuck.css({'position':'static','width':'100%'});
      }
    }else if(st < stuckOffset){
      $stuck.css({'position':'static','width':'100%'});
    }
  });

  // rating
  $('.ui.rating').rating('disable');
});
