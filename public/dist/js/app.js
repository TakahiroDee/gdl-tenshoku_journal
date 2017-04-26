$(function(){
  var gnav   = $('.tj-gnav');
  var headerH = 79;
  var $stuck = $('.tj-searchStuck__content');

  if($stuck.length > 0){
    var stuckOffset = $stuck.offset().top;
  }



  // fixed navbar
  $(window).on('scroll',function(){
    var st = $(this).scrollTop();

    if(st > headerH){
      gnav.addClass('fixed');
      gnav.animate({top : '0px'},'slow');
    }else{
      gnav.removeClass('fixed');
    }
  });

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
